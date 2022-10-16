<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article
{
    
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rausyanfikr Adi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, voluptatem rerum? Tenetur officia eius, tempora fugiat itaque qui doloribus ducimus, odio, rem odit facere consequuntur. Nemo, fuga recusandae? Aspernatur hic natus, sit laudantium perspiciatis sunt. Error, saepe animi suscipit, et dolorum quam nesciunt dignissimos voluptate, sint distinctio adipisci illum. Iusto similique, fugiat esse dolorum, totam facere quam maiores, placeat officiis in alias deserunt quasi. Optio deleniti maxime, ducimus, neque quisquam doloremque nesciunt asperiores perferendis, sapiente recusandae ex ipsam ipsum soluta."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Jancok Weeio",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, voluptatem rerum? Tenetur officia eius, tempora fugiat itaque qui doloribus ducimus, odio, rem odit facere consequuntur. Nemo, fuga recusandae? Aspernatur hic natus, sit laudantium perspiciatis sunt. Error, saepe animi suscipit, et dolorum quam nesciunt dignissimos voluptate, sint distinctio adipisci illum. Iusto similique, fugiat esse dolorum, totam facere quam maiores, placeat officiis in alias deserunt quasi. Optio deleniti maxime, ducimus, neque quisquam doloremque nesciunt asperiores perferendis, sapiente recusandae ex ipsam ipsum soluta."
        ]
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
