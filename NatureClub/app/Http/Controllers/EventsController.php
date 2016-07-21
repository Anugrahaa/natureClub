<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use Request;

use App\Event;

class EventsController extends Controller
{
	public function storeEvent(Request $request){
    	$input = Request::except(['photo']);
    	if(Request::hasFile('photo'))
        {
            $photoname = Request::file('photo')->getClientOriginalName();
            Request::file('photo')->move(
                base_path().'/public/Events/',$photoname
            );
        }
        Event::create($input);
        Event::where('eventName',$input['eventName'])->update(['photo' => $photoname]);
        return redirect('/events');
    }

    public function display(){
    	$events = Event::all();
    	return view('events',compact('events'));
    }
    public function quickview($name){
        $event = Event::where('eventName', $name)->get()[0];
        return view('viewEvents',compact('event'));
    }
}
