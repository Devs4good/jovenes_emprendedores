@extends('layouts.app')

@section('content')
<div class="wrapper">
		<div class="header header-filter" style="min-height:250px;"></div>

		<div class="main main-raised">
			<div class="profile-content">
	            <div class="container">
	                <div class="row text-center">
	                    <div class="profile text-center" style="margin-right:auto;margin-left:auto">
	                        <div class="avatar">
	                            <img src="/{{ $data->foto }}" class="img-circle img-responsive img-raised" style="margin:-80px auto 0 !important;max-width:160px;border-radius:60%">
	                        </div>
	                        <div class="name text-center">
	                            <h3 class="title">{{ $data->name }}</h3>
                            <h6>{{ $data->apodo }}</h6>
	                        </div>
	                    </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-sm-2">

                        </div>
                        <div class="col-sm-4 text-center">
                            <b>UBICACION :</b> {{ $data->ubicacion }}
                            </div>
                            <div class="col-sm-4 text-center">
                               <b>FECHA DE NACIMIENTO :</b> {{ $data->fecha_nacimiento }}
                                </div>
                                <div class="col-sm-2">
                            
                                    </div>
                    </div>
                    <br>
<div class="text-center">
        <b>NIVEL ACADEMICO :</b> {{ $data->nivel_academico }}
</div>
<Br><br><br>
	            </div></div></div>
	             
					
    @endsection