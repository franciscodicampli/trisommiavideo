@extends('layouts.dashboard')
@section('content')
<div class="container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- card -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h5 class="card-title text-center">DATOS DEL TUTOR: {{ $tutor->nombre .' '. $tutor->apellido }}</h5>
                    </div>


                    <!-- inicio formulario -->
                    <form action="" method="POST" onsubmit="return validacion()">
                        @csrf
                        <div class="card-body">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-personales-tab" data-toggle="tab" href="#nav-personales" role="tab" aria-controls="nav-personales" aria-selected="true">Datos Personales</a>
                                        <a class="nav-item nav-link" id="nav-domicilio-tab" data-toggle="tab" href="#nav-domicilio" role="tab" aria-controls="nav-domicilio" aria-selected="false">Domicilio</a>
                                        <a class="nav-item nav-link" id="nav-complementarios-tab" data-toggle="tab" href="#nav-complementarios" role="tab" aria-controls="nav-complementarios" aria-selected="false">Datos Complementarios</a>
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                        <!-- datos personales -->
                                        <div class="tab-pane fade show active" id="nav-personales" role="tabpanel" aria-labelledby="nav-personales-tab">
                                            <!-- nombre -->
                                            <div class="form-group">
                                                <label for="inputError"><b>Nombre</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-user-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="nombre" value="{{ $tutor->nombre }}" disabled>
                                                </div>
                                            </div>

                                            <!-- apellido -->
                                            <div class="form-group">
                                                <label for=""><b>Apellido</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-user-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="" value="{{ $tutor->apellido }}" disabled>
                                                </div>
                                            </div>

                                            <!-- dni -->
                                            <div class="form-group">
                                                <label for=""><b>DNI</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-address-card"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="" value="{{ $tutor->dni }}" disabled>
                                                </div>
                                            </div>

                                            <!-- fecha nacimiento -->
                                            <div class="form-group">
                                                <label for=""><b>Fecha de Nacimiento</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-calendar-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input type="date" class="form-control" value="{{ $tutor->fechanacimiento }}" disabled id="">
                                                </div>
                                            </div>

                                            <!-- sexo/género -->
                                            <div class="form-group">
                                                <label for=""><b>Género</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-venus-mars"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" value="{{ $tutor->sexo }}" disabled id="">
                                                </div>
                                            </div>

                                            <!-- estado civil -->
                                            <div class="form-group">
                                                <label for=""><b>Estado Civil</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-user-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" value="{{ $tutor->estadocivil }}" disabled id="">
                                                </div>
                                            </div>

                                            <!-- ocupación -->
                                            <div class="form-group">
                                                <label for=""><b>Ocupación</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-briefcase"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="" value="{{ $tutor->ocupacion }}" disabled>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- Domicilio y Datos de Contacto-->
                                        <div class="tab-pane fade" id="nav-domicilio" role="tabpanel" aria-labelledby="nav-domicilio-tab">
                                            <!-- localidad -->
                                            <div class="form-group">
                                                <label for=""><b>Localidad</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                                <i class="fas fa-map-marked-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="" value="{{ $tutor->localidad->localidad }}" disabled>
                                                </div>
                                            </div>


                                            <!-- direccion -->
                                            <div class="form-group">
                                                <label for=""><b>Dirección</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="" value="{{ $tutor->direccion }}" disabled>
                                                </div>
                                            </div>

                                            <!-- relacion con el censado -->
                                            <div class="form-group">
                                                <label for=""><b>Relación con el censado</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-users"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="" value="{{ $tutor->relacionconcensado }}" disabled>
                                                </div>
                                            </div>

                                            <!-- telefono -->
                                            <div class="form-group">
                                                <label for=""><b>Teléfono</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-phone-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="" value="{{ $tutor->telefono }}" disabled>
                                                </div>
                                            </div>

                                            <!-- email -->
                                            <div class="form-group">
                                                <label for=""><b>Email</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-phone-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input type="email" class="form-control" id="" value="{{ $tutor->email }}" disabled>
                                                </div>
                                            </div>

                                        </div>



                                        <!-- Domicilio y Datos de Contacto-->
                                        <div class="tab-pane fade" id="nav-complementarios" role="tabpanel" aria-labelledby="nav-complementarios">

                                            <!-- obra social -->
                                            <div class="form-group">
                                                <label for=""><b>Obra Social</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-id-card"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="" value="{{ $tutor->obrasocial->obrasocial }}" disabled>
                                                </div>
                                            </div>

                                            <!-- observaciones -->
                                            <div class="form-group">
                                                <label for=""><b>Observaciones</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-edit"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="" value="{{ $tutor->observacion }}" disabled>
                                                    </div>
                                            </div>

                                        </div>
                                </div>
                        </div>

                        <!-- footer del card con boton -->
                        <div class="modal-footer justify-content-between">
                            <a href="{{ route('tutor.index') }}" class="btn btn-primary">Volver</a>
                        </div>
                    </form>
                    <!-- termina formulario -->
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
