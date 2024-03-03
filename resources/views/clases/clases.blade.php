@extends('layouts.header')

@section('title', 'Clases de DJ')

@section('content')
<section>
    <section class="clases-span">
        <article>
            <span class="first-span bold">Clases de DJ</span>
            <span>Dj Profesional</span>
            <span>Nivel 1</span>
        </article>
        <article class="clases-btn">
            <a href="" class="btn-reservar">Reservar ahora</a>
        </article>
    </section>
    <hr>
    <section class="clases-fsection">
        <section class="text-fsection">
            <h3 class="bold">Iniciate como DJ Profesional</h3>
            <span>Comenzamos el 13 de Noviembre</span>
            <p>Contamos con un equipo acustizado y acondicionado con el mejor equipamiento del mercado.</p>
            <p> Setup Piooner CDJ 3000 - CDJ 2000 NXS - Reloop RP8000 MK2 - Xone 96 - AIAIAI Dj Preset.</p>
            <span class="bold">Precio $30.000.-</span>
        </section>
        <section class="image-fsection">
            <img src="./images/clases.jpg" alt="">
        </section>
    </section>
    <section class="clases-ssection">
        <section class="text-ssection">
            <h3>Preguntas frecuentes</h3>
            <p>-Los cursos son máximo de 4 alumnos por curso.</p>
            <p>-No hace falta que los alumnos traigan nada.</p>
            <p>-Las clases no se pueden recuperar.</p>
            <p>-El precio del curso es por mes y la duración total es de 2 meses.</p>
        </section>
        <section class="image-ssection">
            <img src="./images/alumno.jpg" alt="">
        </section>
    </section>
</section>

@endsection