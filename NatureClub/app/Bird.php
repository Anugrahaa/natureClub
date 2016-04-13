<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bird extends Model
{
    protected $fillable = [
    'picture',
    'commonName',
    'scientificName',
    'localStatus',
    'generalDescription',
    'diet',
    'localBreeding',
    'trivia'
    ];

    public $timestamps = false;
}
