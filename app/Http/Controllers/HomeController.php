<?php

namespace App\Http\Controllers;

use App\Poeme;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(["welcomePage"]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $poemes = auth()->user()->poemes;
        return view('home', ["poemes" => $poemes]);
    }

    public function welcomePage(){
        $poemes = Poeme::orderBy("id","desc")->get();
        return view("welcome", ["poemes" => $poemes]);
    }
}
