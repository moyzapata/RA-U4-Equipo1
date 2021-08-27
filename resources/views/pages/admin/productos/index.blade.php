@extends('layouts.app')

@section('content')
    <div style="position: relative; top: 10%; text-align: center;">
        <h1>Productos</h1>
    </div>

    @if( count($lista)>0 )
    <div class="row" style="text-align: center;">
        <div class="col-2">
            <h3>Categoría</h3>
        </div>
        <div class="col-6">
            <h3>Producto</h3>
        </div>
        <div class="col-2">
            <h3>Cantidad</h3>
        </div>
        <div class="col-2">
            <h3>Precio</h3>
        </div>
    </div>
    @foreach( $lista as $productos )
    <div class="row" style="text-align: center;">
        <div class="col-2">
            <p>{{$productos->categoria}}</p>
        </div>
        <div class="col-6">
            <p>{{$productos->nombre}} {{$productos->descripcion}} {{$productos->marca}}</p>
        </div>
        <div class="col-2">
            <p>{{$productos->cantidad}}</p>
        </div>
        <div class="col-2">
            <p>$ {{$productos->precio}}</p>
        </div>
    </div>
    @endforeach

    @else
    <p>No hay</p>

    @endif

@endsection