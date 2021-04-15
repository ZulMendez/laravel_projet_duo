<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blog = Article::all();
        return view('pages/blog', compact('blog'));
    }
}
