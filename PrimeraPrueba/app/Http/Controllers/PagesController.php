<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class PagesController extends Controller
{
    public function home(){
        return view('home2');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('tickets.create');
    }


}
