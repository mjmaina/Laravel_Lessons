<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //fillable content
    protected $fillable = ['title', 'content'];
    //custom timestamp name

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';
}
