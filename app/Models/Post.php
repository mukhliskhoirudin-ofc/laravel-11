<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => '1',
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Mukhlis Khoirudin',
                'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias quo reiciendis
                debitis fugit aut, eaque
                consequuntur. Repellat aperiam fugit porro ipsa voluptas consectetur impedit tempora aspernatur tenetur
                labore eius quasi inventore explicabo id perferendis neque, obcaecati suscipit cum qui quod.'
            ],
            [
                'id' => '2',
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Muhammad Elgio',
                'body' => 'consequuntur. Repellat aperiam fugit porro ipsa voluptas consectetur impedit tempora aspernatur tenetur
                        labore eius quasi inventore explicabo id perferendis neque, obcaecati suscipit cum qui quod.Lorem ipsum
                        dolor sit, amet consectetur adipisicing elit. Molestias quo reiciendis
                        debitis fugit aut, eaques a.'
            ]
        ];
    }

    public static function find($slug): array
    {
        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (! $post) {
            abort(404);
        }

        return $post;
    }
}
