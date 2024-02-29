@extends('layouts.header')

@section('title', 'Inicio')

@section('content')

<div class="container">
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

    <section class="mt-3 mb-5">
        <h5  class="text-center descripcion">
            ¡Bienvenidos a Rave Records!
            <br>
            Somos un local especializado en música electrónica. En nuestra tienda online podrás encontrar los últimos lanzamientos de vinilos, consolas y muchos más.
        </h5>
    </section>

    <section class="new-products">
        <h4>Nuevos productos</h4>
        <section class="new-products-card">
            <article>
                <a href="">
                    <figure>
                        <img src="./images/consola1.webp" alt="">
                        <div class="box-card">
                            <span>Controlador Pioneer DJ XDJ-XZ</span>
                            <span>Color Negro</span>
                            <span class="price">$1000.00</span>
                            <figcaption>$499.00</figcaption>
                        </div>
                    </figure>
                </a>
            </article>
            <article>
                <a href="">
                    <figure>
                        <img src="./images/charlotte.jpg" alt="">
                        <div class="box-card">
                            <span>Vinilo - Apollo - Charlotte de Witte</span>
                            <span>Género: Techno</span>
                            <span class="price">$1000.00</span>
                            <figcaption>$499.00</figcaption>
                        </div>
                    </figure>
                </a>
            </article>
            <article>
                <a href="">
                    <figure>
                        <img src="./images/in_my_mind.jpg" alt="">
                        <div class="box-card">
                            <span>Vinilo - In my mind - Amelie Lens</span>
                            <span>Género: Techno</span>
                            <span class="price">$1000.00</span>
                            <figcaption>$499.00</figcaption>
                        </div>
                    </figure>
                </a>
            </article>
            <article>
                <a href="">
                    <figure>
                        <img src="./images/flare.jpg" alt="">
                        <div class="box-card">
                            <span>Protectores auditivos - Flare Audio</span>
                            <span>Isolate</span>
                            <span class="price">$1000.00</span>
                            <figcaption>$499.00</figcaption>
                        </div>
                    </figure>
                </a>
            </article>
            <article>
                <a href="">
                    <figure>
                        <img src="./images/patrick.jpg" alt="">
                        <div class="box-card">
                            <span>Vinilo - Be Sharp Say No - Patrick Topping</span>
                            <span>Género: Tech House</span>
                            <span class="price">$1000.00</span>
                            <figcaption>$499.00</figcaption>
                        </div>
                    </figure>
                </a>
            </article>
            <article>
                <a href="">
                    <figure>
                        <img src="./images/auris.jpg" alt="">
                        <div class="box-card">
                            <span>Auriculares Pro - AIAIAI TMA-2</span>
                            <span>DJ LIMITED</span>
                            <span class="price">$1000.00</span>
                            <figcaption>$499.00</figcaption>
                        </div>
                    </figure>
                </a>
            </article>
           
        </section>
    </section>

    <section class="mt-3 mb-5">
        <h5  class="text-center descripcion">
            10% OFF ABONANDO AL CONTADO
        </h5>
    </section>
    
    
    <section class="new-products">
        <section class="new-products-card">
            <article class="first-flyer">
                    <figure>
                        <img src="./images/Banner.jpg" alt="">
                        <div class="flyer-text">10 AÑOS EN EL <br> MERCADO</div>
                    </figure>
            </article>
            <article>
                <a href="">
                    <figure>
                        <img src="./images/recondite.jpg" alt="">
                        <div class="box-card">
                            <span>Vinilo - Bird - <br>Recondite</span>
                            <span>Género: Melodic </span>
                            <span class="price">$1000.00</span>
                            <figcaption>$499.00</figcaption>
                        </div>
                    </figure>
                </a>
            </article>
            <article>
                <a href="">
                    <figure>
                        <img src="./images/pan-pot.jpg" alt="">
                        <div class="box-card">
                            <span>Vinilo - Funke - <br> Pan Pot</span>
                            <span>Género: Pike Techno</span>
                            <span class="price">$1000.00</span>
                            <figcaption>$499.00</figcaption>
                        </div>
                    </figure>
                </a>
            </article>
            <article>
                <a href="">
                    <figure>
                        <img src="./images/tim.jpg" alt="">
                        <div class="box-card">
                            <span>Vinilo - Balance - Tim Green</span>
                            <span>Género : Melodic </span>
                            <span class="price">$1000.00</span>
                            <figcaption>$499.00</figcaption>
                        </div>
                    </figure>
                </a>
            </article>
            <article>
                <a href="">
                    <figure>
                        <img src="./images/guyj.jpg" alt="">
                        <div class="box-card">
                            <span>Vinilo - Small Alarms - Guy J</span>
                            <span>Género: Progressive</span>
                            <span class="price">$1000.00</span>
                            <figcaption>$499.00</figcaption>
                        </div>
                    </figure>
                </a>
            </article>
            <article>
                <a href="">
                    <figure>
                        <img src="./images/hernan.jpg" alt="">
                        <div class="box-card">
                            <span>Vinilo - Satellites - Hernan Cattaneo</span>
                            <span>Género: Progressive</span>
                            <span class="price">$1000.00</span>
                            <figcaption>$499.00</figcaption>
                        </div>
                    </figure>
                </a>
            </article>
           
        </section>
    </section>

    <section class="mt-3 mb-5 home-middle">
      
       
        <h5  class="text-center second-descripcion">
        <i class="bi bi-quote"></i>
            Los cables son los mayores responsables de que el sonido salga de forma correcta, limpia y por sobre todo, precisa. Conocer sobre ellos, que los compone, que los hace ser el corazón y parte indispensable de tu sonido es fundamental para que a futuro, sepas que cables comprar y marcar así una diferencia por sobre el resto. 
        </h5>
        
    </section>


    <section class="new-products">
    <div class="subtitle-container">
    <h4 class="first-h4"> OYAIDE NEO d+ </h4>
    <h4>RCA Class B </h4>
    <h4>USB Type C</h4>
    <h4>Stereo Turntable</h4>
    </div>
        <section class="new-products-card">
            <article class="first-flyer">
                    <figure>
                        <img src="./images/girl.jpg" alt="">
                        <div class="flyer-text-second">ENVÍOS RAPIDOS <br> Y SEGUROS</div>
                    </figure>
            </article>
            <article>
                <a href="">
                    <figure>
                        <img src="./images/as808.webp" alt="">
                        <div class="box-card">
                            <span>Vinilo - Bird - <br>Recondite</span>
                            <span>Género: Melodic </span>
                            <span class="price">$1000.00</span>
                            <figcaption>$499.00</figcaption>
                        </div>
                    </figure>
                </a>
            </article>
            <article>
                <a href="">
                    <figure>
                        <img src="./images/classb.jpg" alt="">
                        <div class="box-card">
                            <span>Vinilo - Funke - <br> Pan Pot</span>
                            <span>Género: Pike Techno</span>
                            <span class="price">$1000.00</span>
                            <figcaption>$499.00</figcaption>
                        </div>
                    </figure>
                </a>
            </article>
            <article>
                <a href="">
                    <figure>
                        <img src="./images/classa.webp" alt="">
                        <div class="box-card">
                            <span>Vinilo - Balance - Tim Green</span>
                            <span>Género : Melodic </span>
                            <span class="price">$1000.00</span>
                            <figcaption>$499.00</figcaption>
                        </div>
                    </figure>
                </a>
            </article>
            <article>
                <a href="">
                    <figure>
                        <img src="./images/classs.webp" alt="">
                        <div class="box-card">
                            <span>Vinilo - Small Alarms - Guy J</span>
                            <span>Género: Progressive</span>
                            <span class="price">$1000.00</span>
                            <figcaption>$499.00</figcaption>
                        </div>
                    </figure>
                </a>
            </article>
            <article>
                <a href="">
                    <figure>
                        <img src="./images/classb.jpg" alt="">
                        <div class="box-card">
                            <span>Vinilo - Satellites - Hernan Cattaneo</span>
                            <span>Género: Progressive</span>
                            <span class="price">$1000.00</span>
                            <figcaption>$499.00</figcaption>
                        </div>
                    </figure>
                </a>
            </article>
           
        </section>
    </section>
</div>
@endsection
