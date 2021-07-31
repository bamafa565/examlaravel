@extends('menu.menu')
 @section('con')

<div class="container">

<center>

<h1>MODIFIER PATIENTS</h1>
 <form id="formID" action="{{route('patients.store','$id')}}" method="post">
      @csrf

              <label class="">Nom : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input name="nom" value="{{$fam->nom}}"type="text" placeholder="" class="form-control validate[required]" />
              </div><br>
               <label class="">Prenom : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input name="prenom" value="{{$fam->prenom}}" type="text" placeholder="" class="form-control validate[required]" />
              </div><br>
               <label class="">Sexe : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                  <select name="sexe" class="form-control" >
                  <option>Seclectionner</option>
                  <option value="{{$fam->sexe}}">M</option>
                  <option value="{{$fam->sexe}}">F</option>
                  </select>
              </div><br>
              <label class="input-group">age : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                                <input name="age" value="{{$fam->age}}" type="text" placeholder="" class="form-control validate[required]" />
                            </div><br>
                            <br>
                                           <label class="input-group">adresse : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
                                          <div class="input-group">
                                              <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                                    <input name="adress" type="text" placeholder="" class="form-control validate[required]" /></div><br>
               <label class="">TEMPERATURE : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                  <input name="temperature" value="{{$fam->temperature}}"type="number" placeholder="" class="form-control validate[required]" />
              </div>
              <br>

              <label class="">poids : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                  <input name="poids" type="number" valeur="{{$fam->poids}}"placeholder="" class="form-control validate[required]" />
              </div><br>
  <br>

          <button type="submit" name="submit" class="btn btn-success">Ajouter</button>

          <hr id='success'>

      </form>

      </center>

@endsection


