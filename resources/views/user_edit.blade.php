@extends('welcome')

@section('content')

@if (session()->has('message')){
    session()->.get('message');
}
@endif

<h2>Edit</h2>
<form action="{{ route('users.update', ['users' => $user->id] }}" method='POST'>
    @csrf
    <input type="hidden" name="_method" value="PUT"> 
    <input type="text" name="firstName" value="{{ $user->firstName }}">
    <input type="text" name="lastName" value="{{ $user->lastName }}">
    <input type="email" name="email" value="{{ $user->email }}">
    <button type="submit">Update</button>
</form>
@endsection