@extends('menu.menu')
@section('con')

<div class="container mainbg">
<br><a class="return" href="index.php"><i class="glyphicon glyphicon-arrow-left"></i> Retour</a>

    <h1 class="h1_title">Consultation</h1>
    <hr>
     <form method="post" action="{{route('consultation.store')}}">

     @csrf
     <br>
    <label class="">Nom : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input name="nom" type="text" placeholder="" class="form-control validate[required]" />
              </div><br>
               <label class="">PRENOM : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input name="prenom" type="text" placeholder="" class="form-control validate[required]" />
              </div><br>
               <label class="">medecin : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
               <select name="medecin" class="form-control">
                <option>ki la Setal</option>
                @foreach($personnel as $personne)
                 <option >{{$personne->fonctionperso}}</option>
                 @endforeach</select>


                 </div><br>
               <label class="input-group">observation : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
        <input name="observation" type="text" placeholder="" class="form-control validate[required]" /></div><br>
                  <label class="input-group">date : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                  <input name="date" type="date" placeholder="" class="form-control validate[required]" />
              </div><br>
               <br>

          <button type="submit" name="submit" class="mybtn mybtn-success">Ajouter</button>
@endsection
