<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'mark', 'model', 'color', 'count', 'price'
    ];
}
