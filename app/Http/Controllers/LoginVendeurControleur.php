<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Personnel,Vendeur,Medicament};
use App\Http\Controllers\VendeurController;

class LoginVendeurControleur extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function authenticate(Request $request){
             // Retrive Input
             $email = $request->email;
              $pass= $request->password;


             if (Vendeur::where('emailperso'==$email ,'password'==$pass)) {
                 // if success login
                   $medicament=Medicament::all();
                             return view('vente.layout',[

                              'Medicament'=>$medicament]);

                 //return redirect()->intended('/details');
             }
             // if failed login
             return redirect('login');
         }

    public function index()
    {

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
