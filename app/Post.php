<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'id',
        'slug',
        'body',
    ];
    public $timestamps = false; //Указать, иначе sql выдаст ошибку при заполнении столбцов которых нет
}
