@extends('menu.menu')
@section('con')
<div class="container mainbg">
<br><a class="return" href="accueil.php"><i class="glyphicon glyphicon-arrow-left"></i>retour</a>

    <h1 class="h1_title">Nouvelle vente</h1>
    <hr> <br>

    <div class="clear"></div>
    <div class="row col-md-10 col-md-offset-1">

      <form id="formID" action="{{route('vente.store')}}" method="post">
 @csrf
                 <label class="">date : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
               <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input name="date" type="datetime-local" placeholder="" class="form-control validate[required]" />
              </div>
            <br>
              <label class="">medicament : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                 <select name="libelle" class="form-control">
                    <option >Seclectionner</option>
                     @foreach($Medicament as $med)
                     <option >{{$med->libelle}}</option>
                     @endforeach
                     </select>

                </div><br>
               <label class="">Prix : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input name="prix" type="text" placeholder="" class="form-control validate[required]" />
              </div><br>


          <button type="submit" name="submit" class="mybtn mybtn-success">Ajouter</button>

          <hr id='success'>

      </form>

  </div>
  </div>
  @endsection
