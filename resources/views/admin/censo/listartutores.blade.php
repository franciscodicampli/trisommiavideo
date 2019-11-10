@extends('layouts.dashboard')
@section('content')
<div class="container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h5 class="card-title text-center">Lista de Tutores</h5>
                    </div>

                    <div class="card-body">
                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="form-group col-sm-4 col-md-4">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control rounded-0" placeholder="Buscar por Apellido y Nombre">
                                        <span class="input-group-append">
                                            <button type="button" class="btn btn-info btn-flat"><i class="fas fa-search"></i></button>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group col-sm-4 col-md-4">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control rounded-0" placeholder="Buscar por DNI">
                                        <span class="input-group-append">
                                            <button type="button" class="btn btn-info btn-flat"><i class="fas fa-search"></i></button>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group col-sm-4 col-md-4">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control rounded-0" placeholder="Buscar por N° Legajo">
                                        <span class="input-group-append">
                                            <button type="button" class="btn btn-info btn-flat"><i class="fas fa-search"></i></button>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-sm-4 col-md-4">
                                    <label for=""><b>Exportar Datos</b></label>
                                    <div class="input-group mb-3">

                                        <span class="input-group-append">
                                            <button type="button" class="btn btn-outline-info btn-flat btn-sm "><i class="fas fa-file-pdf"></i></button>
                                        </span>
                                    </div>
                                </div>




                            {{-- Row de tabla --}}
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                       @if($tutores)
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 170px;">Apellido y Nombre</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 219px;">D.N.I.</th>
                                                {{-- <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 219px;">N° Legajo</th> --}}
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 194px;">Censado</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 143px;">Acciones</th>
                                            </tr>
                                        </thead>
                                        @endif
                                        <tbody>
                                            @forelse ($tutores as $tutor)
                                                <tr role="row" class="odd">
                                                    <td><a href="{{ route('tutor.show', $tutor->id) }}">{{ $tutor->apellido . ', ' . $tutor->nombre }}</a></td>
                                                    <td>{{ $tutor->dni }}</td>
                                                    {{-- <td>{{ $tutor->legajo }}</td> --}}

                                                    <td>
                                                    @forelse ($tutor->registereds as $registered)
                                                        {{-- <span>{{ $tutor->nombre }} . ','  {{ $tutor->apellido }}</span> --}}
                                                        <span>{{ $registered->apellido . ', ' . $registered->nombre }}</span> <br>
                                                    @empty
                                                    <span class="badge bg-warning"><i class="icon fas fa-exclamation-triangle"></i> Sin asignar</span>
                                                    @endforelse
                                                    </td>
                                                    <td>
                                                        <div class="button-group">
                                                            <form action="{{ route('tutor.destroy', $tutor->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')

                                                            <button type="submit" class="btn btn-outline-danger btn-sm mr-1" onclick="return confirm('¿Seguro desea borrar permanentemente el tutor? Esta acción no se puede revertir.')"><i class="fa fa-trash"></i></button>
                                                            <a href="" class="btn btn-outline-primary  btn-sm"><i class="fa fa-edit"></i></a>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @empty
                                                <div class="alert alert-info alert-dismissible">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">×</font></font></button>
                                                    <h5><i class="icon fas fa-info"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> ¡Atención!!</font></font></h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                    No se han registrado tutores hasta el momento. </font><font style="vertical-align: inherit;"></font></font>
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
                                        {{ $tutores->links() }}
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
