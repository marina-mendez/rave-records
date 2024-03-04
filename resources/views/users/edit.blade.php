@extends('layouts.header')

@section('title', 'Editar Usuario')

@section('content')
    <div class="container">
        <h2>Editar Usuario</h2>
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}">
            </div>
            <div class="form-group">
                <label for="user_type">Tipo de Usuario:</label>
                <select name="user_type" id="user_type" class="form-control">
                    <option value="1" {{ $user->user_type == 1 ? 'selected' : '' }}>Administrador</option>
                    <option value="2" {{ $user->user_type == 2 ? 'selected' : '' }}>Cliente</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
    </div>
@endsection
