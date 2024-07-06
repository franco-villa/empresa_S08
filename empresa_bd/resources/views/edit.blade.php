@extends('layout')

@section('title', 'Editar Persona')

@section('content')

    <h2>Personas</h2>
    <table cellpadding="3" cellspacing="5">
        <tr>
            <th colspan="4">Edita los campos que necesites: </th>
        </tr>
        @include('partials.validation-errors')
        <form action="{{ route('personas.update', $persona) }}" method="post">
            @method('PATCH')
            @include('partials.form', ['btnText' => 'Actualizar'])
        </form>
    </table>
        
@endsection