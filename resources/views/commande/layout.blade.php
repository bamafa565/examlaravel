@extends('menu.menu')
@section('con')

<div class="container-fluid">


<a class="return" href="#"><i class="glyphicon glyphicon-arrow-left"></i> Retour</a>
<div class="col-md-12" id="status">


    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <center>
          <div class="info-box yellow-bg" style="background-color:rgb(125,192,63);">
            <i class="fa fa-ambulance">Commandes</i>
          </div><!--/.info-box-->
            </center>
        </div><!--/.col-->

  </div>

 <div class="clear">

 </div><br>

    <div class="col-md-4">
      <a href="{{route('commande.create')}}">
          <div class="link">
            <i class="fa fa-plus"></i>
            <div class="clear"></div><span>nouvelle commande</span>
         </div>
      </a>
    </div>

    <div class="col-md-4">
      <a href="{{ route('commandes.index') }}">
          <div class="link">
            <i class="fa fa-ambulance"></i>
            <div class="clear"></div><span>commande en cours </span>
         </div>
      </a>
    </div>
    </div>
@endsection
