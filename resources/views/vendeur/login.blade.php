@extends('menu.menu')
@section('con')


<style>
form{
margin-left:900px;
margin-right:900px;
width:700px;
padding:30px;
border-raduis:15px 15px 15px 15px;

}
</style>
<center>

<form class="container-fluid p-4" method="post" action="{{Route('loginvendeur')}}" >
@csrf

<h1> connexion</h1>

  <div class="form-group">
    <label for="exampleInputEmail1">Adresse Email</label>
    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter
    email">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
  </div>

  <div class="form-check">
    <input type="checkbox" class="form-check-input"  name="password" id="exampleCheck1">
    <label class= "form-check-label" for="exampleCheck1" >Se souvenir </label>
  </div>
  <button type="submit" class="btn btn-primary">Soumettre</button>

</form>
</center>

@endsection
