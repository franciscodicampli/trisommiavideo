@extends('layouts.dashboard')
@section('content')

<div class="container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- card -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h5 class="card-title text-center">DATOS DEL CENSADO: {{ $registered->nombre .' '. $registered->apellido }}</h5>
                    </div>

                    <!-- inicio formulario -->
                    <form action="" method="POST">
                        @csrf
                        <div class="card-body">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                      <a class="nav-item nav-link active" id="nav-personales-tab" data-toggle="tab" href="#nav-personales" role="tab" aria-controls="nav-personales" aria-selected="true">Datos Personales</a>
                                      <a class="nav-item nav-link" id="nav-domicilio-tab" data-toggle="tab" href="#nav-domicilio" role="tab" aria-controls="nav-domicilio" aria-selected="false">Domicilio</a>
                                      <a class="nav-item nav-link" id="nav-escolar-tab" data-toggle="tab" href="#nav-escolar" role="tab" aria-controls="nav-escolar" aria-selected="false">Escolaridad</a>
                                      <a class="nav-item nav-link" id="nav-cud-tab" data-toggle="tab" href="#nav-cud" role="tab" aria-controls="nav-cud" aria-selected="false">C.U.D.</a>
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
                                                    <input type="text" class="form-control" id="" name="" value="{{ $registered->nombre }}" disabled>
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
                                                    <input type="text" class="form-control" id="" name="" value="{{ $registered->apellido }}" disabled>
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
                                                    <input type="text" class="form-control" id="" name="" value="{{ $registered->dni }}" disabled>
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
                                                    <input type="text" class="form-control" name="" id="" value="{{ $registered->fechanacimiento }}" disabled>
                                                </div>
                                            </div>

                                            <!-- sexo/género -->
                                            <div class="form-group">
                                                <label for=""><b>Género</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-address-card"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="" name="" value="{{ $registered->sexo }}" disabled>
                                                </div>
                                            </div>

                                            <!-- estado civil -->
                                            <div class="form-group">
                                                <label for=""><b>Estado Civil</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-address-card"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="" name="" value="{{ $registered->estadocivil }}" disabled>
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
                                                    <input type="text" class="form-control" id="" name="" value="{{ $registered->ocupacion }}" disabled>
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
                                                    <input type="text" class="form-control" id="" name="" value="{{ $registered->localidad->localidad }}" disabled>
                                                </div>
                                            </div>

                                            <!-- situacion residencial -->
                                            <div class="form-group">
                                                <label for=""><b>Situación Residencial</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-home"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="" name="" value="{{ $registered->situacionresidencial->situacionresidencial }}" disabled>
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
                                                    <input type="text" class="form-control" id="" name="" value="{{ $registered->direccion }}" disabled>
                                                </div>
                                            </div>

                                            <!-- entorno familiar -->
                                            <div class="form-group">
                                                <label for=""><b>¿Con quien/quienes vive?</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-users"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="" name="" value="{{ $registered->entornofamiliar }}" disabled>
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
                                                    <input type="text" class="form-control" id="" name="" value="{{ $registered->telefono }}" disabled>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Escolaridad -->
                                        <div class="tab-pane fade" id="nav-escolar" role="tabpanel" aria-labelledby="nav-escolar-tab">
                                            <!-- formación escolar -->
                                            <div class="form-group">
                                                <label for=""><b>Formación Escolar</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-graduation-cap"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="" name="" value="{{ $registered->formacionescolar }}" disabled>
                                                </div>
                                            </div>

                                            <!-- establecimiento educativo -->
                                            <div class="form-group">
                                                <label for=""><b>Establecimiento Educativo</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-school"></i>
                                                        </span>
                                                    </div>
                                                    @foreach ($registered->schoolings as $schooling)
                                                        <input type="text" class="form-control" id="" name="" value="{{ $schooling->institucioneducativa }}" disabled>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>

                                        <!-- C.U.D. -->
                                        <div class="tab-pane fade" id="nav-cud" role="tabpanel" aria-labelledby="nav-cud-tab">
                                            <!-- n° CUD -->
                                            <div class="form-group">
                                                <label for=""><b>N° Certificado Único de Discapacidad (CUD)</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-id-card"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="" name="" value="{{ $registered->numerocertificadod }}" disabled>
                                                </div>
                                            </div>

                                            <!-- fecha emisión -->
                                            <div class="form-group">
                                                <label for=""><b>Fecha de Emisión</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-calendar-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" name="" value="{{ $registered->fechaemision }}" disabled>
                                                </div>
                                            </div>

                                            <!-- fecha vencimiento -->
                                            <div class="form-group">
                                                <label for=""><b>Fecha de Vencimiento</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-calendar-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" name="" value="{{ $registered->fechavencimiento }}" disabled>
                                                </div>
                                            </div>

                                            <!-- Entidad que otorgo certificado -->
                                            <div class="form-group">
                                                <label for=""><b>Entidad que otorgó el certificado</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-building"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="" name="" value="{{ $registered->entidadcertificado }}" disabled>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- ObraSocial/Patología/Tratamiento/Pensiones -->
                                        <div class="tab-pane fade" id="nav-complementarios" role="tabpanel" aria-labelledby="nav-complementarios-tab">

                                            <!-- obra social -->
                                            <div class="form-group">
                                                <label for=""><b>Obra Social</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-id-card"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="" name="" value="{{ $registered->obrasocial->obrasocial }}" disabled>
                                                </div>
                                            </div>

                                            <!-- pensiones -->
                                            <div class="form-group">
                                                <label for=""><b>Pensiones</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-id-card"></i>
                                                        </span>
                                                    </div>
                                                    @foreach ($registered->pensions as $pension)
                                                        <input type="text" class="form-control" id="" name="" value="{{ $pension->pension }}" disabled>
                                                    @endforeach
                                                </div>
                                            </div>

                                            <!-- patología -->
                                            <div class="form-group">
                                                <label for=""><b>Patologías</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-file-medical-alt"></i>
                                                        </span>
                                                    </div>
                                                    @foreach ($registered->pathologies as $pathologie)
                                                        <input type="text" class="form-control" id="" name="" value="{{ $pathologie->patologia }}" disabled>
                                                    @endforeach
                                                </div>
                                            </div>

                                            <!-- tratamiento -->
                                            <div class="form-group">
                                                <label for=""><b>Tratamientos</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                                <i class="fas fa-file-medical"></i>
                                                        </span>
                                                    </div>
                                                    @foreach ($registered->treatments as $treatment)
                                                        <input type="text" class="form-control" id="" name="" value="{{ $treatment->tratamiento }}" disabled>
                                                    @endforeach
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
                                                    <input type="text" class="form-control" id="" name="" value="{{ $registered->observacion }}" disabled>
                                                 </div>
                                            </div>

                                        </div>
                                    </div>
                        </div>
                        <!-- footer del card con boton -->
                        <div class="card-footer">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Agregar Tutor</button>
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">Buscar Tutor</button>
                        </div>
                    </form>
                    <!-- termina formulario -->

                </div>
            </div>
        </div>
    </div>
