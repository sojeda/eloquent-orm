@extends('layout')

@section('content')
<div class="container">
    <h1 class="page-header">
        El Usuario ha sido eliminado correctamente.
    </h1>
    <a href="{{ route("home") }}">Ir</a>
</div>
@endsection
