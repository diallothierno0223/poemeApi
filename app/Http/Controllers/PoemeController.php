<?php

namespace App\Http\Controllers;

use App\User;
use App\Poeme;
use Illuminate\Http\Request;

class PoemeController extends Controller
{
    public function __construct(){
        $this->middleware("auth")->except(["show"]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("poeme.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "title" => "required|min:10",
            "content" => "required|min:30"
        ]);
        $user = User::find(auth()->user()->id);
        $poeme = new Poeme();
        $poeme->title = $data["title"];
        $poeme->content = $data["content"];
        $user = $user->poemes()->save($poeme);
        
        return redirect('home')->with("success", "le poeme a ete creer avec succes");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Poeme  $poeme
     * @return \Illuminate\Http\Response
     */
    public function show(Poeme $poeme)
    {
        return view("poeme.show", ["poeme" => $poeme]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Poeme  $poeme
     * @return \Illuminate\Http\Response
     */
    public function edit(Poeme $poeme)
    {
        return view('poeme.update', ["poeme" => $poeme]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Poeme  $poeme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Poeme $poeme)
    {
        $data = $request->validate([
            "title" => "required|min:5",
            "content" => "required"
        ]);

        $poeme->update($data);
        return redirect("home")->with("success", "poeme modifier avec succes");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Poeme  $poeme
     * @return \Illuminate\Http\Response
     */
    public function destroy(Poeme $poeme)
    {
        $poeme->delete();
        return redirect("home")->with('success', "poeme supprimer avec succes");
    }
}
