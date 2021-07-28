@extends('menu.menu')
@section('con')
@include('menu.nav')
<table class='table table-hover'>
<center>
<h1 >LISTE DES PERSONNELLES</h1>
</center>
<div style="float:right">
 <a class="btn btn-primary right" href="{{ route('personnel.create') }}">ADD</a>
</div>
        <thead>
       <th>MATRICULE</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>NUMERO TELEPHONE</th>
        <th>Adress</th>
        <th>Email</th>
        <th>Fonction</th>
         <th>ACTION</th>
        </thead>
        <tbody>
        @foreach($personnel as $person)
        <tr><td> {{$person->id}}</td>
        <td> {{$person->nomperso}}</td>
        <td> {{$person->prenomperso}}</td>
        <td> {{$person->numTelperso}}</td>
        <td> {{$person->adressPerso}}</td>
        <td> {{$person->emailperso}}</td>
         <td> {{$person->fonctionperso}}</td>
         <td> <a href="{{route('personnel.edit',['id'=>$person->id])}}" class="btn btn-warning">EDIT</a></td>
         <td> <a href="{{route('personnel.destroy',['id'=>$person->id])}}"class="btn btn-danger">DELETE</a></td>
        </tr>

        @endforeach


        </tbody>
    </table>
       @include('footer.footer')


@endsection
