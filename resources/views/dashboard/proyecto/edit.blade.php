@extends('layouts.master')

@section('content')

@include('fragments.validation-errors')
@include('fragments.sesion')

<form method="proyecto" action="{{route("proyecto.update", $proyecto->id)}}">
    @csrf 
    @method("PUT")
    @include('dashboard.proyecto._form')

</form>

@endsection