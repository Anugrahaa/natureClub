<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;

use Request;

use App\Bird;

class BirdController extends Controller
{
    public function store(Request $request){
        $can_save=1;
    	$input = Request::except(['picture','hotspot','images']);
        if(!$input['commonName']||!$input['scientificName'])
        {
            $can_save=0;
            $errormsg = "please go back and enter common name and scientific name";
            return view('/error',['errormsg'=>$errormsg]);
        }
    	$cName = $input['commonName'];
        $image_count = 0;
        if (Request::hasFile('images')) {
            $images = Request::file('images');
            $image_count = count($images);
            $i = $image_count;
            foreach ($images as $image) {
                $mulImageExt = $image->getClientOriginalExtension();
                if($mulImageExt != 'jpg')
                    {
                        $can_save=0;
                        $errormsg = "invalid pic format. Go back and use only .jpg files";
                        return view('/error',['errormsg'=>$errormsg]);
                    } 
                    
                $mulImageName = $cName.$i.'.'.$mulImageExt;
                $i=$i-1;
                $image->move(
                base_path() . '/public/otherbirdimages/',$mulImageName
                ); 
            }
        }
        if (Request::hasFile('picture')) {
            $imageName = Request::file('picture')->getClientOriginalName();
            Request::file('picture')->move(
                base_path() . '/public/birdimages/',$imageName
            );
        }
        else {   
                $can_save=0;
                $errormsg = "please upload a picture in the previous page";
                return view('/error',['errormsg'=>$errormsg]);
        }

        if (Request::hasFile('hotspot')) {
            $hotspotpic = Request::file('hotspot')->getClientOriginalName();
            Request::file('hotspot')->move(
                base_path() . '/public/birdhotspot/',$hotspotpic
            );
        }
        else{
            $hotspotpic = "";
        }
        if($can_save==1)
        {
            Bird::create($input);
            Bird::where('commonName', $cName)->update(['picture' => $imageName,'hotspot' => $hotspotpic, 'images' => $image_count]);
            
            return redirect('/birds/show');
        }
    }
    public function display(){
    	$birds = Bird::all();
    	return view('birds/display',compact('birds'));
    }
    public function popup($name){
        $bird = Bird::where('commonName', $name)->get()[0];
        return view('birds/quickview',compact('bird'));
    }
}
