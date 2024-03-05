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
<hr>
<section>
    <section class="tienda-subtitle">
        <span class="bold">Tienda ></span><span>Productos</span>
    </section>
    <section class="tienda-title">
        <article>
            <h2 class="bold">Nuestros productos</h2>
        </article>
    </section>
    <section class="tienda-products">
        <section class="tienda-filtros">
            <section class="tienda-filtrostext">
                <h4 class="bold">Filtros</h4>
                <div><a href="">Limpiar filtros</a></div>
                <p>Cables</p>
                <p>Vinilos</p>
                <p>Audio</p>
                <p>Consolas</p>
                <article class="tienda-filtrosbtn">
                    <p class="bold">Filtrar categoría</p>
                    <a href="">Aplicar filtro</a>
                </article>
            </section>
        </section>
        <section class="tienda-cards">
            <section class="tienda-cardsection">
                @foreach ($productos as $producto)
                <article class="tienda-article">
                    <a href="{{ route('producto.show', ['id' => $producto->id]) }}">
                        <figure>
                                <article class="article-img">
                                    <img src="{{ asset('images/' . $producto->url) }}" alt="{{ $producto->nombre }}">
                                </article>
                                <article class="article-card">
                                    <h4 class="bold">{{$producto->nombre}}</h4>
                                    <p>{{$producto->marca}}</p>
                                    <p class="bold">${{$producto->precio}}</p>
                                    <a class="carrito-btn" href="{{ asset('carrito') }}"><i class="bi bi-cart2 black-icon"></i> Añadir al carrito</a>
                                </article>
                        </figure>
                    </a>
                </article>
                @endforeach
            </section>
        </section>
    </section>
</section>
<section class="paginate-numbers">
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
           
            @if ($productos->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link" tabindex="-1">Anterior</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $productos->previousPageUrl() }}" tabindex="-1" rel="prev">Anterior</a>
                </li>
            @endif

            
            @foreach ($productos->getUrlRange(1, $productos->lastPage()) as $page => $url)
                @if ($page == $productos->currentPage())
                    <li class="page-item active">
                        <span class="page-link">{{ $page }}</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                @endif
            @endforeach

            
            @if ($productos->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $productos->nextPageUrl() }}" rel="next">Siguiente</a>
                </li>
            @else
                <li class="page-item disabled">
                    <span class="page-link">Siguiente</span>
                </li>
            @endif
        </ul>
    </nav>
</section>
@endsection
