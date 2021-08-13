@extends('menu.menu')
@section('con')
<div class="container">
@include('menu.nav')
<table class='table table-hover'>
<center>
<h1>LISTE DES MEDICAMENTS</h1>
</center>
<div style="float:right">
 <a  href="{{route('Medicament.create')}}" class="btn btn-primary right">ADD</a>
</div>
        <thead>

       <th>MATRICULE</th>
        <th>Libelle</th>
        <th>Description</th>
        <th>Prix</th>
        <th>Dosage</th>

        <th>ACTION</th>

        </thead>

        <tbody>
        @foreach($Medicament as $med)
        <tr><td> {{$med->id}}</td>
        <td> {{$med->libelle}}</td>
        <td> {{$med->description}}</td>
        <td> {{$med->prix}}</td>
        <td> {{$med->dosage}}</td>
        <td> <a href="{{route('Medicament.edit',$med->id)}}" class="btn btn-warning">EDIT</a></td>
         <td> <a href="{{route('Medicament.destroy',$med->id)}}"class="btn btn-danger">DELETE</a></td>
</tr>

        @endforeach


        </tbody>
    </table>
    </div>
       @include('footer.footer')
@endsection


</html>
