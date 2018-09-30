@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Verificá tu Email</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                          Se te ha enviado a tu email la confirmación
                        </div>
                    @endif

                    Revisa tu bandeja de recibidos
                    Si no te ha llegado, <a href="{{ route('verification.resend') }}">Click aca para reenviar</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
