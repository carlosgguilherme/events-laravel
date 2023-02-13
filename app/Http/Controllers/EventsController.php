<?php

namespace App\Http\Controllers;

use App\Models\Event;
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
        return view('create');
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
