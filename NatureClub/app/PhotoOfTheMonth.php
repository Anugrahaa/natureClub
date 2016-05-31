<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotoOfTheMonth extends Model
{
  	protected $fillable=[
    'photo',
    'month',
    'year',
    'photo-by',
    'caption',
    'description'
    ];

    public $timestamps = false;
}
