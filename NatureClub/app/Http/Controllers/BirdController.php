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
    	$input = Request::except(['picture','images']);
    	$cName = $input['commonName'];

        if (Request::hasFile('images')) {
            $images = Request::file('images');
            $image_count = count($images);
            $i = $image_count;
            foreach ($images as $image) {
                $mulImageExt = $image->getClientOriginalExtension();
                if($mulImageExt != 'jpg')
                    {
                        $errormsg = "invalid pic format. Go back and use only .jpg files";
                        return view('/error',['errormsg'=>$errormsg]);
                    } 
                    
                $mulImageName = $cName.$i.'.'.$mulImageExt;
                $i=$i-1;
                $image->move(
                base_path() . '/public/otherimages/',$mulImageName
                ); 
            }
        }

        if (Request::hasFile('picture')) {
            $imageName = Request::file('picture')->getClientOriginalName();
            Request::file('picture')->move(
                base_path() . '/public/images/',$imageName
            );
        }

        Bird::create($input);
        Bird::where('commonName', $cName)->update(['picture' => $imageName, 'images' => $image_count]);
        return redirect('/show');
    }
    public function display(){
    	$birds = Bird::all();
    	return view('display',compact('birds'));
    }
    public function popup($name){
        $bird = Bird::where('commonName', $name)->get()[0];
        return view('lala',compact('bird'));
    }
}
