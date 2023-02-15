<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('welcome',compact('events'));
    }
    public function create()
    {
        return view('events.create');
    }
    public function store(Request $request){
        $data = $request->all();

        Event::create($data);

        return redirect('welcome');
    }
    public function contact()
    {
        return view('contact');
    }
    public function products()
    {
        return view('products');
    }
}
