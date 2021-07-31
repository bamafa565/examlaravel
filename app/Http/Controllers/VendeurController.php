<?php

namespace App\Http\Controllers;
use App\Http\Controllers\PersonnelController;
use Illuminate\Http\Request;
use App\Models\{Personnel,Vendeur};
class VendeurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personnel=Personnel::all();

                return view('vendeur.layout',[
                 'personnel'=>$personnel,

                ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendeur.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Vendeur::create([
          'nomperso'=>$request->nom,
          'prenomperso'=>$request->prenom,
          'numTelperso'=>$request->numero,
          'adressPerso'=>$request->adress,
          'emailperso'=>$request->mail,
          'password'=>$request->password,
          'fonctionperso'=>$request->fonction
          ]);

      //$personnel=Personnel::all();
             return view('dashbord.layout');
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
