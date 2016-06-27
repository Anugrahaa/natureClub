<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flora extends Model
{
    protected $fillable = [
    'commonName',
    'scientificName',
    'abundance',
    'trivia'
    ];
    
    public $timestamps = false;
}