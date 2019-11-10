@extends('layouts.dashboard')
@section('content')
<div class="container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- card -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h5 class="card-title text-center">DATOS DEL TUTOR</h5>
                    </div>


                    <!-- inicio formulario -->
                    <form action="{{ route('tutor.store') }}" method="POST" onsubmit="return validacion()">
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
                                                    <input type="text" class="form-control" id="nombre" name="nombre">
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
                                                    <input type="text" class="form-control" id="" name="apellido">
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
                                                    <input type="text" class="form-control" id="" name="dni">
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
                                                    <input type="date" class="form-control" name="fechanacimiento">
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
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sexo" id="inlineRadio1" value="Masculino">
                                                        <label class="form-check-label" for="inlineRadio1">Masculino</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sexo" id="inlineRadio2" value="Femenino">
                                                        <label class="form-check-label" for="inlineRadio2">Femenino</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sexo" id="inlineRadio3" value="Otro">
                                                        <label class="form-check-label" for="inlineRadio3">Otro</label>
                                                    </div>
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
                                                    <select class="custom-select" id="inputGroupSelect01" name="estadocivil">
                                                        <option selected>Seleccione</option>
                                                        <option value="Soltero">Soltero</option>
                                                        <option value="En Relación">En Relación</option>
                                                        <option value="Casado">Casado</option>
                                                        <option value="Divorciado">Divorciado</option>
                                                        <option value="Viudo">Viudo</option>
                                                    </select>
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
                                                    <input type="text" class="form-control" id="" name="ocupacion">
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
                                                    <select class="custom-select" id="inputGroupSelect01" name="localidad_id">
                                                        <option selected>Seleccione una Localidad</option>
                                                        @foreach ($localidades as $localidad)
                                                            <option value="{{ $localidad->id }}">{{ $localidad->localidad }}</option>
                                                        @endforeach
                                                    </select>
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
                                                    <input type="text" class="form-control" id="" name="direccion">
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
                                                    <input type="text" class="form-control" id="" name="relacionconcensado">
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
                                                    <input type="text" class="form-control" id="" name="telefono">
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
                                                    <input type="email" class="form-control" id="" name="email">
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
                                                    <select class="custom-select" id="inputGroupSelect01" name="obrasocial_id">
                                                            <option selected>Seleccione una obra social</option>
                                                            @foreach ($healthinsurances as $healthinsurance)
                                                            <option value="{{ $healthinsurance->id }}">{{ $healthinsurance->obrasocial }}</option>
                                                            @endforeach
                                                    </select>
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
                                                    <input type="text" class="form-control" id="" name="observacion">
                                                    </div>
                                            </div>

                                        </div>
                                </div>
                        </div>

                        <!-- footer del card con boton -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                    <!-- termina formulario -->
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
