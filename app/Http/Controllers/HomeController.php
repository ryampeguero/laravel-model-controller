<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
class HomeController extends Controller
{
    public function index(){
        $movieList = Movie::All();
        // dd($movieList);
        return view('home', compact("movieList"));
    }
}
