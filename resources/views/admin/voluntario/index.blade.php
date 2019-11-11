@extends('admin.layouts.app')
@section('main-content')
<div class="content-wrapper">
        <div class="container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h5 class="card-title text-center">Lista de Voluntarios</h5>
                                </div>

                                <div class="card-body">
                                    <form action="{{route('voluntario.index')}}" method="GET">
                                    @csrf
                                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                            <div class="row">
                                                <div class="form-group">
                                                    <a href="{{route('voluntario.create')}}"class="btn btn-success">Nuevo Voluntario</a>
                                                </div>
                                            </div>
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
                                                        <input type="text" class="form-control rounded-0" placeholder="Buscar por Tiempo Disponible" name="tiempodisponible">
                                                        <span class="input-group-append">
                                                            <button type="submit" class="btn btn-info btn-flat"><i class="fas fa-search"></i></button>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="form-group col-sm-4 col-md-4">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control rounded-0" placeholder="Buscar por Actividad" name="actividad">
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
                                                    <a href="" target="_blank" class="btn btn-outline-info btn-flat btn-sm "><i class="fas fa-file-pdf"></i></a>
                                                    {{-- <button type="button" class="btn btn-outline-info btn-flat btn-sm "><i class="fas fa-file-pdf"></i></button> --}}
                                                </span>
                                            </div>
                                        </div>

                                            {{-- Row de tabla --}}
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 170px;">Apellido y Nombre</th>
                                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 219px;">Disponibilidad horaria</th>
                                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 219px;">Actividad</th>
                                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 143px;">Acciones</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($voluntarios as $voluntario)
                                                                <tr role="row" class="odd">
                                                                    <td><a href="{{route('voluntario.show', $voluntario->id) }}">{{ $voluntario->apellido . ', ' . $voluntario->nombre }}</a></td>
                                                                    <td>{{ $voluntario->tiempodisponible }}</td>
                                                                    <td>{{ $voluntario->actividad }}</td>
                                                                    <td>
                                                                            <div class="button-group">
                                                                                    <form action="{{ route('voluntario.destroy', $voluntario->id) }}" method="POST">
                                                                                    @csrf
                                                                                    @method('DELETE')
                                                                                    <a href="{{ $voluntario->id }}" target="_blank" class="btn btn-outline-info  btn-sm mr-1"><i class="fas fa-file-pdf"></i></a>
                                                                                    <button type="submit" class="btn btn-outline-danger btn-sm mr-1"><i class="fa fa-trash"></i></button>
                                                                                    <a href="{{ route('voluntario.edit', $voluntario->id) }}" class="btn btn-outline-primary  btn-sm"><i class="fa fa-edit"></i></a>
                                                                                    </form>
                                                                                </div>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-sm-12 col-md-7">
                                                        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                                            {{ $voluntarios->links() }}
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

