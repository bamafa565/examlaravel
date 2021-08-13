@extends('menu.menu')
@section('con')
@include('menu.stock')
<div class="container">
<table class='table table-hover'>
<center>
<h1>LISTE DES MEDICAMENTS VENDU</h1>
</center>
<div style="float:right">
 <a class="btn btn-primary right" href="{{ route('vente.index') }}">ADD</a>
</div>
        <thead>
       <th>MATRICULE</th>
        <th>DATE</th>
        <th>LIBELLE</th>
        <th>PRIX</th>
        </thead>
        <tbody>
        @foreach($vente as $vent)
        <tr><td> {{$vent->id}}</td>
        <td> {{$vent->date}}</td>
        <td> {{$vent->libelle}}</td>
        <td> {{$vent->prix}}</td>


</tr>

        @endforeach


        </tbody>
    </table>
    </div>

      @include('footer.footer')
@endsection



</html>

