@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="my-5">
            <h4 class="card-title">Administración de proyectos</h4>
            <h6 class="card-subtitle m-b-20 text-muted">Administrar las galerias de proyectos.</h6>
        </div>
        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2">
                <ul class="nav md-pills pills-danger">
                    <li class="nav-item w-100">
                        <a class="nav-link active" data-toggle="tab" href="#panel11" role="tab">Casas Especiales</a>
                    </li>
                    <li class="nav-item w-100">
                        <a class="nav-link" data-toggle="tab" href="#panel12" role="tab">Un nivel</a>
                    </li>
                    <li class="nav-item w-100">
                        <a class="nav-link" data-toggle="tab" href="#panel13" role="tab">Dos niveles</a>
                    </li>
                    <li class="nav-item w-100">
                        <a class="nav-link" data-toggle="tab" href="#panel14" role="tab">Terrazas</a>
                    </li>
                    <li class="nav-item w-100">
                        <a class="nav-link" data-toggle="tab" href="#panel14" role="tab">Casetas</a>
                    </li>
                    <li class="nav-item w-100">
                        <a class="nav-link" data-toggle="modal" data-target="#modalProjectForm" role="tab"><i
                                class="fas fa-plus"></i> Crear proyecto</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9 col-lg-8 ml-xl-0 ml-4">
                <!-- Tab panels -->
                <div class="tab-content pt-0">

                    <!--Panel 1-->
                    <div class="tab-pane fade in show active" id="panel11" role="tabpanel">
                        <div class="md-form input-group mb-4">
                            <input type="text" id="name-project" class="form-control" value="Casas Especiales">
                            <label data-error="wrong" data-success="right" for="defaultForm-pass">Nombre del
                                proyecto</label>
                            <div class="input-group-append d-none">
                                <button class="btn btn-md btn-secondary m-0 px-3" type="button"
                                    id="btn-update-name-project">Gardar</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <div class="view overlay zoom">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/forest-sm.webp"
                                        class="img-fluid " alt="smaple image">
                                    <div class="mask flex-center rgba-red-slight">
                                        <button class="btn btn-outline-danger btn-rounded waves-effect px-3"
                                            data-toggle="modal" data-target="#modalLoginForm">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="view overlay zoom">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/forest-sm.webp"
                                        class="img-fluid " alt="smaple image">
                                    <div class="mask flex-center rgba-red-slight">
                                        <button class="btn btn-outline-danger btn-rounded waves-effect px-3">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="view overlay zoom">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/forest-sm.webp"
                                        class="img-fluid " alt="smaple image">
                                    <div class="mask flex-center rgba-red-slight">
                                        <button class="btn btn-outline-danger btn-rounded waves-effect px-3">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="view overlay zoom">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/forest-sm.webp"
                                        class="img-fluid " alt="smaple image">
                                    <div class="mask flex-center rgba-red-slight">
                                        <button class="btn btn-outline-danger btn-rounded waves-effect px-3">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="view overlay zoom">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/forest-sm.webp"
                                        class="img-fluid " alt="smaple image">
                                    <div class="mask flex-center rgba-red-slight">
                                        <button class="btn btn-outline-danger btn-rounded waves-effect px-3">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="view overlay zoom">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/forest-sm.webp"
                                        class="img-fluid " alt="smaple image">
                                    <div class="mask flex-center rgba-red-slight">
                                        <button class="btn btn-outline-danger btn-rounded waves-effect px-3">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--/.Panel 1-->

                    <!--Panel 2-->
                    <div class="tab-pane fade" id="panel12" role="tabpanel">
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <div class="view overlay zoom">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/forest-sm.webp"
                                        class="img-fluid " alt="smaple image">
                                    <div class="mask flex-center rgba-red-slight">
                                        <button class="btn btn-outline-danger btn-rounded waves-effect px-3">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="view overlay zoom">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/forest-sm.webp"
                                        class="img-fluid " alt="smaple image">
                                    <div class="mask flex-center rgba-red-slight">
                                        <button class="btn btn-outline-danger btn-rounded waves-effect px-3">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="view overlay zoom">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/forest-sm.webp"
                                        class="img-fluid " alt="smaple image">
                                    <div class="mask flex-center rgba-red-slight">
                                        <button class="btn btn-outline-danger btn-rounded waves-effect px-3">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="view overlay zoom">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/forest-sm.webp"
                                        class="img-fluid " alt="smaple image">
                                    <div class="mask flex-center rgba-red-slight">
                                        <button class="btn btn-outline-danger btn-rounded waves-effect px-3">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="view overlay zoom">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/forest-sm.webp"
                                        class="img-fluid " alt="smaple image">
                                    <div class="mask flex-center rgba-red-slight">
                                        <button class="btn btn-outline-danger btn-rounded waves-effect px-3">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="view overlay zoom">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/forest-sm.webp"
                                        class="img-fluid " alt="smaple image">
                                    <div class="mask flex-center rgba-red-slight">
                                        <button class="btn btn-outline-danger btn-rounded waves-effect px-3">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--/.Panel 2-->

                    <!--Panel 3-->
                    <div class="tab-pane fade" id="panel13" role="tabpanel">
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <div class="view overlay zoom">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/forest-sm.webp"
                                        class="img-fluid " alt="smaple image">
                                    <div class="mask flex-center rgba-red-slight">
                                        <button class="btn btn-outline-danger btn-rounded waves-effect px-3">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="view overlay zoom">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/forest-sm.webp"
                                        class="img-fluid " alt="smaple image">
                                    <div class="mask flex-center rgba-red-slight">
                                        <button class="btn btn-outline-danger btn-rounded waves-effect px-3">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="view overlay zoom">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/forest-sm.webp"
                                        class="img-fluid " alt="smaple image">
                                    <div class="mask flex-center rgba-red-slight">
                                        <button class="btn btn-outline-danger btn-rounded waves-effect px-3">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="view overlay zoom">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/forest-sm.webp"
                                        class="img-fluid " alt="smaple image">
                                    <div class="mask flex-center rgba-red-slight">
                                        <button class="btn btn-outline-danger btn-rounded waves-effect px-3">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="view overlay zoom">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/forest-sm.webp"
                                        class="img-fluid " alt="smaple image">
                                    <div class="mask flex-center rgba-red-slight">
                                        <button class="btn btn-outline-danger btn-rounded waves-effect px-3">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="view overlay zoom">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/forest-sm.webp"
                                        class="img-fluid " alt="smaple image">
                                    <div class="mask flex-center rgba-red-slight">
                                        <button class="btn btn-outline-danger btn-rounded waves-effect px-3">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.Panel 3-->

                    <!--Panel 4-->
                    <div class="tab-pane fade" id="panel14" role="tabpanel">
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <div class="view overlay zoom">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/forest-sm.webp"
                                        class="img-fluid " alt="smaple image">
                                    <div class="mask flex-center rgba-red-slight">
                                        <button class="btn btn-outline-danger btn-rounded waves-effect px-3">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="view overlay zoom">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/forest-sm.webp"
                                        class="img-fluid " alt="smaple image">
                                    <div class="mask flex-center rgba-red-slight">
                                        <button class="btn btn-outline-danger btn-rounded waves-effect px-3">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="view overlay zoom">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/forest-sm.webp"
                                        class="img-fluid " alt="smaple image">
                                    <div class="mask flex-center rgba-red-slight">
                                        <button class="btn btn-outline-danger btn-rounded waves-effect px-3">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="view overlay zoom">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/forest-sm.webp"
                                        class="img-fluid " alt="smaple image">
                                    <div class="mask flex-center rgba-red-slight">
                                        <button class="btn btn-outline-danger btn-rounded waves-effect px-3">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="view overlay zoom">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/forest-sm.webp"
                                        class="img-fluid " alt="smaple image">
                                    <div class="mask flex-center rgba-red-slight">
                                        <button class="btn btn-outline-danger btn-rounded waves-effect px-3">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="view overlay zoom">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/forest-sm.webp"
                                        class="img-fluid " alt="smaple image">
                                    <div class="mask flex-center rgba-red-slight">
                                        <button class="btn btn-outline-danger btn-rounded waves-effect px-3">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.Panel 4-->

                </div>
            </div>
        </div>
    </div>

    {{-- Modal de Editar Foto --}}
    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Editar</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3 mb-5">
                    <img src="https://mdbootstrap.com/img/Photos/Others/forest-sm.webp" class="img-fluid "
                        alt="smaple image">
                    <div class="md-form mb-5">
                        <label for="defaultForm-email" class="form-control text-center" style="cursor: pointer"><i
                                class="fas fa-upload"></i></label>
                        <input type="file" id="defaultForm-email" accept="image/*" class="d-none validate">
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-default">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    {{-- Fin Modal de Editar Foto --}}

    {{-- Modal de Editar Foto --}}
    <div class="modal fade" id="modalProjectForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Crear proyecto</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3 mb-5">
                    <div class="md-form mb-4">
                        <i class="fas fa-pen prefix grey-text"></i>
                        <input type="text" id="defaultForm-pass" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="defaultForm-pass">Nombre del proyecto</label>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-default">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    {{-- Fin Modal de Editar Foto --}}
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            $('#name-project').focus(function () {
                $('#btn-update-name-project').parent().removeClass('d-none');
            });
        })
    </script>
@endsection