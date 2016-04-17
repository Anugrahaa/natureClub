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
    public function store(Request $request){
    	$input = Request::except(['picture']);
    	
        if (Request::hasFile('picture')) {
            $imageName = Request::file('picture')->getClientOriginalName();
            Request::file('picture')->move(
                base_path() . '/public/images/',$imageName
            );
        }

        Bird::create($input);
        Bird::where('commonName', $input['commonName'])->update(['picture' => $imageName]);
        return redirect('/show');
    }
    public function display(){
    	$birds = Bird::all();
    	return view('display',compact('birds'));
    }
    public function popup($image){
        return view('lala',compact('image'));
    }
}
