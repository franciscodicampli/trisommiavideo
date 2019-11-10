@extends('layouts.dashboard')
@section('content')

<div class="container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- card -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h5 class="card-title text-center">DATOS DEL CENSADO: {{ $registered->nombre .' '. $registered->apellido . ' / ' . 'N° Legajo: ' . $registered->legajo }}</h5>
                    </div>

                    <!-- inicio formulario -->
                    <form action="{{ route('censado.update', $registered->id) }}" method="POST">
                        @csrf
                        @method('PUT')
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
                                                    <input type="text" class="form-control" id="" name="nombre" value="{{ $registered->nombre }}">
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
                                                    <input type="text" class="form-control" id="" name="apellido" value="{{ $registered->apellido }}">
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
                                                    <input type="text" class="form-control" id="" name="dni" value="{{ $registered->dni }}">
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
                                                    <input type="date" class="form-control" name="fechanacimiento" id="" value="{{ $registered->fechanacimiento }}">
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
                                                        <input class="form-check-input" type="radio" name="sexo" id="inlineRadio1" value="Masculino" @if ($registered->sexo == "Masculino") checked @endif>
                                                        <label class="form-check-label" for="inlineRadio1">Masculino</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sexo" id="inlineRadio2" value="Femenino" @if ($registered->sexo == "Femenino") checked @endif>
                                                        <label class="form-check-label" for="inlineRadio2">Femenino</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sexo" id="inlineRadio3" value="Otro" @if ($registered->sexo == "Otro") checked @endif>
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
                                                    <select class="custom-select" id="" name="estadocivil">
                                                        <option value="Soltero" @if ($registered->estadocivil == "Soltero") selected @endif>Soltero</option>
                                                        <option value="En Relación" @if ($registered->estadocivil == "En Relación") selected @endif>En Relación</option>
                                                        <option value="Casado" @if ($registered->estadocivil == "Casado") selected @endif>Casado</option>
                                                        <option value="Divorciado" @if ($registered->estadocivil == "Divorciado") selected @endif>Divorciado</option>
                                                        <option value="Viudo" @if ($registered->estadocivil == "Viudo") selected @endif>Viudo</option>
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
                                                    <input type="text" class="form-control" id="" name="" value="{{ $registered->ocupacion }}">
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
                                                            <option value="{{ $localidad->id }}"
                                                                @if ($localidad->id == $registered->localidad_id)
                                                                selected
                                                                @endif
                                                                >{{ $localidad->localidad }}</option>
                                                        @endforeach
                                                    </select>
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
                                                    <select class="custom-select" id="" name="situacionresidencial_id">
                                                        <option selected>Seleccione una opción</option>
                                                        @foreach ($residences as $residence )
                                                            <option value="{{ $residence->id }}"
                                                                @if ($residence->id == $registered->situacionresidencial_id)
                                                                selected
                                                                @endif
                                                                >{{ $residence->situacionresidencial }}</option>
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
                                                    <input type="text" class="form-control" id="" name="" value="{{ $registered->direccion }}">
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
                                                    <input type="text" class="form-control" id="" name="" value="{{ $registered->entornofamiliar }}">
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
                                                    <input type="text" class="form-control" id="" name="" value="{{ $registered->telefono }}">
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
                                                    <select class="custom-select" id="" name="formacionescolar">
                                                        <option value="Jardín de Infantes" @if ($registered->formacionescolar == "Jardín de Infantes") selected @endif>Jardín de Infantes</option>
                                                        <option value="Primario Completo" @if ($registered->formacionescolar == "Primario Completo") selected @endif>Primario Completo</option>
                                                        <option value="Primario Incompleto" @if ($registered->formacionescolar == "Primario Incompleto") selected @endif>Primario Incompleto</option>
                                                        <option value="Secundario Completo" @if ($registered->formacionescolar == "Secundario Completo") selected @endif>Secundario Completo</option>
                                                        <option value="Secundario Incompleto" @if ($registered->formacionescolar == "Secundario Incompleto") selected @endif>Secundario Incompleto</option>
                                                        <option value="Terciario/Universitario Completo" @if ($registered->formacionescolar == "Terciario/Universitario Completo") selected @endif>Terciario/Universitario Completo</option>
                                                        <option value="Terciario/Universitario Incompleto" @if ($registered->formacionescolar == "Terciario/Universitario Incompleto") selected @endif>Terciario/Universitario Incompleto</option>
                                                        <option value="No posee formación escolar" @if ($registered->formacionescolar == "No posee formación escolar") selected @endif>No posee formación escolar</option>
                                                    </select>
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
                                                    <select class="js-example-basic-multiple" name="institucioneducativa_id[]" multiple="multiple" style="width: 93%">
                                                        @foreach ($registered->schoolings as $schooling)
                                                            <option value="{{ $schooling->id }}" selected>{{ $schooling->institucioneducativa }}</option>
                                                        @endforeach
                                                    </select>
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
                                                    <input type="text" class="form-control" id="" name="numerocertificadod" value="{{ $registered->numerocertificadod }}">
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
                                                    <input type="date" class="form-control" name="fechaemision" value="{{ $registered->fechaemision }}">
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
                                                    <input type="date" class="form-control" name="fechavencimiento" value="{{ $registered->fechavencimiento }}">
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
                                                    <input type="text" class="form-control" id="" name="entidadcertificado" value="{{ $registered->entidadcertificado }}">
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
                                                    <select class="custom-select" id="" name="obrasocial_id">
                                                            <option selected>Seleccione una obra social</option>
                                                            @foreach ($healthinsurances as $healthinsurance)
                                                                <option value="{{ $healthinsurance->id }}"
                                                                    @if ($healthinsurance->id == $registered->obrasocial_id)
                                                                    selected
                                                                    @endif
                                                                    >{{ $healthinsurance->obrasocial }}</option>
                                                            @endforeach
                                                    </select>
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
                                                    <select class="js-example-basic-multiple" name="pension[]" multiple="multiple" style="width: 93%">
                                                        @foreach ($registered->pensions as $pension)
                                                            <option value="{{ $pension->id }}" selected>{{ $pension->pension }}</option>
                                                        @endforeach
                                                    </select>
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
                                                    <select class="js-example-basic-multiple" name="patologia[]" multiple="multiple" style="width: 93%">
                                                        @foreach ($registered->pathologies as $pathologie)
                                                            <option value="{{ $pathologie->id }}" selected>{{ $pathologie->patologia }}</option>
                                                        @endforeach
                                                    </select>
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
                                                    <select class="js-example-basic-multiple" name="tratamiento[]" multiple="multiple" style="width: 93%">
                                                        @foreach ($registered->treatments as $treatment)
                                                            <option value="{{ $treatment->id }}" selected>{{ $treatment->tratamiento }}</option>
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
                                                    <input type="text" class="form-control" id="" name="" value="{{ $registered->observacion }}">
                                                 </div>
                                            </div>

                                        </div>
                                    </div>
                        </div>
                        <!-- footer del card con boton -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Actualizar</button>
                            <a href="{{ route('censado.index') }}" class="btn btn-primary">Volver</a>
                        </div>
                    </form>
                    <!-- termina formulario -->

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
