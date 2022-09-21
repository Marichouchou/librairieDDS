<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Abonnes;
use Auth;

class AbonnesController extends Controller
{

    public function viewForm()
    {
       
        return view ('abonnees.abonneregister');
    }

    public function registerAbonne(Request $request)
    {
        //il se chargera de lenvoie et de la recuperation dans la base de donnée
        // la variable $verification verifier si toutes les conditions sont remplies
        $verification = $request->validate(
            [

                'nom' => ['required', 'string', 'max:100'],
                'prenom' => ['required', 'string', 'max:150'],
                'telephone' => ['required', 'string', 'max:150'],
                'adresse' => ['required', 'string', 'max:150'],
                'profession' => ['required', 'string', 'max:150'],
                
                'email' => ['required', 'string', 'max:100'],
                'password' => ['required', 'string', 'min:8', 'max:15', 'confirmed'],
                
            ]
        );
        

        
        //definir les actions a faire si la verification est bonne 
        if($verification)
        {
            $user = User::create(
                [
                    'name' => $request['nom'],
                    'email' => $request['email'],
                    'password' => bcrypt($request['password']),
                    'statut' => 'abonnee'
                ]
            );
            if($user)
            {
                $users=Auth::user();
                
                
                $abonnee = Abonnes::create(
                    [
                       
                        'userId' =>$user->id, 
                        'nom' => $request['nom'], 
                        'prenom' => $request['prenom'], 
                        'telephone' => $request['telephone'], 
                        'adresse' => $request['adresse'], 
                        'profession' => $request['profession'], 
                       
                        'email' => $request['email'],  
                        'password' => bcrypt($request['password']),
                        
                        
                    ]
                    );

                    dd($abonnee);
                    return redirect('/login');
            }
        }
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
