<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class LoanController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('loanpage', compact('articles'));
    }
}
