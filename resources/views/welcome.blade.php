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
                <div class="view">
                    <img class="d-block w-100" src="{{ asset('img/slider/805.jpg') }}"
                        alt="First slide">
                    <div class="mask rgba-black-light"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Light mask</h3>
                    <p>First text</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="{{ asset('img/slider/806.jpg') }}"
                        alt="Second slide">
                    <div class="mask rgba-black-strong"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Strong mask</h3>
                    <p>Secondary text</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="{{ asset('img/slider/807.jpg') }}"
                        alt="Third slide">
                    <div class="mask rgba-black-slight"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Slight mask</h3>
                    <p>Third text</p>
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

            <h3 class="h3 text-center mb-5 rojo-text">¿QUIENES SOMOS?</h3>

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

                    <p class="h5 text-center mb-4 rojo-text">A.B.C CASAS PREFABRICADAS</p>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://vimeo.com/234963159?embedded=true&amp;source=video_title&amp;owner=71302726"
                            allowfullscreen=""></iframe>
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
        <div class="row">
            <!--Grid column-->
            <div class="col-md-12">
                <div class="card card-image"
                    style="background-image: url({{asset('/img/slider/807.jpg')}}); background-size: cover; background-repeat: no-repeat;">
                    <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                        <div>
                            <h5 class="dark-text"><i class="fas fa-house-chimney"></i><strong> Creamos tu hogar ideal</strong></h6>
                            <h3 class="card-title py-3 font-weight-bold rojo-text"><strong>"Brindamos bienestar y calidad a nuestros clientes más allá de sus expectativas"</strong></h3>
                            <p class="pb-3">Nuestras casas nos acreditan como los mejores en la construcción modular del sector. Diseños únicos al igual de hermosos, cada una de nuestras casas está pensada para que se acomoden a las necesidades y exigencias de nuestros clientes. </p>
                            <a class="btn btn-outline-white btn-rounded "><i class="far fa-clone left"></i> MIRA NUESTRA GALERÍA</a>
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
        <section class="mb-4">

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
                                    <label for="name" class="">Your name</label>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="email" class="form-control">
                                    <label for="email" class="">Your email</label>
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="subject" name="subject" class="form-control">
                                    <label for="subject" class="">Subject</label>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">

                                <div class="md-form">
                                    <textarea type="text" id="message" name="message" rows="2"
                                        class="form-control md-textarea"></textarea>
                                    <label for="message">Your message</label>
                                </div>

                            </div>
                        </div>
                        <!--Grid row-->

                    </form>

                    <div class="text-center text-md-left">
                        <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
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
    </div>
    <div id="map-container" class="z-depth-1-half map-container" style="height: 400px">
        <iframe src="https://maps.google.com/maps?q=A.B.C. CASAS PREFABRICADAS&t=&z=16&ie=UTF8&iwloc=&output=embed" frameborder="0"
          style="border:0" allowfullscreen></iframe>
    </div>
    <!-- Footer -->
    <footer class="page-footer font-small blue pt-4">
        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">
            <!-- Grid row -->
            <div class="row">
                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3 px-5">
                    <!-- Content -->
                    <h5 class="text-uppercase">Footer Content</h5>
                    <p>Construimos el lugar ideal para su hogar. Nuestras casas prefabricadas se incluye en el sector de fabricación de construcciones de módulos en concreto , a nivel nacional e internacional, con más de 15 años de antigüedad, siendo su actividad la fabricación y equipamiento de construcciones modulares de alta calidad.</p>
                </div>
                <!-- Grid column -->
                <hr class="clearfix w-100 d-md-none pb-3">
                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">
                    <!-- Links -->
                    <h5 class="text-uppercase">Links</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                    </ul>
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">
                    <!-- Links -->
                    <h5 class="text-uppercase">Links</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                    </ul>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
        <!-- Footer Links -->
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
@endsection
