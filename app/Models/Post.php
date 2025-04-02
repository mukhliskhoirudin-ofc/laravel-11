<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //fillable = ngasih tau field yang boleh di isi
    protected $fillable = ['title', 'author', 'slug', 'body'];
}
