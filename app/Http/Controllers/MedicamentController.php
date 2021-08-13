<?php

    namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Medicament;
use App\Http\Controllers\CategorieController;

class MedicamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $medicament=Medicament::all();
                return view('Medicament.layout',[
                'Medicament'=>$medicament

                ]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    $Categorie=Categorie::all();
    return view('Medicament.index',[
    'Categorie' =>$Categorie
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

         Medicament::create([
                    'libelle'=>$request->libelle,
                    'description'=>$request->description,
                    'prix'=>$request->prix,
                    'id_cat'=>$request->cat,
                    'datefabri'=>$request->peram,
                    'dateperem'=>$request->create,
                    'dosage'=>$request->dosage,

                  ]);
                  $medicament=Medicament::all();
                  return view('Medicament.layout',[
                   'Medicament'=>$medicament
                  ]);
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
       $Categorie=Categorie::all();
       $Medicament=Medicament::find($id);

       return view('Medicament.edit',
               ['Medicament'=>$Medicament,
                'Categorie' =>$Categorie
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
       $Categorie=Categorie::all();
       $update=Medicament::find($id);
       $update->update (['libelle'=>$request->libelle,
                        'description'=>$request->description,
                        'prix'=>$request->prix,
                        'id_cat'=>$request->cat,
                        'datefabri'=>$request->peram,
                         'dateperem'=>$request->create,
                         'dosage'=>$request->dosage,
                     ]);
                                   $medicament=Medicament::all();
                                      return view('Medicament.layout',[
                                       'Medicament'=>$medicament
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

          $post=Medicament::find($id);
          dd($post);
          $post->delete();
           $medicament=Medicament::all();
          return view('Medicament.layout',[
          'Medicament'=>$medicament
        ]);
       }
}
