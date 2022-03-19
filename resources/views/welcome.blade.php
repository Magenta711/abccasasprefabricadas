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
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).webp"
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
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).webp"
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
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).webp"
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

            <h3 class="h3 text-center mb-5">Lo que hacemos</h3>

            <!--Grid row-->
            <div class="row wow fadeIn">

                <!--Grid column-->
                <div class="col-lg-6 col-md-12 px-4">

                    <!--First row-->
                    <div class="row">
                        <div class="col-1 mr-3">
                            <i class="fas fa-code fa-2x indigo-text"></i>
                        </div>
                        <div class="col-10">
                            <h5 class="feature-title">Atención Personal</h5>
                            <p class="grey-text">Contamos con un personal altamente capacitado, que trabajan
                                continuamente para ofrecerle la mejor solución que se adapte a sus necesidades.</p>
                        </div>
                    </div>
                    <!--/First row-->

                    <div style="height:30px"></div>

                    <!--Second row-->
                    <div class="row">
                        <div class="col-1 mr-3">
                            <i class="fas fa-book fa-2x blue-text"></i>
                        </div>
                        <div class="col-10">
                            <h5 class="feature-title">Diseño y Productividad</h5>
                            <p class="grey-text">Construimos su casa prefabricada con la máxima calidad y seguridad.
                                A.B.C. Casas Prefabricadas cuenta con amplia capacidad de fabricación para pequeños y
                                grandes proyectos.
                            </p>
                        </div>
                    </div>
                    <!--/Second row-->

                    <div style="height:30px"></div>

                    <!--Third row-->
                    <div class="row">
                        <div class="col-1 mr-3">
                            <i class="fas fa-graduation-cap fa-2x cyan-text"></i>
                        </div>
                        <div class="col-10">
                            <h5 class="feature-title">Calidad y Experiencia</h5>
                            <p class="grey-text">A.B.C. Casas Prefabricadas cuenta con Experiencia de más de 15 años a
                                su servicios.</p>
                        </div>
                    </div>
                    <!--/Third row-->

                </div>
                <!--/Grid column-->

                <!--Grid column-->
                <div class="col-lg-6 col-md-12">

                    <p class="h5 text-center mb-4">Watch our "5 min Quick Start" tutorial</p>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/cXTThxoywNQ"
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
                <div class="streak streak-md streak-photo"
                    style="background-image: url(https://mdbcdn.b-cdn.net/img/Photos/Others/img%20%2832%29.webp);">
                    <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                        <div>
                            <h6 class="purple-text"><i class="fas fa-plane"></i><strong> Travel</strong></h6>
                            <h3 class="card-title py-3 font-weight-bold"><strong>This is the card title</strong></h3>
                            <p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat
                                fugiat, laboriosam, voluptatem,
                                optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum
                                dignissimos.
                                Odit sed qui, dolorum!</p>
                            <a class="btn btn-secondary btn-rounded"><i class="far fa-clone left"></i> View project</a>
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

            <!--Section heading-->
            <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
            <!--Section description-->
            <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us
                directly. Our team will come back to you within
                a matter of hours to help you.</p>

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
                                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
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
                <div class="col-md-3 text-center">
                    <ul class="list-unstyled mb-0">
                        <li><i class="fas fa-map-marker-alt fa-2x"></i>
                            <p>San Francisco, CA 94126, USA</p>
                        </li>

                        <li><i class="fas fa-phone mt-4 fa-2x"></i>
                            <p>+ 01 234 567 89</p>
                        </li>

                        <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                            <p>contact@mdbootstrap.com</p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
            </div>
        </section>
        <!--Section: Contact v.2-->
    </div>
    <div id="map-container" class="z-depth-1-half map-container" style="height: 400px">
        <iframe src="https://maps.google.com/maps?q=A.B.C. CASAS PREFABRICADAS&t=&z=16&ie=UTF8&iwloc=&output=embed"
            frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
@endsection

@section('css')
    <style>
        .streak.streak-photo {
            background-attachment: fixed;
        }
    </style>
@endsection
