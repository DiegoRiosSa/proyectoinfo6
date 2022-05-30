@extends('layouts.master')

@section('content')

@include('fragments.validation-errors')
@include('fragments.sesion')

<form method="POST" action="{{route("proyecto.store")}}">
    @csrf
    @include('dashboard.proyecto._form')

</form>

@endsection