<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Butterfly extends Model
{
    protected $fillable = [
    'commonName',
    'scientificName',
    'localStatus',
    'generalDescription',
    'hostPlants',
    'lifeCycle',
    'trivia'
    ];
    
    public $timestamps = false;
}