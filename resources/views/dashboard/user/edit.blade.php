@extends('layouts.master')

@section('content')

@include('fragments.validation-errors')
@include('fragments.sesion')

<form method="POST" action="{{route("user.update", $user->id)}}">
    @csrf 
    @method("PUT")
    @include('dashboard.user._form')

</form>

@endsection