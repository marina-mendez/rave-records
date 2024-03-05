@extends('layouts.header')

@section('title', $producto->nombre)

@section('content')

<section>
    <section class="tienda-subtitle">
        <span>Tienda ></span><span>{{$producto->marca}}</span>
    </section>
    <section class="tienda-title-id">
        <article class="tittle-id-name">
            <h2 class="bold">{{$producto->nombre}}</h2>
            <div class="btn-back"><a href="{{ asset('tienda') }}"><< Volver a la tienda</a></div>
        </article>
    </section>
        <section class="tienda-id-card">
                <article class="id-card">
                        <figure>
                            <article class="id-card-img">
                                <img src="{{ asset('images/' . $producto->url) }}" alt="{{ $producto->nombre }}">
                            </article>
                            <article class="id-card-text">
                                <h4 class="bold">{{$producto->nombre}}</h4>
                                <h5>{{$producto->descripcion}}</h5>
                                <p>Marca: {{$producto->marca}}</p>
                                <p>ISBN: {{$producto->isbn}}</p>
                                <p class="bold">${{$producto->precio}}</p>
                                <div><a href="{{ asset('carrito') }}" class="btn-tienda"><i class="bi bi-cart2 black-icon"></i> Añadir al carrito</a></div>
                            </article>
                        </figure>
                </article>
        </section>
</section>



@endsection
