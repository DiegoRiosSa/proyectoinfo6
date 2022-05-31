@extends('layouts.master')

@section('content')

@include('fragments.validation-errors')
@include('fragments.sesion')

<form method="POST" action="{{route("transaccion.store")}}">
    @csrf
    @include('dashboard.transaccion._form')

</form>


@endsection