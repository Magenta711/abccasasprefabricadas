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
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($projects as $item)
                        <li class="nav-item w-100">
                            <a class="nav-link {{ $i++ == 1 ? 'active' : '' }}" data-toggle="tab"
                                href="#panel-{{ $item->id }}" role="tab">{{ $item->name_project }}</a>
                        </li>
                    @endforeach
                    <li class="nav-item w-100">
                        <a class="nav-link" data-toggle="modal" data-target="#modalProjectForm" role="tab"><i
                                class="fas fa-plus"></i> Crear proyecto</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9 col-lg-8 ml-xl-0 ml-4">
                <!-- Tab panels -->
                <div class="tab-content pt-0">
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($projects as $item)
                        <!--Panel 1-->
                        <div class="tab-pane fade in {{ $i++ == 1 ? 'show active' : '' }}" id="panel-{{ $item->id }}"
                            role="tabpanel">
                            <form class="update-project" data-id="{{ $item->id }}">
                                @csrf
                                @method('PUT')
                                <div class="md-form input-group mb-4">
                                    <input type="text" class="form-control name-project" name="name_project"
                                        value="{{ $item->name_project }}">
                                    <label data-error="wrong" data-success="right" for="defaultForm-pass">
                                        Nombre del proyecto
                                    </label>
                                    <div class="input-group-append d-none">
                                        <button
                                            class="btn btn-md btn-secondary btn-update-name-project m-0 px-3">Gardar</button>
                                    </div>
                                </div>
                            </form>
                            <div class="row" id="list-images-{{ $item->id }}">
                                <div class="col-md-4 mb-4">
                                    <div class="card text-white bg-secondary h-100" data-toggle="modal"
                                        data-target="#modal_create_image">
                                        <div class="card-body d-flex align-items-center justify-content-center">
                                            <div>
                                                <i class="fas fa-plus fa-2x"
                                                    style="font-weight: bolder;margin-bottom:0px;font-size:4rem"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                            </div>
                        </div>
                    @endforeach
                    <!--/.Panel 1-->
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
    <div class="modal fade" id="modal_create_image" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Crear</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="create-image">

                    <div class="modal-body mx-3 mb-5">
                        <picture>
                            <img class="img-fluid img-thumbnail" id="cr-img-preview">
                        </picture>
                        <div class="md-form mb-5">
                            <label for="cr-file" class="form-control text-center" style="cursor: pointer"><i
                                    class="fas fa-upload"></i></label>
                            <input type="file" accept="image/*" class="d-none validate" name="file" id="cr-file">
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-default">Guardar</button>
                    </div>
                </form>
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
                <form id="create-project">
                    <div class="modal-body mx-3 mb-5">
                        <div class="md-form mb-4">
                            <i class="fas fa-pen prefix grey-text"></i>
                            <input type="text" name="name_project" id="name_project" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="name_project">Nombre del
                                proyecto</label>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-default">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Fin Modal de Editar Foto --}}
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('.name-project').focus(function() {
                $(this).siblings('.input-group-append').removeClass('d-none');
                // $('.btn-update-name-project').parent().removeClass('d-none');
            });

            $('#cr-file').change(function() {
                $(this).parent().children('label').addClass('text-primary');
                readImage(this);
            });

            function readImage(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#cr-img-preview').attr('src', e.target.result); // Renderizamos la imagen
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $("#create-project").submit(function(e) {
                e.preventDefault();
                let form = $("#create-project")[0];
                let data = new FormData(form);
                $.ajax({
                    url: '/api/project',
                    method: 'POST',
                    data: data,
                    processData: false,
                    contentType: false,
                    cache: false,
                    timeout: 1000000,
                    // beforeSend: function() {

                    // },
                    success: function(data) {

                    },
                    error: function(error) {
                        console.error('ERROR: ', error);
                    }
                });
            });

            $(".update-project").submit(function(e) {
                e.preventDefault();
                let form = $(this)[0];
                let data = new FormData(form);
                let id = $(this).data('id');
                $.ajax({
                    url: '/api/project/' + id,
                    method: 'POST',
                    data: data,
                    processData: false,
                    contentType: false,
                    cache: false,
                    timeout: 1000000,
                    // beforeSend: function() {

                    // },
                    success: function(data) {
                        console.log(data);
                    },
                    error: function(error) {
                        console.error('ERROR: ', error);
                    }
                });
            });
            $("#create-image").submit(function(e) {
                e.preventDefault();
                let form = $(this)[0];
                let data = new FormData(form);
                let id = $($('.nav-link.active')[0]).attr('href').split('-').pop();

                $.ajax({
                    url: `/api/project/${id}/gallery`,
                    method: 'POST',
                    enctype: 'multipart/form-data',
                    data: data,
                    processData: false,
                    contentType: false,
                    cache: false,
                    timeout: 1000000,
                    // beforeSend: function() {

                    // },
                    success: function(data) {
                        console.log(data);
                        $('#modal_create_image').modal('hide');
                        $('#list-images-'+id).append(generateImageCard(data.image.id, data.image.file));
                    },
                    error: function(error) {
                        console.error('ERROR: ', error);
                    }
                });
            });

            function generateImageCard(id,nameFile) {
                let url = '/storage/upload/files/'+nameFile;
                return `<div class="col-md-4 mb-4">
                    <div class="view overlay zoom">
                        <img src="${url}"
                            class="img-fluid " alt="smaple image">
                        <div class="mask flex-center rgba-red-slight">
                            <button class="btn btn-outline-danger btn-rounded waves-effect px-3"
                                data-toggle="modal" data-target="#modalLoginForm">
                                <i class="fa fa-edit"></i>
                            </button>
                        </div>
                    </div>
                </div>`;
            }
        })
    </script>
@endsection
