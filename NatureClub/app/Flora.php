<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flora extends Model
{
    protected $fillable = [
    'commonName',
    'scientificName',
    'localStatus',
    'abundance',
    'trivia'
    ];
    
    public $timestamps = false;
}
