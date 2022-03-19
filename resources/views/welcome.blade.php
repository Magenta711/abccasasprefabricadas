
@php
    function firtsProject($projects)
    {
        foreach ($projects as $key => $value) {
            if (count($value->galleries) > 0) {
                return $value->id;
            }
        }
    }
@endphp
@extends('layouts.app')

@section('content')
    <!--Carousel Wrapper-->
    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
            <li data-target="#carousel-example-2" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="view" style="height: 720px;">
                    <img class="d-block w-100 h-100" src="{{ asset('img/slider/805.jpg') }}"
                        alt="First slide" style="position: absolute;object-fit:cover;top: 0;left: 0;min-height: 720px;">
                    <div class="mask rgba-black-light"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">BIENVENIDOS A ABC CASAS PREFABRICADAS</h3>
                    <a type="button" class="btn btn-danger" href="#contact">CONTÁCTANOS</a>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view" style="height: 720px;">
                    <img class="d-block w-100 h-100" src="{{ asset('img/slider/806.jpg') }}"
                        alt="Second slide" style="position: absolute;object-fit:cover;top: 0;left: 0;min-height: 720px;">
                    <div class="mask rgba-black-light"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">VISITA NUESTROS PROYECTOS</h3>
                    <a type="button" class="btn btn-danger" href="/project/{{firtsProject($projects)}}">PROYECTOS</a>
                    
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view" style="height: 720px;">
                    <img class="d-block w-100 h-100" src="{{ asset('img/slider/808.jpg') }}"
                        alt="Third slide" style="position: absolute;object-fit:cover;top: 0;left: 0;min-height: 720px;">
                    <div class="mask rgba-black-light"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">COTIZA TU NUEVO HOGAR</h3>
                    <a type="button" class="btn btn-danger" href="#contact">COTIZACIÓN</a>
                    
                </div>
            </div>
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->

    <div class="container">



        {{-- Section: about --}}
        <section id="about" class="my-5">

            <h3 class="h3 text-center mb-5 rojo-text">LO QUE HACEMOS</h3>

            <!--Grid row-->
            <div class="row wow fadeIn">

                <!--Grid column-->
                <div class="col-lg-6 col-md-12 px-4">

                    <!--First row-->
                    <div class="row">
                        <div class="col-1 mr-3">
                            <i class="fas fa-users fa-2x rojo-text"></i>
                        </div>
                        <div class="col-10">
                            <h5 class="feature-title rojoc-text">Atención Personal</h5>
                            <p class="grey-text">Contamos con un personal altamente capacitado, que trabajan
                                continuamente para ofrecerle la mejor solución que se adapte a sus necesidades</p>
                        </div>
                    </div>
                    <!--/First row-->

                    <div style="height:30px"></div>

                    <!--Second row-->
                    <div class="row">
                        <div class="col-1 mr-3">
                            <i class="fas fa-pen fa-2x rojo-text"></i>
                        </div>
                        <div class="col-10">
                            <h5 class="feature-title rojoc-text">Diseño y Productividad</h5>
                            <p class="grey-text">Construimos su casa prefabricada con la máxima calidad y seguridad.
                                A.B.C Casas Prefabricadas cuenta con una amplia capacidad de fabricación para pequeños y grandes proyectos.
                                Además nos caracterizamos por ofrecer la mayor eficiencia para entregarle su casa en el menor tiempo posible                            </p>
                        </div>
                    </div>
                    <!--/Second row-->

                    <div style="height:30px"></div>

                    <!--Third row-->
                    <div class="row">
                        <div class="col-1 mr-3">
                            <i class="fas fa-home fa-2x rojo-text"></i>
                        </div>
                        <div class="col-10">
                            <h5 class="feature-title rojoc-text">Calidad y Experiencia</h5>
                            <p class="grey-text">A.B.C. Casas Prefabricadas cuenta con una experiencia de más de 15 años construyendo los mejores hogares.</p>
                        </div>
                    </div>
                    <!--/Third row-->

                </div>
                <!--/Grid column-->

                <!--Grid column-->
                <div class="col-lg-6 col-md-12">

                    <p class="h5 text-center mb-4 grey-text">A.B.C CASAS PREFABRICADAS</p>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe title="vimeo-player" src="https://player.vimeo.com/video/234963159?h=7cb27f9393" width="640" height="375" frameborder="0" allowfullscreen></iframe>
                    </div>
                    
                </div>
                <!--/Grid column-->

            </div>
            <!--/Grid row-->

        </section>

    </div>
    <!--Projects section v.4-->
    <section>

        <!--Grid row-->
        <div class="row mx-0">
            <!--Grid column-->
            <div class="col-md-12">
                <div class="streak streak-md streak-photo"
                    style="background-image: url({{asset('/img/slider/807.jpg')}}); background-size: cover; background-repeat: no-repeat;">
                    <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                        <div>
                            <h5 class="dark-text"><i class="fas fa-house-chimney"></i><strong> Creamos tu hogar ideal</strong></h6>
                            <h3 class="card-title py-3 font-weight-bold rojo-text"><strong>"Brindamos bienestar y calidad a nuestros clientes más allá de sus expectativas"</strong></h3>
                            <p class="pb-3">Nuestras casas nos acreditan como los mejores en la construcción modular del sector. Diseños únicos al igual de hermosos, cada una de nuestras casas está pensada para que se acomoden a las necesidades y exigencias de nuestros clientes. </p>
                            <a href="/project/{{firtsProject($projects)}}" class="btn btn-outline-white btn-rounded "><i class="far fa-clone left"></i> MIRA NUESTROS PROYECTOS</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->

    </section>
    <!--Projects section v.4-->

    


    <div class="container">
        <!--Section: Contact v.2-->
        <section class="mb-4" id="contact">

        <div class="mt-5 text-center"">
            <img  src="{{ asset('img/logo.png') }}" alt="">
        </div>
            <!--Section heading-->
            <h2 class="h1-responsive font-weight-bold text-center my-4 rojo-text">Contáctanos</h2>
            <!--Section description-->
            <p class="text-center w-responsive mx-auto mb-5">¿Tienes alguna duda, quieres cotizar tu nuevo hogar o solo necesitas más infomarción? Por favor no dudes en contactarnos,
                te daremos una oportuna y la mejor atención posible.</p>
            <div class="row">
                <!--Grid column-->
                <div class="col-md-9 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="name" name="name" class="form-control">
                                    <label for="name" class="">Nombre</label>
                                </div>
                            </div>
                            <!--Grid column-->
                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="email" class="form-control">
                                    <label for="email" class="">Correo electronico</label>
                                </div>
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->
                        <!--Grid row-->
                        <!--Grid row-->
                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-md-12">
                                <div class="md-form">
                                    <textarea type="text" id="message" name="message" rows="4"
                                        class="form-control md-textarea"></textarea>
                                    <label for="message">Mensaje</label>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->
                    </form>
                    <div class="text-center text-md-left">
                        <a class="btn btn-danger" onclick="document.getElementById('contact-form').submit();">Enviar</a>
                    </div>
                    <div class="status"></div>
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-md-3 text-center ">
                    <ul class="list-unstyled mb-0">
                        <li><i class="fas fa-map-marker-alt fa-2x rojo-text"></i>
                            <p>Medellín, Cl. 62d #110-188</p>
                        </li>
                        <li><i class="fas fa-phone mt-4 fa-2x rojo-text"></i>
                            <p>+57 3113395710</p>
                        </li>
                        <li><i class="fas fa-envelope mt-4 fa-2x rojo-text"></i>
                            <p>abccasasprefabricadas@outlook.es</p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
            </div>
        </section>
        <!--Section: Contact v.2-->
        <div id="map-container" class="z-depth-1-half map-container my-5" style="height: 400px">
            <iframe src="https://maps.google.com/maps?q=A.B.C. CASAS PREFABRICADAS&t=&z=16&ie=UTF8&iwloc=&output=embed" frameborder="0"
          style="border:0" allowfullscreen></iframe>
        </div>
    </div>
@endsection
@section('css')
    <style>
        .streak.streak-photo {
            background-attachment: fixed;
        }
    </style>
@endsection