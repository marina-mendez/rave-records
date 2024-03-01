@extends('layouts.header')

@section('title', 'Panel del Administrador')

@section('content')
<section class="container container-cuenta"> 
    <p>Crear una cuenta >> Administrador / Cliente</p>
    <section class="container-registro">
    <h4>Crear una cuenta</h4>
        <section class="crear-cuenta">
            <form class="row g-3 needs-validation" method="POST">
            <div class="col-md-4 position-relative form-cuenta">
                <label for="name" class="form-label">Nombre *</label>
                <input type="text" class="form-control" id="" required>
                
            </div>
            <div class="col-md-4 position-relative form-cuenta">
                <label for="last-name" class="form-label">Apellido *</label>
                <input type="text" class="form-control" id=""  required>
                
            </div>
            <div class="col-md-4 position-relative form-cuenta">
                <label for="phone" class="form-label">Teléfono *</label>
                <div class="input-group has-validation">
                <input type="text" class="form-control" id="" required>
                </div>
            </div>
            <div class="col-md-6 position-relative form-cuenta">
                <label for="email" class="form-label">Correo electrónico *</label>
                <input type="text" class="form-control" id="" required>
            </div>
            <div class="col-md-3 position-relative">
                <label for="account" class="form-label">Tipo de cuenta *</label>
                <select class="form-select" id="" required>
                <option selected disabled value="">Seleccione rol...</option>
                <option value="administrador">Administrador</option>
                <option value="cliente">Cliente</option>
                </select>
            </div>
            <div class="col-md-3 position-relative  form-cuenta">
                <label for="password" class="form-label">Contraseña *</label>
                <input type="text" class="form-control" id="" required>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Registrarme</button>
            </div>
            </form>
        </section>
    </section>
</section>

@endsection
