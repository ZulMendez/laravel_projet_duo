<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Projet;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function home(){
        return view('home');
    }
    public function blog(){
        $blog = Article::all();
        return view('pages.blog', compact('blog'));
    }
    public function portfolio(){
        $portfolio = Projet::all();
        return view('pages.portfolio', compact('portfolio'));
    }
    public function contact(){
        return view('pages.contact');
    }
}
