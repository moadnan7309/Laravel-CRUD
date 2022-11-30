@extends('master')
@section('dynamic')
<form action="" method="post" enctype="multipart/form-data">
    <h1>Register</h1>
    @csrf
<label>Name : </label>
<input type="text" name="name"><br><br>
<label>Email : </label>
<input type="email" name="email"><br><br>
<label>Password : </label>
<input type="password" name="password"><br><br>
<label>Mobile : </label>
<input type="text" name="mobile"><br><br>
<label>Gender : </label>
<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<br><br>
<label>Photo : </label>
<input type="file" name="photo"><br><br>
<input type="submit" value="Register" name="submit">
<br><br>
</form>
@endsection
