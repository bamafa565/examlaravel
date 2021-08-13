@extends('menu.menu')
@section('con')
@include('menu.stock')
<div class="container">
<table class='table table-hover'>
<center>
<h1>LISTE DES COMMANDE EN COURS</h1>
</center>
<div style="float:right">
 <a class="btn btn-primary right" href="{{ route('commande.index') }}">ADD</a>
</div>
        <thead>
       <th>MATRICULE</th>
        <th>Libelle</th>
        <th>QUANTITE</th>
        <th>Adresse Fournisseur</th>
        <th>Numero Telephone Fournisseur</th>
        <th>Date commande</th>
        <th>Date Livraison</th>



        </thead>
        <tbody>
        @foreach($commande as $com)
        <tr><td> {{$com->id}}</td>
        <td> {{$com->libelle}}</td>
        <td> {{$com->quantite}}</td>
        <td> {{$com->adressfourni}}</td>
        <td> {{$com->Numfourni}}</td>
        <td> {{$com->dateCom}}</td>
        <td> {{$com->dateLivraison}}</td>

</tr>

        @endforeach


        </tbody>
    </table>
    </div>

      @include('footer.footer')
@endsection



</html>

