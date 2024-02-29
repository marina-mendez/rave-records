@extends('layouts.header')

@section('title', 'Contacto')

@section('content')

<section class="container container-contacto">
    <p>Contacto <i class="bi bi-arrow-down"></i></p>
    <section class="container-form">
            <h4>Contáctanos</h4>
            <section>
            <p>Te ayudamos en todos los aspectos con la compra de nuestros productos, desde los aspectos técnicos a parte legal. <br>Escribinos tu consulta y nos pondremos en contacto contigo lo antes posible.</p>
            <form action="index.php?section=contacto" method="POST" class="pt-2">
            <div class="row">
            <div class="col-md-6">
                <div class="form-contacto pt-2">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" id="nombre" class="form-control" name="nombre" value="" >
                </div>
                <div  class="form-contacto pt-2">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Ingrese su correo electrónico" value="" >
                </div>
                <div  class="form-contacto pt-2">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="tel" id="telefono" class="form-control" name="telefono" value="">
                </div>
            </div>

            <div class="col-md-6 form-contacto pt-2">
                <label for="mensaje" class="form-label">Mensaje</label>
                <textarea  id="mensaje" class="form-control" rows="6" name="mensaje" placeholder="Dejanos tu consulta..." style="height: 7.2rem;"></textarea>
                    <div class="buton">
                        <input type="submit" value="Enviar" class="btn mb-4" name="submit">
                    </div>
            
            </div>

        </div>
       

    </form>

    <div class="row mt-4">
        <div class="col-md-6">
            <iframe class="container mt-3 mb-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.9910128570964!2d-58.39812848417484!3d-34.604388765041726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccaea670d4e67%3A0x2198c954311ad6d9!2sDa%20Vinci%20%7C%20Primera%20Escuela%20de%20Arte%20Multimedial!5e0!3m2!1ses-419!2sar!4v1668353646307!5m2!1ses-419!2sar"  height="500" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-md-6 mt-3">
            <div class="container">
            <h6><i class="bi bi-geo-alt"></i> Dirección física</h6>
            <p>Av. Corrientes 2037, C1045 CABA</p>
            <h6><i class="bi bi-telephone-inbound"></i> Teléfono</h6>
            <p>Línea móvil: +54 9 1133671306</p>
            <h6><i class="bi bi-telephone-inbound"></i> Correo electrónico</h6>
            <p>raverecords@gmail.com</p>
            </div>
        </div>
    </div>
            </section>
    </section>
</section>

@endsection
