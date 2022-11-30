@extends('master')
@section('dynamic')
<h1>Dashboard</h1>
<table>
    <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Gender</th>
    <th>Photo</th>
    </td>
    <tr>
        {{-- @foreach ($data as $data) --}}
        <tr>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->mobile}}</td>
            <td>{{$data->gender}}</td>
            <td>
                <img src="{{ asset('uploads/'.$data->photo) }}" width="80px" height="80px" alt="">
            </td>
            <td><a href="delete/{{$data->id}}">Delete</a></td>
            <td><a href="edit/{{$data->id}}">Edit</a></td>
        </tr>
        {{-- @endforeach --}}
    </td>
    </table>
    <a href="logout">Logout</a>
@endsection

