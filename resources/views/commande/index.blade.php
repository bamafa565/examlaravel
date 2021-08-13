@extends('menu.menu')
@section('con')
    <div class="clear"></div>
    <div class="row col-md-10 col-md-offset-1">

      <form id="formID" action="{{route('commande.store')}}" method="post">
        @csrf
              <label class="">Libellé Cmd : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input name="libelle" type="text" placeholder="" class="form-control validate[required]" />
              </div><br>
              <label class="">Quantite Cmd : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
               <input name="quant" type="text" placeholder="" class="form-control validate[required]" />
               </div><br>
               <label class="">Adr Fournisseur: <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input name="adress" type="text" placeholder="" class="form-control validate[required]" />
              </div><br>
               <label class="">Num Fournisseur : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input name="number" type="number" placeholder="" class="form-control validate[required]" />
              </div><br>
              <label class="">Date Commande : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input name="datecom" type="date" placeholder="" class="form-control validate[required]" />
              </div><br>
              <label class="">Date Livraison : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input name="dateLiv" type="date" placeholder="" class="form-control validate[required]" />
              </div>

            <br>

          <button type="submit" name="submit" class="mybtn mybtn-success">Ajouter Commande</button>

          <hr id='success'>

      </form>

  </div>
@endsection
