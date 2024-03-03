<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- style.css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>
<body>
    
<header class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary justify-content-end ">
        <div class="d-flex ">
        <li>
       <a href="https://wwww.facebook.com/" target="_blank" class="text-decoration-none">
        <i class="bi bi-facebook me-2 white-icon" ></i>
        </a>
       </li>

       <li>
       <a href="https://www.instagram.com/" target="_blank" class="text-decoration-none">
         <i class="bi bi-instagram me-2 white-icon"></i>
        </a>
       </li>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow ">
        <div class="container-fluid">
            <a class="navbar-brand" ><b>Rave Records</b></a>
        
            <div class="" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ asset('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?section=records">Records</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ asset('clases') }}">Clases de DJ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?section=tienda">Tienda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ asset('nosotros') }}">Sobre Nosotros</a>
                    </li>
                </ul>
            </div>
           
            <div>
                <a href="{{ asset('contacto') }}" class="btn-contacto">Contacto</a>
            </div>
           
            <form class="d-flex" style="margin-right:100px">
            <li>
                 <a href="">
                    <i class="bi bi-search black-icon"></i>
                </a>
             </li>
             <li>
                <a href="">
                <i class="bi bi-cart2 black-icon"></i>
                </a>
             </li>
             <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" role="button">
                    <i class="bi bi-person-circle black-icon"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item">Mi cuenta:</li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ asset('login/cliente') }}">Cliente</a></li>
                        <li><a class="dropdown-item" href="{{ asset('login/admin') }}">Administrador</a></li>
                        <li><a class="dropdown-item" href="{{ asset('crear') }}">Crear una cuenta</a></li>
                    </ul>
             </li>
             </form>
        </div>
    </nav>
</header>

    @yield('content')


    <footer>
        <section class="messages-footer">
            <section class="footer">
                <i class="bi bi-headset"></i>
                <h4>Soporte de producto</h4>
                <p>3 años de garantía para su tranquilidad</p>
            </section>
            <section class="footer" >
                <i class="bi bi-person-bounding-box"></i>
                <h4>Cuenta Personal</h4>
                <p>Con grandes descuentos, entregas, y un especialista en soporte</p>
            </section>
            <section class="footer">
                <i class="bi bi-tag-fill"></i>
                <h4>Ahorros increíbles</h4>
                <p>Hasta un 70% de descuento en productos nuevos. El mejor precio</p>
            </section>
        </section>
        <section class="container-footer row  container-fluid text-center  text-lg-start  mt-xl-5 pt-5" >
           <section class="container" >
                <section class="row justify-content-between">
                    <section class=" footer-text col-lg-4 col-md-6 mb-4 mb-lg-0">
                                <h2>Recibí nuestras noticias.</h2>
                                <p>Sé el primero en enterarte de las últimas ofertas.</p>
                        </section>
                        <section class="col-lg-4 col-md-6">
                            <form action="#" method="post">
                                    <div class="d-flex">
                                        <input type="email" class="form-control" placeholder="Correo electrónico">
                                        <button type="submit" class="btn btn-footer">Subscribir</button>
                                    </div>
                            </form>
                        </section>
                </section>
           </section>
        </section>
        <section class="container-footer row container-fluid text-center  text-lg-start pt-4" >
           <section class="container" >
                <section class="row">
                    <div class=" col-lg-2 col-md-4 mb-6 mb-lg-0">
                                <h5>Información</h5>
                                <ul>
                                    <li>
                                        <span>Sobre Nosotros</span>
                                    </li>
                                    <li>
                                        <span>Política de Privacidad</span>
                                    </li>
                                    <li>
                                        <span>Buscar</span>
                                    </li>
                                    <li>
                                        <span>Términos</span>
                                    </li>
                                    <li>
                                        <span>Contáctenos</span>
                                    </li>
                                    <li>
                                        <span>Noticias</span>
                                    </li>
                                </ul>
                    </div>
                    <div class="col-lg-2 col-md-6 mb-4">
                                <h5>Records</h5>
                                <ul>
                                    <li>
                                        <span>Techno</span>
                                    </li>
                                    <li>
                                        <span>Hard Techno</span>
                                    </li>
                                    <li>
                                        <span>House Music</span>
                                    </li>
                                    <li>
                                        <span>Tech House</span>
                                    </li>
                                    <li>
                                        <span>Melodic Techno</span>
                                    </li>
                                    <li>
                                        <span>Progressive House</span>
                                    </li>
                                </ul>
                    </div>
                    <div class="col-lg-2 col-md-6 mb-4">
                                <h5>Clases de DJ</h5>
                                <ul>
                                    <li>
                                        <span>Producción Musica</span>
                                    </li>
                                    <li>
                                        <span>Dj Profesional I</span>
                                    </li>
                                    <li>
                                        <span>Dj Profesional II</span>
                                    </li>
                                </ul>
                    </div>
                    <div class="col-lg-2 col-md-6 mb-4">
                                <h5>Tienda</h5>
                                <ul>
                                    <li>
                                        <span>Consolas Pioneer</span>
                                    </li>
                                    <li>
                                        <span>Cables OYAIDE NEO d+</span>
                                    </li>
                                    <li>
                                        <span>Auriculares</span>
                                    </li>
                                    <li>
                                        <span>Púas Ortofan</span>
                                    </li>
                                </ul>
                    </div>
                </section>
           </section>
        </section>
        <div class="foot container-fluid pt-4">
            <p>&copy; 2023 Rave  Records. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>

