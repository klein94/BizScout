<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = [
        'name',
        'address',
        'contact',
        'photo',
        'type',
        'keyword'
    ];
}
