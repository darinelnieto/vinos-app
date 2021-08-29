@extends('VendedorPV.plantillaVP.plantilla')
@section('mainTiendaPV')
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
                @include('VendedorPV.plantillaVP.FormularioCuadreCaja')
            </div>
        </div>
    </section>
    <script src="{{asset('js/cuadreCaja.js')}}"></script>
@endsection