<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use Carbon\Carbon;

use App\Http\Requests;

use Request;

use App\PhotoOfTheMonth;

class GenController extends Controller
{
    public function submitPhoto(Request $request){
    	$input = Request::except(['photo']);
    	if(Request::hasFile('photo'))
        {
            $photoname = Request::file('photo')->getClientOriginalName();
            Request::file('photo')->move(
                base_path().'/public/PhotoOfTheMonth/',$photoname
            );
        }
        PhotoOfTheMonth::create($input);
        PhotoOfTheMonth::where(['month'=>$input['month'],'year'=>$input['year']])->update(['photo' => $photoname]);
        return redirect('/photo-of-the-month/'.$input['year'].'/'.$input['month']);
    }

    public function showPhoto($year,$month){
        while(true)
        {
            $photo = PhotoOfTheMonth::where(['month'=>$month, 'year'=>$year])->first();
            if(is_null($photo)) 
            {
                if($month!=1) $month-=1;
                else
                { 
                    $month=12;
                    $year-=1;
                }
                if($year<2016) 
                {
                    $errormsg = "please enter a year greater than 2015";
                    return view('/error',['errormsg'=>$errormsg]);
                }
            }

            else break;

        }

        return view('photoOfTheMonth',compact('photo'));
    }

    public function photoOfTheMonth()
    {
        $date = Carbon::now();
        return redirect('/photo-of-the-month/'.$date->year.'/'.$date->month);
    }
}
