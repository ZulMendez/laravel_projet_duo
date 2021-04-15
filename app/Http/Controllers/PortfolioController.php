<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        $portfolio = Projet::all();
        return view('pages/portfolio', compact('portfolio'));
    }
    public function create(){
        return view('backOffice/Portfolio/formPort');
    }
    public function store(Request $request){
        $card = new Projet();
        $card->titre = $request->titre;
        $card->image = $request->image;
        $card->description = $request->description;
        $card->save();

        return redirect()->route('home');
    }
}