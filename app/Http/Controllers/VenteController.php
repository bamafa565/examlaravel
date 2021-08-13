<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{vente,Medicament};
use App\Http\Controllers\MedicamentController;
class VenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $medicament=Medicament::all();
       return view('vente.layout',[
       'Medicament'=>$medicament]
       );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $vente=Vente::all();
      //   dd($vente);
         return view('vente.show',[
         'vente'=>$vente
          ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     vente::create([
                'date'=>$request->date,
                'libelle'=>$request->libelle,
                'prix'=>$request->prix,

            ]);
             $medicament=Medicament::all();
            return view('vente.layout',[
             'Medicament'=>$medicament]);

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
