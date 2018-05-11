<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Article;
use Validator;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('home');
         $articles = Article::latest()->paginate(5);
        return view('articles.index',compact('articles'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        ##return view('articles.show');
    }
}
