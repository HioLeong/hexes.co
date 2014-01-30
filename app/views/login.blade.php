@extends('layout')
@section('content')
    <form action="/login" method="post">
        Email: <input type="text" name="email"><br>
        Password: <input type="text" name="password">
        <input type="submit" value="Submit"/>
    </form>
@stop
