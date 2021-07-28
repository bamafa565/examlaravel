@extends('menu.menu')
 @section('con')

<div class="container">

<center>
<h1>NOUVEAU Medicament</h1>
 <form id="formID" action="{{route('Medicament.store')}}" method="post">
 @csrf

              <label class="">Libelle : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input name="libelle" type="text" placeholder="" class="form-control validate[required]" />
              </div><br>
               <label class="">description : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input name="description" type="text" placeholder="" class="form-control validate[required]" />
              </div><br>
            <label class="input-group">PRIX : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                                <input name="prix" type="text" placeholder="" class="form-control validate[required]" />
                            </div><br>
                            <label class="input-group">Categorie : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                                                            <select name="cat" class="form-control">
                                                            <option >Seclectionner</option>
                                                            @foreach($Categorie as $cat)
                                                                 <option >{{$cat->libelle}}</option>
                                                                @endforeach
                                                                              </select>
                                                                              </div><br>

                            <label class="input-group">DATE PERAMPTION : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                                                            <input name="peram" type="date" placeholder="" class="form-control validate[required]" />
                                                        </div><br><label class="input-group">DATE CREATION : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
                                                                                              <div class="input-group">
                                                                                                  <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                                                                                                  <input name="create" type="date" placeholder="" class="form-control validate[required]" />
                                                                                              </div><br>
               <label class="">DOSAGE : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                  <input name="dosage" type="text" placeholder="" class="form-control validate[required]" />
              </div>

  <br>

          <button type="submit" name="submit" class="btn btn-success">Ajouter</button>

          <hr id='success'>

      </form>
      </center>
@endsection


