@extends('layout')

@section('title','Servicios')

@section('content')

    <tr>
        @auth
        <td colspan='4'>
            <a href="{{ route('servicios.create') }}">Nuevo Servicio</a>
        </td>
        @endauth   
    </tr>

    <h2>Servicios</h2>
    
    <ul>
        <ul colspan="4">Listado de Servicios</ul>
    </ul>

    <ul>
        @if($servicios)
            @foreach($servicios as $servicio)
                <li><a href="{{ route('servicios.show',$servicio) }}">{{ $servicio->titulo }}</a></li>
            @endforeach
        @else
            <li>No existe ningun servicio que mostrar</li>
        @endif
    </ul>

@endsection