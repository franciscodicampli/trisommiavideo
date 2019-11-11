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
                                    <h5 class="card-title text-center">DATOS DEL VOLUNTARIO: {{ $voluntario->nombre .' '. $voluntario->apellido }}</h5>
                                </div>

                                <!-- inicio formulario -->
                                <form action="" method="POST">
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
                                                            <input type="text" class="form-control" id="" name="" value="{{$voluntario->nombre}}" placeholder="Igrese Nombre" disabled>
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
                                                                <input type="text" class="form-control" id="" name="" value="{{$voluntario->apellido}}" placeholder="Igrese Apellido" disabled>
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
                                                                <input type="text" class="form-control" id="" name="" value="{{$voluntario->dni}}" placeholder="Igrese DNI" disabled>
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
                                                                <input type="date" class="form-control" name="" id="" value="{{$voluntario->fechanacimiento}}" disabled>
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
                                                                <select class="custom-select" id="" name="" disabled>
                                                                        @foreach ($localidades as $localidad)
                                                                            <option value="{{ $localidad->id }}">{{ $voluntario->localidad->localidad }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    {{-- <input type="text" class="form-control" value="{{ $voluntario->localidad->localidad}}"> --}}
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
                                                                <input type="text" class="form-control" id="" name="" value="{{$voluntario->direccion}}" placeholder="Igrese Dirección" disabled>
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
                                                                <input type="text" class="form-control" id="" name="" value="{{$voluntario->telefono}}" placeholder="Igrese Número de Teléfono" disabled>
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
                                                                <input type="email" class="form-control" id="" name="" value="{{$voluntario->email}}" placeholder="Igrese Número de Teléfono" disabled>
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
                                                                <input type="text" class="form-control" id="" name="" value="{{$voluntario->ocupacion}}" placeholder="Igrese Ocupación" disabled>
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
                                                                <input type="text" class="form-control" id="" name="" value="{{$voluntario->tiempodisponible}}" placeholder="Igrese dia y horario disponible" disabled>
                                                            </div>
                                                        </div>



                                                         <!-- actividad -->
                                                        <div class="form-group">
                                                            <label for=""><b>Activiad que quiere hacer</b></label>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">
                                                                        <i class="fas fa-tasks"></i>
                                                                    </span>
                                                                </div>
                                                                {{-- <input type="text" class="form-control" id="" name="" value="{{$voluntario->actividad}}" placeholder="Igrese actividad" disabled> --}}

                                                                <textarea class="form-control" id="" rows="3" name="" disabled>{{$voluntario->actividad}}</textarea>
                                                             </div>
                                                        </div>

                                                    </div>
                                                </div>
                                    </div>
                                    <!-- footer del card con boton -->
                                    {{-- <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                    </div> --}}
                                </form>
                                <!-- termina formulario -->
                            </div>
                        </div>
                    </div>
            </div>
    </div>

</div>
@endsection
