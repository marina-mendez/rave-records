@extends('layouts.header')

@section('title', 'Administrador')

@section('content')
<section class="container container-cuenta"> 
    <p>Home >> Log-in / Administrador</p>
    <section class="container-registro">
    <h4>Log-in</h4>
        <section class="login">
            <section class="login-step">
                <h5 class="bold">Ingresa como administrador</h5>
                <p>Si ya posee una cuenta, inicie sesión con su correo electrónico</p>
                <form class="row g-3 needs-validation form-login" method="POST">
                    <div class="col-md-4 position-relative form-cuenta">
                        <label for="name" class="form-label bold">Email *</label>
                        <input type="text" class="form-control input-login" id="" required>
                        
                    </div>
                    <div class="col-md-4 position-relative form-cuenta">
                        <label for="last-name" class="form-label bold">Contraseña *</label>
                        <input type="text" class="form-control input-login" id=""  required>
                        
                    </div>
                </form>
                <div class="buton">
                    <input type="submit" value="Iniciar Sesión" class="btn mb-4" name="submit">
                </div>
            </section>
            <section class="login-create">
                <h5 class="bold">Nuevo administrador?</h5>
                <p>Encargate de mantener tu sitio web en funcionamiento</p>
                <ul>
                    <li>• Crear contenido</li>
                    <li>• Actualizar actividades</li>
                    <li>• Verificar ventas</li>
                </ul>
                <div class="btn-crear buton-crearlog">
                        <a href="{{ asset('crear') }}" class="btn-crear">Crear una cuenta</a>
                </div>
            </section>
        </section>
    </section>
</section>
@endsection