</div>


{{-- LISTADO DE TUTORES --}}
<div class="container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- card -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h5 class="card-title text-center">DATOS DEL TUTOR/ES</h5>
                    </div>

                    <div class="card-body">
                            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">

                                {{-- Row de tabla --}}
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                            <thead>
                                                @if (empty($tutors))
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 170px;">Apellido y Nombre</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 219px;">D.N.I.</th>

                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 143px;">Acciones</th>
                                                </tr>
                                                @endif
                                            </thead>
                                            <tbody>
                                                @forelse ($registered->tutors as $tutor)
                                                    <tr role="row" class="odd">
                                                        <td><a href="{{ route('tutor.ver', [$tutor->id, $registered->id]) }}">{{ $tutor->apellido . ', ' . $tutor->nombre}}</a></td>
                                                        <td>{{ $tutor->dni }}</td>

                                                        <td>
                                                            <div class="button-group">
                                                                {{-- <form action="{{ route('tutor.destroy', [$tutor->id ,$registered->id]) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger  btn-sm">ELIMINAR</button> --}}
                                                                <a href="{{ route('tutor.eliminar', [$tutor->id, $registered->id]) }}" class="btn btn-outline-danger btn-sm mr-1" onclick="return confirm('¿Seguro desea desafectar el tutor del censado?')"><i class="fa fa-trash"></i></a>
                                                                <a href="" class="btn btn-outline-primary  btn-sm"><i class="fa fa-edit"></i></a>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @empty
                                                <div class="alert alert-warning alert-dismissible">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">×</font></font></button>
                                                        <h5><i class="icon fas fa-exclamation-triangle"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> ¡Alerta!</font></font></h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                        No se han registrado tutores hasta el momento. </font><font style="vertical-align: inherit;"></font></font></div>

                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Mostrando 1 de 10 de 57 registros
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>



