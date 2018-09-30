@extends('layouts.app')

@section('content')
<div class="container">

        <div class="row">
                <div class="col-md-4 "></div>
                <div class="col-md-4 ">
                    <Br><br><br>
                    <div class="card card-signup">
                        <form class="form" method="POST" action="{{ route('login') }}">
                                @csrf
                            <div class="header header-primary text-center primaryback">
                                <h4>Ingresar</h4>
                                <div class="social-line">
                                    <a href="#" class="btn btn-simple btn-just-icon">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                    <a href="{{ url('auth/redirect/google') }}" class="btn btn-simple btn-just-icon">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div>
                            </div>
                           
                            <div class="content">

  <Br>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">email</i>
                                    </span>
                                    <div class="form-group"  style="margin-top:0px;width:80%"><input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" required autofocus> <span class="material-input"></span>   @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif</div>
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">lock_outline</i>
                                    </span>
                                    <div class="form-group" style="margin-top:0px;width:80%"><input type="password" name="password" placeholder="Clave" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}""><span class="material-input"></span>
                                        @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif</div>
                                </div>

                            
                           <div style="padding-left:18px">
                                <input type="checkbox" name="remember" id="remember">
                                Recuerdame
                        </div>
                                       
                                   
                            </div>
                            <div class="footer text-center">
                                <button type="submit" class="btn btn-primary primary" style="padding:12px">Ingresar</button>
                                <Br>
                                <a href="{{ route('password.request') }}" style="color:#505151">
                                       Olvide mi clave
                                    </a>
                                    <BR><br>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="col-md-4 "></div>
            </div>

    
                

                            
                   
@endsection
