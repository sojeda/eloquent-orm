@extends('layout')

@section('content')
<div class="jumbotron">
    <div class="container">
        <h1>
            Curso Eloquent ORM
        </h1>
        <p>
            Texto
        </p>
    </div>
</div>
<div class="container">
    <h1 class="page-header">
        Ultimos 10 Usuarios Registrados
    </h1>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Nombre
                </th>
                <th>
                    Email
                </th>
                <th>
                    Genero
                </th>
                <th>
                    Biografía
                </th>
            </tr>
        </thead>
        <tbody>
            @include('query.partials.list-users')
        </tbody>
    </table>
</div>
@endsection
