<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livre;
use App\Models\User;
use Auth;

class LivresController extends Controller
{
   
    public function viewForm()
    {
      
        return view ('livres.livresregister');
    }

    public function registerLibres(Request $request)
    {
        //il se chargera de lenvoie et de la recuperation dans la base de donnée
        // la variable $verification verifier si toutes les conditions sont remplies
        $verification = $request->validate(
            [
                'nom' => ['required', 'string', 'max:100'],
                'categorie' => ['required', 'string', 'max:150'],
                
            ]
        );
        if($verification)
        {
            $user=Auth::user();
    
            $livre = Livre::create(
                [
                    'nom' => $request['nom'],
                    'categorie' => $request['categorie'],
                    
                    'userId' => $user->id,
                ]
                );
        };
        
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
