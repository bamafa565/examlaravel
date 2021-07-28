@extends('menu.menu')
 @section('con')

<div class="container">

<center>
<h1>NOUVEAU PERSONNE</h1>
 <form id="formID" action="#" method="post">
 @csrf

              <label class="">Nom : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input name="nom" type="text" placeholder="" class="form-control validate[required]" />
              </div><br>
               <label class="">Prenom : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input name="prenom" type="text" placeholder="" class="form-control validate[required]" />
              </div><br>

              <label class="input-group">NUMERO : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                                <input name="numero" type="text" placeholder="" class="form-control validate[required]" />
                            </div><br>
                              <label class="input-group">adresse : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
                                          <div class="input-group">
                                              <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                                    <input name="adress" type="text" placeholder="" class="form-control validate[required]" /></div><br>
               <label class="">Email : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                  <input name="mail" type="text" placeholder="" class="form-control validate[required]" />
              </div>
              <br>

              <label class="">Fonction : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                  <input name="fonction" type="text" placeholder="" class="form-control validate[required]" />
              </div><br>
  <br>

          <button type="submit" name="submit" class="btn btn-success">Ajouter</button>

          <hr id='success'>

      </form>
      </center>
         @include('footer.footer')
@endsection


