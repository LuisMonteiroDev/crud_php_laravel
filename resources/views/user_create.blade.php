@extends('welcome')

@section('content')

@if (session()->has('message')){
    session()->.get('message');
}
@endif

<h2>Create</h2>
<form action="{{ route('users.store') }}" method='POST'>
    @csrf
    <input type="text" name="firstName" placeholder="Your firstName">
    <input type="text" name="lastName" placeholder="Your lastName">>
    <input type="email" name="email" placeholder="Your email">>
    <input type="password" name="password" placeholder="Your password">>
    <button type="submit">Create</button>
</form>
@endsection