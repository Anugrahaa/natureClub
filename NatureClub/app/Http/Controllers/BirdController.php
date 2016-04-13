<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;

use Request;

use App\Bird;

class BirdController extends Controller
{
    public function create(){
    	return view('edit');
    }
    public function store(){
    	$input = Request::all();
    	Bird::create($input);
    	return redirect('/show');
    }
    public function display(){
    	$birds = Bird::all();
    	$picture = $birds[0]['picture'];
    	return view('display',compact('birds','picture'));
    }
}
