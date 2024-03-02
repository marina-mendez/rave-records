@extends('layouts.header')

@section('title', 'Sobre Nosotros')

@section('content')

<section class="container container-cuenta"> 
    <p>Home >> Sobre Nosotros</p>
    <section class="container-registro">
    <h4>Sobre Nosotros</h4>
        <section class="">
            <article>
                <h3>La música es la respuesta</h3>
                <p>Somos un local especializado en música electrónica. En nuestra tienda online podrás encontrar los últimos lanzamientos de vinilos, consolas y mucho más. </p>
                <p>Con equipo de apasionados por la música y un compromiso de calidad, nuestra tienda está concebida para vender equipos de la mejor calidad, adaptándonos a las necesidades del cliente.</p>
            </article>
            <article>
                <img src="./images/studio.jpg" alt="">
            </article>
        </section>
        <section>
            <article>
                <img src="./images/vinilo.jpg" alt="">
            </article>
            <article>
                <h3>Nuestros vinilos</h3>
                <p>Los discos de vinilo están adquiriendo progresivamente una nueva significación que va más allá del valor artístico y cultural de su contenido musical: se están convirtiendo en objetos de colección e incluso de antigüedades. Gracias a nuestra amplia experiencia, te podemos brindar todo el asesoramiento que necesites a la hora de elegir el vinilo, sello y edición limitada perfectos para vos.</p>
            </article>
        </section>
</section>

@endsection