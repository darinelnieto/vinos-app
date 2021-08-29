@extends('VendedorPV.plantillaVP.plantilla')
@section('mainTiendaPV')
    <meta name="csrf-token" content="{{ csrf_token() }}"></meta>
    <div class="mensaje" id="mensaje">
        <div class="row">
            <div class="col-6 offset-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
                <div class="card text-center">
                    <div class="card-body">
                        <p><strong>Se ha registrado el cuadre de caja con éxito.</strong></p>
                        <p>¡ Ya puedes cerrar sesión !</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('relaciona.day.working')}}" class="cierraMensaje btn btn-dark">Entendido</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="formularioCuadreCaja">
            <div class="row">
                <div class="col-12 col-lg-12 col-xl-12">
                    <div class="datosfecha">
                        <h4>Fecha: <span class="fechaHeader"></span></h4>
                        <h4>Hora: <span class="horaHeader"></span></h4>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <h4 class="tituloCuadreCaja">Cuadre de caja</h4>
                </div>
                @include('VendedorPV.plantillaVP.formularioCuadreFinalTurno')
            </div>
        </div>
    </section>
    <script src="{{asset('js/cuadreCaja.js')}}"></script>
@endsection