<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
  	protected $fillable=[
    'photo',
    'date',
    'eventName',
    'description'
    ];

    public $timestamps = false;
}
