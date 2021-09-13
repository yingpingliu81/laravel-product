<?php

namespace App\Imports;

use App\Models\Blog;
use Maatwebsite\Excel\Concerns\ToModel;

class NewsImport implements ToModel
{
    const SORT_STEP = 10;

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $blog = Blog::firstOrCreate(
            [
                'slug' => $row[14]
            ],
            [
                'title' => $row[1],
                'content' => $row[2],
                'is_active' => Blog::STATUS_VISIBLE,
                'type' => Blog::TYPE_BLOG,
                'published_at' => date('Y-m-d',strtotime($row[4])),
            ]
        );
        $blog->sort = Blog::max('sort') + self::SORT_STEP;
        return $blog;
    }

   private  function removeStyle($html)
    {
        return  preg_replace('/\sstyle=("|\').*?("|\')/i', '', $html);
    }
}
