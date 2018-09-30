@extends('layouts.app')

@section('content')
<div class="wrapper">
		<div class="header " style="min-height:500px;background-image:url('/{{ $data->foto }}');background-size:cover;"></div>

		<div class="main main-raised">
			<div class="profile-content">
	            <div class="container "><Br>
                    <div class="text-center"> <i class="fas fa-calendar-alt" style="font-size:40px"></i> <h2>{{ $data->titulo }}</h2></div>
<hr>

                       
                   
                    <div class="row">
                        <div class="col-sm-4">
                                <b>FECHA Y HORA :</b>
                                <BR> {{ $data->fecha }} {{ $data->hora }}
                                    <BR><br>
                                        <b>UBICACION :</b>
                                        <BR> {{ $data->ubicacion }}
                        </div>
                        <div class="col-sm-8">
                            <b>DESCRIPCION :</b>
                            <BR> {{ $data->descripcion }}
                            </div>
                           
                    </div>
                    <br>
                    <div class="text-center">

                <a href="{{ $data->link }}" class="btn btn-primary btn-lg">ANOTARME</a>
</div>
<Br><br><br>
	            </div></div></div>
	             
					
    @endsection