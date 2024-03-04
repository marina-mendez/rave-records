@extends('layouts.header')

@section('title', 'Tienda')

@section('content')

<section class="container">
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
            <img src="./images/banner1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
            <img src="./images/banner2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="./images/banner3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
</section>
<section>
    <span>Tienda</span><span>Productos</span>
</section>
<section>
    <article>
        <h2>Nuestros productos</h2>
    </article>
</section>
<section>
    <section>
        <h4>Filtros</h4>
        <a href="">Limpiar filtros</a>
        <p>Cables</p>
        <p>Vinilos</p>
        <p>Audio</p>
        <p>Consolas</p>
        <article>
            <p>Filtrar categoría</p>
            <a href="">Aplicar filtro</a>
        </article>
    </section>
    <section>
        <section>
            @foreach ($productos as $producto)
            <article>
                <a href="">
                    <figure>
                        <div>
                            <article> @if($producto->url)
                                <img src="{{ $producto->url }}" alt="Imagen del producto" class="">
                            @else
                                <p>No hay imagen disponible</p>
                            @endif
                            </article>
                            <article>
                                <h4>{{$producto->nombre}}</h4>
                                <span>{{$productos->marca}}</span>
                                <span>{{$productos->precio}}</span>
                                <a href=""></a>
                            </article>
                        </div>
                    </figure>
                </a>
            </article>
            @endforeach
        </section>
    </section>
</section>
@endsection
