<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $primaryKey = 'id_book';

    protected $fillable = [
        'book_name', 
        'author',
        'publisher', 
        'description',
    ];
}
