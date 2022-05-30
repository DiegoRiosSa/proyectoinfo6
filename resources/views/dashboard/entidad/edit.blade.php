@extends('layouts.master')

@section('content')

@include('fragments.validation-errors')
@include('fragments.sesion')

<form method="POST" action="{{route("entidad.update", $entidad->id)}}">
    @csrf 
    @method("PUT")
    @include('dashboard.entidad._form')

</form>

@endsection