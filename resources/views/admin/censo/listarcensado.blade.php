@extends('admin.layouts.app')
@section('main-content')
<div class="content-wrapper">
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h5 class="card-title text-center">Lista de Censados</h5>
                        </div>

                        <div class="card-body">
                            <form action="{{route('censado.index')}}" method="GET">
                            @csrf
                            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="form-group col-sm-4 col-md-4">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control rounded-0" placeholder="Buscar por Apellido o Nombre" name="apellido">
                                            <span class="input-group-append">
                                                <button type="submit" class="btn btn-info btn-flat"><i class="fas fa-search"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4 col-md-4">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control rounded-0" placeholder="Buscar por DNI" name="dni" value="{{old('dni')}}">
                                            <span class="input-group-append">
                                                <button type="submit" class="btn btn-info btn-flat"><i class="fas fa-search"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4 col-md-4">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control rounded-0" placeholder="Buscar por N° Legajo" name="legajo">
                                            <span class="input-group-append">
                                                <button type="submit" class="btn btn-info btn-flat"><i class="fas fa-search"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </form>

                                <div class="form-group col-sm-4 col-md-4">
                                        <label for=""><b>Exportar Datos</b></label>
                                        <div class="input-group mb-3">

                                            <span class="input-group-append">
                                                <a href="{{ route('exportar.censado') }}" target="_blank" class="btn btn-outline-info btn-flat btn-sm "><i class="fas fa-file-pdf"></i></a>
                                                {{-- <button type="button" class="btn btn-outline-info btn-flat btn-sm "><i class="fas fa-file-pdf"></i></button> --}}
                                            </span>
                                        </div>
                                    </div>




                                {{-- Row de tabla --}}
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                        @if($registereds)
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 170px;">Apellido y Nombre</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 219px;">D.N.I.</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 219px;">N° Legajo</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 194px;">Tutor</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 143px;">Acciones</th>
                                                </tr>
                                            </thead>
                                            @endif
                                            <tbody>
                                                @forelse ($registereds as $registered)
                                                    <tr role="row" class="odd">
                                                        <td><a href="{{ route('censado.show', $registered->id) }}">{{ $registered->apellido . ', ' . $registered->nombre }}</a></td>
                                                        <td>{{ $registered->dni }}</td>
                                                        <td>{{ $registered->legajo }}</td>

                                                        <td>
                                                        @forelse ($registered->tutors as $tutor)
                                                            {{-- <span>{{ $tutor->nombre }} . ','  {{ $tutor->apellido }}</span> --}}
                                                            <span>{{ $tutor->apellido . ', ' . $tutor->nombre }}</span> <br>
                                                        @empty
                                                        <span class="badge bg-warning"><i class="icon fas fa-exclamation-triangle"></i> Sin asignar</span>
                                                        @endforelse
                                                        </td>
                                                        <td>
                                                            <div class="button-group">
                                                                <form action="{{ route('censado.destroy', $registered->id) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <a href="{{ route('exportar.ficha', $registered->id) }}" target="_blank" class="btn btn-outline-info  btn-sm mr-1"><i class="fas fa-file-pdf"></i></a>
                                                                <button type="submit" class="btn btn-outline-danger btn-sm mr-1" onclick="return confirm('¿Seguro desea borrar el censado permanentemente? Esta acción no se puede revertir.')"><i class="fa fa-trash"></i></button>
                                                                <a href="{{ route('censado.edit', $registered->id) }}" class="btn btn-outline-primary  btn-sm"><i class="fa fa-edit"></i></a>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <div class="alert alert-info alert-dismissible">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">×</font></font></button>
                                                        <h5><i class="icon fas fa-info"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> ¡Atención!!</font></font></h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                        No se han encontrado registros. </font><font style="vertical-align: inherit;"></font></font>
                                                    </div>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                            {{ $registereds->links() }}
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
</div>
@endsection
