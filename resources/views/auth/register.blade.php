@extends('layouts.app')

@section('content')
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-header">Registro</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre y Apellido</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmar Contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                     

                        <div class="form-group row">
                            <label for="apodo" class="col-md-4 col-form-label text-md-right">Nombre de Usuario</label>

                            <div class="col-md-6">
                                <input id="apodo" type="text" class="form-control{{ $errors->has('apodo') ? ' is-invalid' : '' }}" name="apodo" value="{{ old('apodo') }}" required>

                                @if ($errors->has('apodo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('apodo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ubicacion" class="col-md-4 col-form-label text-md-right">Provincia</label>

                            <div class="col-md-6">
                                <select id="ubicacion" class="form-control{{ $errors->has('ubicacion') ? ' is-invalid' : '' }}" name="ubicacion" value="{{ old('ubicacion') }}" required>
                                <option>Buenos Aires</option>
                                <option>Capital Federal</option>
                                <option>Catamarca</option>
                                <option>Chaco</option>
                                <option>Chubut</option>
                                <option>Cordoba</option>
                                <option>Corrientes</option>
                                <option>Entre Rios</option>
                                <option>Formosa</option>
                                <option>Jujuy</option>
                                <option>La Pampa</option>
                                <option>La Rioja</option>
                                <option>Mendoza</option>
                                <option>Misiones</option>
                                <option>Neuquen</option>
                                <option>Rio Negro</option>
                                <option>Salta</option>
                                <option>San Juan</option>
                                <option>Santa Cruz</option>
                                <option>Santa Fe</option>
                                <option>Santiago del Estero</option>
                                <option>Tierra del Fuego</option>
                                <option>Tucuman</option>
                                </select>
                                @if ($errors->has('ubicacion'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ubicacion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="fecha_nacimiento" class="col-md-4 col-form-label text-md-right">Fecha de Nacimiento</label>

                            <div class="col-md-6">
                                <input id="fecha_nacimiento" type="date" class="form-control{{ $errors->has('fecha_nacimiento') ? ' is-invalid' : '' }}" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" required>

                                @if ($errors->has('fecha_nacimiento'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fecha_nacimiento') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nivel_academico" class="col-md-4 col-form-label text-md-right">Nivel Academico</label>

                            <div class="col-md-6">
                                <select id="nivel_academico" class="form-control{{ $errors->has('nivel_academico') ? ' is-invalid' : '' }}" name="nivel_academico" value="{{ old('nivel_academico') }}" required>
                                <option>Universitario Completo</option>
                                <option>Universitario en curso</option>
                                <option>Secundario Completo</option>
                                <option>Secundario en curso</option>

                                </select>
                                @if ($errors->has('nivel_academico'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nivel_academico') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="foto" class="col-md-4 col-form-label text-md-right">Foto</label>

                            <div class="col-md-6">
                                <input id="profile_picture" type="file" class="{{ $errors->has('profile_picture') ? ' is-invalid' : '' }}" name="profile_picture" value="{{ old('profile_picture') }}" required>

                                @if ($errors->has('profile_picture'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('profile_picture') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                  Registrarme
                                </button>
                            </div>
                        </div>
                        <a href="{{ url('auth/redirect/google') }}">Registrarse con Google</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
