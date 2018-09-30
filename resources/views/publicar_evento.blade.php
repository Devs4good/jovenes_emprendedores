@extends('layouts.app')

@section('content')
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Publicar Evento</div>

                <div class="card-body">
                    <form method="POST" action="/publicar/evento" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="titulo" class="col-md-4 col-form-label text-md-right">Titulo</label>

                            <div class="col-md-6">
                                <input id="titulo" type="text" class="form-control{{ $errors->has('titulo') ? ' is-invalid' : '' }}" name="titulo" value="{{ old('titulo') }}" required autofocus>

                                @if ($errors->has('titulo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('titulo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        

                        <div class="form-group row">
                                <label for="titu" class="col-md-4 col-form-label text-md-right">Descripcion</label>
    
                                <div class="col-md-6">
                                    <input id="descripcion" type="text" class="form-control{{ $errors->has('descripcion') ? ' is-invalid' : '' }}" name="descripcion" value="{{ old('descripcion') }}" required>
    
                                    @if ($errors->has('descripcion'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('descripcion') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                                <div class="form-group row">
                                        <label for="costo" class="col-md-4 col-form-label text-md-right">Costo</label>
            
                                        <div class="col-md-6">
                                            <input id="costo" type="text" class="form-control{{ $errors->has('costo') ? ' is-invalid' : '' }}" name="costo" value="{{ old('costo') }}" required>
            
                                            @if ($errors->has('costo'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('costo') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                            <label for="categoria" class="col-md-4 col-form-label text-md-right">Categoria</label>
                
                                            <div class="col-md-6">
                                                <select id="categoria" class="form-control{{ $errors->has('categoria') ? ' is-invalid' : '' }}" name="categoria" value="{{ old('categoria') }}" required>
                 <option>Tecnologia</option>
                 <option>Musica</option>
                 <option>Arte</option>
                  <option>Otra</option>

                                                </select>
                                                @if ($errors->has('categoria'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('categoria') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                                <label for="hora" class="col-md-4 col-form-label text-md-right">Hora</label>
                    
                                                <div class="col-md-6">
                                                    <input id="hora" type="text" class="form-control{{ $errors->has('hora') ? ' is-invalid' : '' }}" name="hora" value="{{ old('hora') }}" required>
                    
                                                    @if ($errors->has('hora'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('hora') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                    <label for="ubicacion" class="col-md-4 col-form-label text-md-right">Ubicación</label>
                        
                                                    <div class="col-md-6">
                                                        <input id="ubicacion" type="text" class="form-control{{ $errors->has('ubicacion') ? ' is-invalid' : '' }}" name="ubicacion" value="{{ old('ubicacion') }}" required>
                        
                                                        @if ($errors->has('ubicacion'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('ubicacion') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                    <div class="form-group row">
                                            <label for="fecha" class="col-md-4 col-form-label text-md-right">Fecha</label>
                
                                            <div class="col-md-6">
                                                <input id="fecha" type="date" class="form-control{{ $errors->has('fecha') ? ' is-invalid' : '' }}" name="fecha" value="{{ old('fecha') }}" required >
                
                                                @if ($errors->has('fecha'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('fecha') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                                <label for="fecha" class="col-md-4 col-form-label text-md-right">Link para Anotarse</label>
                    
                                                <div class="col-md-6">
                                                    <input id="link" type="text" class="form-control{{ $errors->has('link') ? ' is-invalid' : '' }}" name="link" value="{{ old('link') }}" required>
                    
                                                    @if ($errors->has('link'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('link') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                    <label for="foto" class="col-md-4 col-form-label text-md-right">Foto</label>
                        
                                                    <div class="col-md-6">
                                                        <input id="foto" type="file" class="{{ $errors->has('foto') ? ' is-invalid' : '' }}" name="foto" value="{{ old('foto') }}" required>
                        
                                                        @if ($errors->has('foto'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('foto') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                 Publicar 
                                </button>
                            </div>
                        </div>
                      
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
