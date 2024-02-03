@extends('layouts.navigationBarOnly')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Subir imagen del local </h2>
                <div class="card">
                    <form action="{{route('crearlocales.store')}}" method="POST" enctype="multipart/form-data"> 
                        @csrf
                        <div class="form-group">
                            <input type="file" name="file" id="" accept="image/*">
                            <br>
                            @error('file')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary"> Subir imagen </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop