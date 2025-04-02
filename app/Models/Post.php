<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    //fillable = ngasih tau field yang boleh di isi
    protected $fillable = ['title', 'author', 'slug', 'body'];
}
