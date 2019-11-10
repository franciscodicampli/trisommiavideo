@extends('layouts.dashboard')
@section('content')
<div class="card col-6">
        <div class="card-body">
            <div class="card-text">
                    <form action="{{route('pensiones.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Pension</label>
                                <input type="text"
                                class="form-control @error('pension') is-invalid @enderror"
                                name="pension"
                                value="{{ old('pension') }}">
                                @error('pension')
                                  <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                              </div>

                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>

            </div>
        </div>
    </div>
@endsection
