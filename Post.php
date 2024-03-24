<?php

namespace App\Models;

class post
{
   private static $blog_posts = [
[
    "title" => "Judul Post Pertama",
    "slug" => "judul-post-pertama",
    "author" => "Sandhika Galih",
    "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, repellendus aliquam. Debitis mollitia fugiat ullam aliquid nisi quibusdam, quae, harum sequi aliquam veritatis praesentium. Velit sint quas fugit excepturi esse nam laborum, doloremque eius cum quos laudantium repudiandae rem, praesentium recusandae officiis fugiat cupiditate quia modi perspiciatis doloribus optio officia mollitia! Animi sapiente quis illo odio suscipit molestiae eveniet dicta praesentium. Iure ipsa, non debitis nostrum aut perferendis similique placeat exercitationem odit vitae rem nam et illum repellendus rerum nemo?"
],
[
    "title" => "Judul Post Kedua",
    "slug" => "judul-post-kedua",
    "author" => "Doddy Ferdiansyah",
    "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, repellendus aliquam. Debitis mollitia fugiat ullam aliquid nisi quibusdam, quae, harum sequi aliquam veritatis praesentium. Velit sint quas fugit excepturi esse nam laborum, doloremque eius cum quos laudantium repudiandae rem, praesentium recusandae officiis fugiat cupiditate quia modi perspiciatis doloribus optio officia mollitia! Animi sapiente quis illo odio suscipit molestiae eveniet dicta praesentium. Iure ipsa, non debitis nostrum aut perferendis similique placeat exercitationem odit vitae rem nam et illum repellendus rerum nemo?"
]
];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function all()
    {
//        $posts = static::all();
//        $post = [];
//foreach($blog_posts as $p) {
//    if ($p[$slug] === $slug) {
//        $post = $p;
//    }
//}
return $post->firstWhere('slug', $slug);
    }
}