<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blog = Article::all();
        return view('backOffice.blog.articles', compact('blog'));
    }
    public function create(){
        return view('backOffice.blog.formBlog');
    }
    public function store(Request $request){
        $article = new Article();
        $article->titre = $request->titre;
        $article->image = $request->image;
        $article->description = $request->description;
        $article->save();

        return redirect()->route('articles.index');
    }
    public function destroy(Article $id){
        // dd($id);
        $id->delete();
        return redirect()->back();
    }
}
