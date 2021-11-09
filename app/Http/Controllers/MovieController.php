<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use Symfony\Component\Console\Input\Input;

class MovieController extends Controller
{
    public function home(Request $request) {
        $title = $request->search;
        if($title != '') {
            $movies = Movie::where('title', 'LIKE', '%' . $title . '%' )->get();
        }else {
            $movies = Movie::all();
        }
        // $search = Input::get('search');
        
        return view('home',compact('movies','title'));
    }
}
