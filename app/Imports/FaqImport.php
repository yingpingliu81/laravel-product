<?php

namespace App\Imports;

use App\Models\Blog;
use Maatwebsite\Excel\Concerns\ToModel;

class FaqImport implements ToModel
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
                'content' => removeStyle($row[2]),
                'is_active' => Blog::STATUS_VISIBLE,
                'type' => Blog::TYPE_FAQ,
                'published_at' => date('Y-m-d',strtotime($row[4])),
            ]
        );
        $blog->sort = Blog::max('sort') + self::SORT_STEP;
        return $blog;
    }

}
