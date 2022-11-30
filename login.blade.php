@extends('master')
@section('dynamic')
<form action="" method="post" enctype="multipart/form-data">
    <h1>LOgin</h1>
    @csrf
<label>Email : </label>
<input type="email" name="email"><br><br>
<label>Password : </label>
<input type="password" name="password"><br><br>
<input type="submit" value="Login" name="submit">
<br><br>
</form>
@endsection
