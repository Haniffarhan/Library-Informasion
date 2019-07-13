<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    protected $fillable = [
        'id_book', 
        'id_user',
        'borrow_date', 
        'return_date',
    ];
}
