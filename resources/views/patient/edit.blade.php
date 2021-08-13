@extends('menu.menu')
 @section('con')

<div class="container">

<center>

<h1>MODIFIER PATIENTS</h1>
 <form id="formID" action="{{route('patients.update',$patients->id)}}" method="post">
    @csrf
    @method('PUT')

              <label class="">Nom : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input name="nom" value=""type="text" placeholder="" class="form-control validate[required]" />
              </div><br>
               <label class="">Prenom : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input name="prenom" value="" type="text" placeholder="" class="form-control validate[required]" />
              </div><br>
               <label class="">Sexe : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                  <select name="sexe" class="form-control" >
                  <option>Seclectionner</option>
                  <option >M</option>
                  <option >F</option>
                  </select>
              </div><br>
              <label class="input-group">age : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                                <input name="age" value="" type="text" placeholder="" class="form-control validate[required]" />
                            </div><br>
                            <br>
                                           <label class="input-group">adresse : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
                                          <div class="input-group">
                                              <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                                    <input name="adress" type="text" placeholder="" class="form-control validate[required]" /></div><br>
               <label class="">TEMPERATURE : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                  <input name="temperature" value=""type="number" placeholder="" class="form-control validate[required]" />
              </div>
              <br>

              <label class="">poids : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                  <input name="poids" type="number" valeur=""placeholder="" class="form-control validate[required]" />
              </div><br>
  <br>

          <button type="submit" name="submit" class="btn btn-success">Ajouter</button>

          <hr id='success'>

      </form>

      </center>

@endsection


