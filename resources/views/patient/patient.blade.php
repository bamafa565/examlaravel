@extends('menu.menu')
@section('con')
@include('menu.nav')

<div class="container">
<table class='table table-hover'>
<center>
<h1>LISTE DES PATIENTS</h1>
</center>
<div style="float:right">
 <a class="btn btn-primary right" href="{{ route('patients.create') }}">ADD</a>
</div>
        <thead>
       <th>MATRICULE</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Sexe</th>
        <th>Age</th>
        <th>Adress</th>
        <th>Temperature</th>
        <th>Poids</th>
        <th>ACTION</th>


        </thead>
        <tbody>
        @foreach($patient as $pat)
        <tr><td> {{$pat->id}}</td>
        <td> {{$pat->nom}}</td>
        <td> {{$pat->prenom}}</td>
        <td> {{$pat->sexe}}</td>
        <td> {{$pat->age}} ans</td>
        <td> {{$pat->adress}}</td>
        <td> {{$pat->temperature}} degres</td>
        <td> {{$pat->poids}} kg</td>
         <td> <a href="{{route('patients.edit',$pat->id)}}" class="btn btn-warning">EDIT</a></td>
         <td> <a href="{{route('patients.destroy',$pat->id)}}"class="btn btn-danger">DELETE</a></td>
</tr>

        @endforeach


        </tbody>

    </table>
    </div>

      @include('footer.footer')

@endsection



</html>

