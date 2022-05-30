@extends('layouts.master')

@section('content')

@include('fragments.validation-errors')
@include('fragments.sesion')

<form method="POST" action="{{route("user.store")}}">
    @csrf
    @include('dashboard.user._form')

</form>

@endsection