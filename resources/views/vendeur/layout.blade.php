@extends('menu.menu')
 @section('con')

<div class="container">

<center>
<h1>NOUVEAU VENDEUR</h1>
 <form id="formID" action="{{route('vendeur.store')}}" method="post">
 @csrf

              <label class="">Nom : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
         <select class="form-control validate[required]" name="nom">
         <option>Selectionner</option>
          @foreach($personnel as $per)
           <option >{{$per->nomperso}}</option>
            @endforeach
         </select>
              </div><br>
               <label class="">Prenom : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <select class="form-control validate[required]"name="prenom">
                   <option>Selectionner</option>
                            @foreach($personnel as $per)
                    <option >{{$per->prenomperso}}</option>
                                                @endforeach
                           </select>
              </div><br>

              <label class="input-group">NUMERO : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                              <select class="form-control validate[required]"name="numero">
                                <option>Selectionner</option>
                                @foreach($personnel as $per)
                                 <option >{{$per->numTelperso}}</option>
                                   @endforeach
                                   </select>
                            </div><br>
                              <label class="input-group">adresse : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
                                          <div class="input-group">
                                              <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                                    <select class="form-control validate[required]" name="adress">
                                      <option>Selectionner</option>
                                     @foreach($personnel as $per)
                                     <option >{{$per->adressPerso}}</option>
                                     @endforeach
                                     </select>
                                    </div><br>
               <label class="">Email : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>

                 <select class="form-control validate[required]" name="mail">
                   <option>Selectionner</option>
                   @foreach($personnel as $per)
                   <option >{{$per->emailperso}}</option>
                    @endforeach
                    </select>
              </div>
               <label class="">PASSWORD : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                                <input name="password" type="password" placeholder="" class="form-control validate[required]" />
                            </div>
              <br>

              <label class="">Fonction : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                     <select class="form-control validate[required]" name="fonction">
                       <option>Selectionner</option>
                              @foreach($personnel as $per)
                              <option >{{$per->fonctionperso}}</option>
                               @endforeach
                               </select>
                    </div><br>
  <br>

          <button type="submit" name="submit" class="btn btn-success">Ajouter</button>

          <hr id='success'>

      </form>
      </center>
         @include('footer.footer')
@endsection


