@if (!request()->is('home') && !request()->is('login') && !request()->is('password*'))
<!-- Footer -->
<footer class="page-footer font-small bg-dark pt-4">
    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">
        <!-- Grid row -->
        <div class="row">
            <!-- Grid column -->
            <div class="col-md-4 mt-md-0 mt-3 px-5">
                
                <!-- Content -->
                <h5 class="text-uppercase rojo-text">ABC CASAS PREFABRICADAS</h5>
                <p>Construimos el lugar ideal para su hogar. Nuestras casas prefabricadas se incluye en el sector de fabricación de construcciones de módulos en concreto , a nivel nacional e internacional, con más de 15 años de antigüedad, siendo su actividad la fabricación y equipamiento de construcciones modulares de alta calidad.</p>
                
                <!-- Facebook -->
                <a href="https://www.facebook.com/abcpref/" class="btn-floating btn-lg btn-fb" target="_blank" type="button" role="button"><i class="fab fa-facebook-f"></i></a>
                <!-- Twitter -->
                <a href="https://api.whatsapp.com/send?phone=573135648863&text=Hola%2C%20quiero%20más%20información" target="_blank" class="btn-floating btn-lg btn-ins" type="button" role="button"><i class="fab fa-instagram"></i></a>
                <!-- Google -->
                <a class="btn-floating btn-lg btn-whatsapp" type="button" role="button"><i class="fab fa-whatsapp"></i></a>
                <!-- Instagram -->
                <a class="btn-floating btn-lg btn-email" type="button" role="button"><i class="fas fa-envelope"></i></a>
            </div>
            <!-- Grid column -->
            <!-- Grid column -->
            <div class="col-md-2 mb-md-0 mb-3">
                <!-- Links -->
                <h5 class="text-uppercase mb-4 rojo-text">NAVEGACIÓN</h5>
                <!-- <div class="d-flex align-items-center h-100"> -->

                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="#app">INICIO</a>
                        </li>
                        <li class="mb-2">
                            <a href="#about">QUIÉNES SOMOS</a>
                        </li>
                        <li class="mb-2">
                            <a href="#contact">CONTÁCTANOS</a>
                        </li>
                    </ul>
                <!-- </div> -->
            </div>
            <!-- Grid column -->
            <hr class="clearfix w-100 d-md-none pb-3">
            <!-- Grid column -->
            <div class="col-md-2 mb-md-0 mb-3 ">
                <!-- Links -->
                <h5 class="text-uppercase mb-4 rojo-text">PROYECTOS</h5>
                <ul class="list-unstyled">
                    @if (isset($projects))
                        @foreach ($projects as $item)
                            @if (count($item->galleries) > 0)
                            <li class="mb-2">
                                    <a href="/project/{{$item->id}}">{{$item->name_project}}</a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                </ul>
            </div>
            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3 ">

                <!-- Title -->
                <h5 class="text-uppercase mb-4 rojo-text">Horarios de atención</h5>
      
                <!-- Opening hours table -->
                <table class="table footer-table text-center text-white">
                  <tbody>
                    <tr>
                      <td>Lun - Vie:</td>
                      <td>8am - 6pm</td>
                    </tr>
                    <tr>
                      <td>Sabados:</td>
                      <td>8am - 2pm</td>
                    </tr>
                    {{-- <tr>
                      <td>Sunday:</td>
                      <td>9am - 10pm</td>
                    </tr> --}}
                  </tbody>
                </table>
      
              </div>
              <!-- Grid column -->
        </div>
        <!-- Grid row -->
    </div>
    <!-- Footer Links -->
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">Copyright © 2022 | ABC casas prefabricadas | Hecho por Esteban Leal
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->
@endif