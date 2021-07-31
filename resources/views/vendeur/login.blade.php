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
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email"id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">Well never share your email with anyone else.</small>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input"  name="password" id="exampleCheck1">
    <label class= "form-check-label" for="exampleCheck1" >Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
</center>

@endsection
