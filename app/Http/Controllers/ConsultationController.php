<?php

namespace App\Http\Controllers;
use App\Http\Controllers\PersonnelController;

use Illuminate\Http\Request;
use App\Models\consultation;
use App\Models\Personnel;
class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { $personnel=Personnel::all();
        return view('consultation.layout',[
//          'consultation'=>$consultation,
          'personnel'=>$personnel]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  $personnel=Personnel::all();
       $consultation=consultation::all();
          return view('commande.show',[
               'consultation'=>$consultation,
              'personnel'=>$personnel

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
            consultation::create([
            'nom'=>$request->nom,
            'Prenom'=>$request->prenom,
            'medecin'=>$request->medecin,
             'observation'=>$request->observation,
             'date'=>$request->date,


                ]);
               $personnel=Personnel::all();
                        return view('consultation.layout',[
                //          'consultation'=>$consultation,
                          'personnel'=>$personnel]);

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
