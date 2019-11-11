@extends('admin.layouts.app')
@section('main-content')
<div class="content-wrapper">
    <div class="container">
            <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <!-- card -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h5 class="card-title text-center">DATOS VOLUNTARIOS</h5>
                                </div>

                                <!-- inicio formulario -->
                                <form action="{{ route('voluntario.store') }}" method="POST">
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
                                                            <label for=""><b>Nombre</b></label>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">
                                                                        <i class="fas fa-user-alt"></i>
                                                                    </span>
                                                                </div>
                                                                <input type="text" class="form-control" id="" name="nombre" placeholder="Igrese Nombre">
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
                                                                <input type="text" class="form-control" id="" name="apellido" placeholder="Igrese Apellido">
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
                                                                <input type="text" class="form-control" id="" name="dni" placeholder="Igrese DNI">
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
                                                                <input type="date" class="form-control" name="fechanacimiento" id="">
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <!-- Situación Residencial / Domicilio -->
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
                                                                <select class="custom-select" id="" name="localidad_id">
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
                                                                <input type="text" class="form-control" id="" name="direccion" placeholder="Igrese Dirección">
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
                                                                <input type="text" class="form-control" id="" name="telefono" placeholder="Igrese Número de Teléfono">
                                                            </div>
                                                        </div>

                                                        <!-- email -->
                                                        <div class="form-group">
                                                            <label for=""><b>Email</b></label>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">
                                                                        <i class="fas fa-at"></i>
                                                                    </span>
                                                                </div>
                                                                <input type="email" class="form-control" id="" name="email" placeholder="Igrese Número de Teléfono">
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <!-- Datos Complementarios -->
                                                    <div class="tab-pane fade" id="nav-complementarios" role="tabpanel" aria-labelledby="nav-complementarios-tab">

                                                        <!-- ocupación -->
                                                        <div class="form-group">
                                                            <label for=""><b>Ocupación</b></label>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">
                                                                        <i class="fas fa-briefcase"></i>
                                                                    </span>
                                                                </div>
                                                                <input type="text" class="form-control" id="" name="ocupacion" placeholder="Igrese Ocupación">
                                                            </div>
                                                        </div>

                                                        <!-- Tiempo Disponible -->
                                                        <div class="form-group">
                                                            <label for=""><b>Tiempo Disponible</b></label>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">
                                                                        <i class="fas fa-user-clock"></i>
                                                                    </span>
                                                                </div>
                                                                <input type="text" class="form-control" id="" name="tiempodisponible" placeholder="Igrese dia y horario disponible">
                                                            </div>
                                                        </div>

                                                         <!-- actividad -->
                                                        <div class="form-group">
                                                            <label for=""><b>¿En que te gustaría colaborar como voluntario en Trisomía 21?</b></label>

                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">
                                                                        <i class="fas fa-tasks"></i>
                                                                    </span>
                                                                </div>
                                                                <textarea class="form-control" id="" rows="3" name="actividad"></textarea>
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
    </div>
<div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <!-- card -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h5 class="card-title text-center">DATOS VOLUNTARIOS</h5>
                    </div>

                    <!-- inicio formulario -->
                    <form action="{{ route('voluntario.store') }}" method="POST">
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
                                                <label for=""><b>Nombre</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-user-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="" name="nombre" placeholder="Igrese Nombre">
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
                                                    <input type="text" class="form-control" id="" name="apellido" placeholder="Igrese Apellido">
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
                                                    <input type="text" class="form-control" id="" name="dni" placeholder="Igrese DNI">
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
                                                    <input type="date" class="form-control" name="fechanacimiento" id="">
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Situación Residencial / Domicilio -->
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
                                                    <select class="custom-select" id="" name="localidad_id">
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
                                                    <input type="text" class="form-control" id="" name="direccion" placeholder="Igrese Dirección">
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
                                                    <input type="text" class="form-control" id="" name="telefono" placeholder="Igrese Número de Teléfono">
                                                </div>
                                            </div>

                                            <!-- email -->
                                            <div class="form-group">
                                                <label for=""><b>Email</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-at"></i>
                                                        </span>
                                                    </div>
                                                    <input type="email" class="form-control" id="" name="email" placeholder="Igrese Número de Teléfono">
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Datos Complementarios -->
                                        <div class="tab-pane fade" id="nav-complementarios" role="tabpanel" aria-labelledby="nav-complementarios-tab">

                                            <!-- ocupación -->
                                            <div class="form-group">
                                                <label for=""><b>Ocupación</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-briefcase"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="" name="ocupacion" placeholder="Igrese Ocupación">
                                                </div>
                                            </div>

                                            <!-- Tiempo Disponible -->
                                            <div class="form-group">
                                                <label for=""><b>Tiempo Disponible</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-user-clock"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="" name="tiempodisponible" placeholder="Igrese dia y horario disponible">
                                                </div>
                                            </div>

                                             <!-- actividad -->
                                            <div class="form-group">
                                                <label for=""><b>¿En que te gustaría colaborar como voluntario en Trisomía 21?</b></label>

                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-tasks"></i>
                                                        </span>
                                                    </div>
                                                    <textarea class="form-control" id="" rows="3" name="actividad"></textarea>
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
