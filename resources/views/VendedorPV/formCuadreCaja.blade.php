@extends('VendedorPV.plantillaVP.plantilla')
@section('mainTiendaPV')
    <section>
        <div class="formularioCuadreCaja">
            <div class="row">
                <div class="col-12 col-lg-12 col-xl-12">
                    <div class="datosfecha">
                        <h4>Fecha: <span class="fecha"></span></h4>
                        <h4>Hora: <span class="hora"></span></h4>
                    </div>
                </div>
                @include('VendedorPV.plantillaVP.FormularioCuadreCaja')
            </div>
        </div>
    </section>
@endsection