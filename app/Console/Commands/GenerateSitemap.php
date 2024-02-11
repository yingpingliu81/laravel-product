<?php
namespace App\Console\Commands;
use App\Models\Blog;
use App\Models\Cate;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Automatically Generate an XML Sitemap';
    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $postsitmap = Sitemap::create();
        $postsitmap->add(
            Url::create("/")
                ->setPriority(1)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_NEVER)
        );

        $postsitmap->add(
            Url::create("/about")
                ->setPriority(0.9)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_NEVER)
        );

        $postsitmap->add(
            Url::create("/contact")
                ->setPriority(0.9)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_NEVER)
        );

        $postsitmap->add(
            Url::create("/news")
                ->setPriority(0.9)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_NEVER)
        );


        $postsitmap->add(
            Url::create("/blogs")
                ->setPriority(0.9)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_NEVER)
        );

        foreach (["warranty-registration","faq","approved-installers", "technical-support"] as $item) {
            $postsitmap->add(
                Url::create("/support/{$item}")
                    ->setPriority(0.9)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            );
        }

        foreach (["photo-gallery","where-to-buy","lithium-batteries-dealers", "technical-support"] as $item) {
            $postsitmap->add(
                Url::create("/product/{$item}")
                    ->setPriority(0.9)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            );
        }

        foreach (["battery-monitor", "battery-charger", "solar-ventilation", "voltage-regulator",
                     "batteries", "batteries-small", "batteries-large", "solar-fan",
                     "solar-panels", "solar-regulators", "portable-power", "pure-sine-wave-inverters",
                     "power-outlets", "discontinued-items"] as $item) {
            $postsitmap->add(
                Url::create("/{$item}")
                    ->setPriority(0.9)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            );
            $cate = Cate::where('type_slug', "accessories")->where('slug', $item)->with('visibleProducts')->priority()->first();
            foreach (data_get($cate, "visibleProducts", []) as $product) {
                $postsitmap->add(
                    Url::create("/accessories/$product->slug")
                        ->setPriority(0.9)
                        ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                );
            }
        }

        $cates = Cate::where('type_slug', "batteries-large")->with('visibleProducts')->priority()->get();
        foreach ($cates as $cate) {
            foreach (data_get($cate, "visibleProducts", []) as $product) {
                $postsitmap->add(
                    Url::create("/batteries-large/$product->slug")
                        ->setPriority(0.9)
                        ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                );
            }
        }

        Blog::get()->each(function (Blog $blog) use ($postsitmap) {
            $baseUrl = "blogs";
            if($blog->type == Blog::TYPE_NEWS) $baseUrl = "news";
            $postsitmap->add(
                Url::create("/$baseUrl/{$blog->slug}")
                    ->setPriority(0.8)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
            );
        });

        $postsitmap->add(
            Url::create("/policies")
                ->setPriority(0.7)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_NEVER)
        );

        $postsitmap->add(
            Url::create("/useful-links")
                ->setPriority(0.7)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_NEVER)
        );

        $postsitmap->writeToFile(public_path('sitemap.xml'));
    }
}