{{-- MODAL CREAR TUTOR --}}
<div class="modal fade" id="modal-default">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">DATOS DEL TUTOR</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <!-- inicio formulario -->
            <form action="{{ route('tutor.store') }}" method="POST" onsubmit="return validacion()">
                @csrf
                <input type="text" hidden name="registered_id" value="{{ $registered->id }}">
                <div class="card-body">
                        {{-- Accordion Datos personales --}}
                        <div id="accordion">
                        <!-- we are adding the .class so bootstrap.js collapse plugin detects it -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h4 class="card-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                        Datos Personales
                                    </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="card-body">
                                        <!-- datos personales -->
                                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                            <!-- nombre -->
                                            <div class="form-group">
                                                <label for="inputError"><b>Nombre</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-user-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Igrese Nombre">

                                                    <span id="formError" class="text-danger"></span>
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
                                                    <input type="text" class="form-control" id="" name="ocupacion" placeholder="Igrese Ocupación">
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                            {{-- Accordion Datos Domicilio --}}
                            <div id="accordion">
                            <!-- we are adding the .class so bootstrap.js collapse plugin detects it -->
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h4 class="card-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                            Datos Situación Residencial y Domicilio
                                        </a>
                                        </h4>
                                    </div>
                                    <div id="collapse2" class="panel-collapse collapse in">
                                        <div class="card-body">
                                            <!-- Situación Residencial / Domicilio -->
                                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
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
                                                        <input type="text" class="form-control" id="" name="direccion" placeholder="Igrese Dirección">
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
                                                        <input type="text" class="form-control" id="" name="relacionconcensado" placeholder="Igrese con quien vive">
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
                                                                <i class="fas fa-phone-alt"></i>
                                                            </span>
                                                        </div>
                                                        <input type="email" class="form-control" id="" name="email" placeholder="Igrese su email">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            {{-- Accordion Datos Complementarios --}}
                            <div id="accordion">
                            <!-- we are adding the .class so bootstrap.js collapse plugin detects it -->
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h4 class="card-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                            Datos Complementarios
                                        </a>
                                        </h4>
                                    </div>
                                    <div id="collapse3" class="panel-collapse collapse in">
                                        <div class="card-body">
                                            <!-- ObraSocial/ -->
                                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

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
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="observacion"></textarea>
                                                        </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
        </div>
                <!-- footer del card con boton -->

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
            <!-- termina formulario -->
        </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


{{-- MODAL BUSCAR TUTOR PARA ASIGNAR --}}
<div class="modal fade" id="modal-info">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">TUTORES PARA ASIGNAR</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <!-- inicio formulario -->
            <form action="{{ route('censado.tutor.store') }}" method="POST">
                @csrf
                <input type="text" hidden name="registered_id" value="{{ $registered->id }}">
                <div class="card-body">

                    <!-- pensiones -->
                    <div class="form-group">
                        <label for=""><b>Tutores</b></label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-user-alt"></i>
                                </span>
                            </div>
                            <select class="js-example-basic-multiple" name="tutor_id[]" multiple="multiple" style="width: 93%" required>
                                @foreach ($tutores as $tut)
                                        <option value="{{ $tut->id }}" none>{{ $tut->apellido }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>
        </div>
                <!-- footer del card con boton -->

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
            <!-- termina formulario -->
        </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

{{-- Funcion javascript --}}
<script>
function validacion() {
    valor = document.getElementById("nombre").value;
    if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
        // alert('[ERROR] El campo nombre no puede estar vacio');
        var errorSpan = document.getElementById("formError");
        errorSpan.innerHTML = "Rellena todos los campos"
        document.getElementById("nombre").className += " is-invalid";

    return false;
    }


    return true;
  }
</script>

@endsection
