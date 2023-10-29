@extends('welcome')

@section('content')

<a href="{{ route('users.create') }}">Create New User</a>

<hr>

<h2>User - {{ $user->firstName }}</h2>

<form action="{{ route('users.destroy',['user'=>$user->id]) }}" method="POST">
    @csrf
    <input type="hidden" name="_method" action="DELETE">
    <button type="submit">Delete</button>
</form>
@endsection