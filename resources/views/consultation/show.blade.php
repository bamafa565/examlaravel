@extends('menu.menu')
@section('con')
@include('menu.stock')
<div class="container">
<table class='table table-hover'>
<center>
<h1>LISTE DES PATIENTS</h1>
</center>
<div style="float:right">
 <a class="btn btn-primary right" href="{{ route('consultation.index') }}">ADD</a>
</div>
        <thead>
       <th>MATRICULE</th>
        <th>NOM</th>
        <th>PRENOM</th>
        <th>MEDECIN</th>
        <th>OBSERVATION</th>
        <th>Date</th>



        </thead>
        <tbody>
        @foreach($consultation as $cons)
        <tr><td> {{$cons->id}}</td>
        <td> {{$cons->nom}}</td>
        <td> {{$cons->Prenom}}</td>
        <td> {{$cons->medecin}}</td>
        <td> {{$cons->observation}}</td>
        <td> {{$cons->date}}</td>


</tr>

        @endforeach


        </tbody>
    </table>
    </div>

      @include('footer.footer')
@endsection



</html>

