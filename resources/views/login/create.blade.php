@extends('layouts.header')

@section('title', 'Crear cuenta')

@section('content')
<section class="container container-cuenta"> 
    <p>Crear una cuenta</p>
    <section class="container-registro">
    <h4>Crear una cuenta</h4>
        <section class="crear-cuenta">

            <form class="row g-3 needs-validation" action=" {{route('cursos.store')}}" method="POST">
            @csrf

            <div class="col-md-4 position-relative form-cuenta">
                <label for="name" class="form-label">Nombre *</label>
                <input type="text" name="name" class="form-control" id="" required>
            </div>
            <div class="col-md-6 position-relative form-cuenta">
                <label for="email" class="form-label">Correo electrónico *</label>
                <input type="text" name="email"  class="form-control" id="" required>
            </div>
            <div class="col-md-3 position-relative">
                <label for="account" class="form-label">Tipo de cuenta *</label>
                <select class="form-select" name="id_tipo_usuario" id="" required>
                <option selected disabled value="">Seleccione rol...</option>
                <option value="1">Administrador</option>
                <option value="2">Cliente</option>
                </select>
            </div>
            <div class="col-md-3 position-relative  form-cuenta">
                <label for="password" class="form-label">Contraseña *</label>
                <input type="text" name="password"class="form-control" id="" required>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Registrarme</button>
            </div>
            </form>
        </section>
    </section>
</section>

@endsection
