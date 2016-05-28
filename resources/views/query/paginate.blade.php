@extends('layout')

@section('content')
<div class="container">
    <h1 class="page-header">
        Paginacion de Eloquent
    </h1>
    <p>
    Total de registros: {!! $users->total(); !!}	
    </p>
    <p>
    Página Actual {!! $users->currentPage(); !!}	
    </p>
    
    <table class="table table-hover table-striped">
    	@include('partials.head-users')
        <tbody>
            @include('partials.list-users')
        </tbody>
    </table>
    {!! $users->render() !!}
</div>
@endsection
