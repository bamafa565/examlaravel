<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnel;


class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personnel=Personnel::all();
        return view('personnel.layout',[
        'personnel'=>$personnel
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('personnel.index');
       $personnel=Personnel::all();
              return view('personnel.layout',[
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
      Personnel::create([
          'nomperso'=>$request->nom,
          'prenomperso'=>$request->prenom,
          'numTelperso'=>$request->numero,
          'adressPerso'=>$request->adress,
          'emailperso'=>$request->mail,
          'fonctionperso'=>$request->fonction
          ]);
      $personnel=Personnel::all();
             return view('personnel.layout',[
             'personnel'=>$personnel
             ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
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

            $personnel=Personnel::find($id);


            return view('personnel.edit',[
           'personnel'=>$personnel,
//            'personnel'=>$personnel,

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
    $update=Personnel::find($id);
                $update->update (['nomperso'=>$request->nom,
                  'prenomperso'=>$request->prenom,
                  'numTelperso'=>$request->numero,
                  'adressPerso'=>$request->adress,
                  'emailperso'=>$request->mail,
                  'fonctionperso'=>$request->fonction
                  ]);
               $personnel=Personnel::all();
                      return view('personnel.layout',[
                      'personnel'=>$personnel
                      ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $post=Personnel::find($id);
     $post->delete();
     $personnel=Personnel::all();
     return view('personnel.layout',[
     'personnel'=>$personnel
      ]);
    // return view('personnel.index');
    }
}
