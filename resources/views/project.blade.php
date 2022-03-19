@extends('layouts.app')

@section('content')
    <div class="container">

        <!-- Section: Pricing -->

        <!-- Section: Portfolio -->
        <section id="portfolio" class="mb-3">

            <!-- Section heading -->
            <h3 class="text-center text-uppercase font-weight-bold mb-5 mt-5 pt-5 wow fadeIn" data-wow-delay="0.2s"
                style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">Nuestros proyectos de {{$project->name_project}}</h3>

            <!-- Section description -->
            <p class="text-center grey-text my-5 w-responsive mx-auto wow fadeIn" data-wow-delay="0.2s"
                style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">Lorem ipsum dolor
                sit amet, consectetur adipisicing elit. Laborum quas, eos officia maiores ipsam ipsum dolores reiciendis ad
                voluptas, animi obcaecati adipisci sapiente mollitia? Autem delectus quod accusamus tempora, aperiam minima
                assumenda deleniti.</p>

        </section>
        <!-- Section: Portfolio -->

    </div>

    <div class="container-fluid mb-5">

        <!-- Grid row -->
        <div class="gallery" id="gallery">

            @foreach ($project->galleries as $gallery)
                <!-- Grid column -->
                <div class="mb-3 pics animation all 2">
                    <img class="img-fluid" src="{{ asset('/storage/upload/files/' . $gallery->file) }}"
                        alt="Card image cap">
                </div>
                <!-- Grid column -->
            @endforeach

        </div>
        <!-- Grid row -->

    </div>
@endsection

@section('css')
    <style>
        .gallery {
            -webkit-column-count: 3;
            -moz-column-count: 3;
            column-count: 3;
            -webkit-column-width: 33%;
            -moz-column-width: 33%;
            column-width: 33%;
        }

        .gallery .pics {
            -webkit-transition: all 350ms ease;
            transition: all 350ms ease;
        }

        .gallery .animation {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
        }

        @media (max-width: 450px) {
            .gallery {
                -webkit-column-count: 1;
                -moz-column-count: 1;
                column-count: 1;
                -webkit-column-width: 100%;
                -moz-column-width: 100%;
                column-width: 100%;
            }
        }

        @media (max-width: 400px) {
            .btn.filter {
                padding-left: 1.1rem;
                padding-right: 1.1rem;
            }
        }

    </style>
@endsection

@section('js')
    <script>
        $(function() {
            var selectedClass = "";
            $(".filter").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#gallery").fadeTo(100, 0.1);
                $("#gallery div").not("." + selectedClass).fadeOut().removeClass('animation');
                setTimeout(function() {
                    $("." + selectedClass).fadeIn().addClass('animation');
                    $("#gallery").fadeTo(300, 1);
                }, 300);
            });
        });
    </script>
@endsection
