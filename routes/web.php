<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Mukhlis Khoirudin', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
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
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
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

    // Arr::first itu mencari elemen array pertama yang ketemu berdasarkan kriteria tertentu
    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'contact']);
});
