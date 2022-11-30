@extends('master')
@section('dynamic')
<form action="/update" method="post" enctype="multipart/form-data">
    <h1>Edit</h1>
    @csrf
<label>Name : </label>
<input value="{{ $z->name }}" name="name"><br><br>
<label>Email : </label>
<input value="{{ $z->email }}" name="email"><br><br>
<label>Mobile : </label>
<input value="{{ $z->mobile }}" name="mobile"><br><br>
<label>Gender : </label>
<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<br><br>
<input type="hidden" name="id" value="{{$z->id}}">
<br>
<input type="submit" value="update" name="submit">
<br><br>
</form>
@endsection
