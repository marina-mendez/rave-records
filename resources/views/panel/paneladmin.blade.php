@extends('layouts.header')

@section('title', 'Panel del Administrador')

@section('content')

<ul>
    @foreach ($users as $user) 
        <li>{{$user->name}}</li>
        <li>{{$user->email}}</li>
        <li>{{$user->id}}</li>
        <li>{{$user->id_tipo_usuario}}</li>
    @endforeach
<ul>

<div id="content">
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-12 mb-3">
                    <h1>Hola!</h1>
                    <h6>Usted se encuentra en el panel de administrador 😉</h6>
                    
                    {{$users->links()}}

                    <!-- CAMBIOS DE MARU!!!!!!:-->
                    <a href="{{route("productoscreate")}}"><input class="btn btn-primary" type="button" value="Agregar productos"></a>
                    <a href="{{route("productoscrud")}}"><input class="btn btn-primary" type="button" value="Registro de productos"></a>
                    <a href="{{route("userscrud", $users)}}"><input class="btn btn-warning" type="button" value="Registro clientes"></a>
                </div>
                <!--
                <div class="col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Teléfono</th>
                                    <th>Correo electrónico</th>
                                    <th>Contraseña</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                /*
                                if ($administrador) {
                                    while ($row = mysqli_fetch_assoc($administrador)) {
                                        $id = $row['idusuario']; 
                                        echo '<tr>';
                                        echo '<td>' . $row['idusuario'] . '</td>';
                                        echo '<td>' . $row['nombre'] . '</td>';
                                        echo '<td>' . $row['apellido'] . '</td>';
                                        echo '<td>' . $row['telefono'] . '</td>';
                                        echo '<td>' . $row['email'] . '</td>';
                                        echo '<td>' . $row['contrasenia'] . '</td>';
                                        echo '<a href="index.php?section=editar-admin&idusuario=' . $id . '">Editar</a>';
                                        echo '<a>|</a>';
                                        echo '<a href="index.php?section=eliminar-admin&idusuario=' . $id . '">Eliminar</a>';
                                        echo '</td>';
                                        echo '</tr>';
                                        
                                    }
                                } else {
                                    echo '<tr class="text-center">';
                                    echo '<td colspan="9">No existe registros</td>';
                                    echo '</tr>';
                                }/*/
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                </div>
            </div>
        </div>
        
    -->-->
    </section>
</div>


@endsection
