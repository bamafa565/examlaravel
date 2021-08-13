<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patients;
class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patient=patients::all();
                return view('patient.patient',[
                'patient'=>$patient
                ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('patient.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        patients::create([
           'nom'=>$request->nom,
           'prenom'=>$request->prenom,
           'sexe'=>$request->sexe,
           'age'=>$request->age,
           'adress'=>$request->adress,
           'temperature'=>$request->temperature,
            'poids'=>$request->poids,

       ]);
         $patient=patients::all();
       return view('patient.patient',[
          'patient'=>$patient]
       );


    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $patients= patients::find($id);
       return view('patient.edit',[
      'patients'=>$patients
       ]);
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
        $update=patients::find($id);
         $update->update([
            'nom'=>$request->nom,
                    'prenom'=>$request->prenom,
                    'sexe'=>$request->sexe,
                    'age'=>$request->age,
                    'adress'=>$request->adress,
                    'temperature'=>$request->temperature,
                     'poids'=>$request->poids,

                ]);
         $patient=patients::all();
         return view('patient.patient',[
          'patient'=>$patient]
           );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      $post=patients::find($id);
       $post->delete();
      $patient=patients::all();
      return view('patient.patient',[
      'patient'=>$patient
       ]);

    }
}
