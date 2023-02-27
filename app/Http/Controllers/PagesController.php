<?php

namespace App\Http\Controllers;
use App\Models\Movie;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('home');
    }
}
