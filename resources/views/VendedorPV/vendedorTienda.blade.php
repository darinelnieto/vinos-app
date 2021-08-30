@extends('VendedorPV.plantillaVP.plantilla')
@section('mainTiendaPV')
<meta name="csrf-token" content="{{ csrf_token() }}"></meta>
<div class="mensaje">
    <div class="row">
        <div class="col-6 offset-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
            <div class="card text-center">
                <div class="card-body">
                    <p>{{ $mensajeInicial }}</p>
                    <p><strong>{{ $mensajeInicioDos }}</strong></p>
                </div>
                <div class="card-footer">
                    <a href="" class="cierraMensaje btn btn-dark">Iniciar turno</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-xl-12 contenido mt-4">
            <div class="formControlador mt-3">
                <form class="select">
                    <div class="selert">
                        <select name="selecciona" class="selectorMetodo">
                            <option value="escanner" class="optionsMethod">Escaner</option>
                            <option value="nombre de producto" class="optionsMethod">Buscar por nombre de producto</option>
                        </select>
                    </div>
                    <div class="botonSelert">
                        <input type="button" class="okSelert" value="Ok">
                    </div>
                </form>
                <form action="{{route('api.productos')}}" method="GET" class="formSearchProductVenta">
                    @csrf
                    @method('GET')
                    <input type="tel" name="sku" class="listProduct">
                </form>
                <form class="cantidad">
                    <input type="number" name="cantidad" class="und" style="width:40px">
                </form>
                <a href="" class="cantidadBTN">Cantidad</a>
            </div>
            @include('VendedorPV.plantillaVP.busquedaPorNombre')
            <div class="contentTbody mt-2">
                <table>
                    <thead>
                        <tr>
                            <td width="40%" class="pl-3"><p>Nombre de producto</p></td>
                            <td width="20%"><p>SKU</p></td>
                            <td width="4%" class="text-center"><p>Cantidad</p></td>
                            <td width="13%" class="text-center"><p>Precio</p></td>
                            <td width="13%" class="text-center pr-2"><p>Total</p></td>
                            <td width="20%"></td>
                        </tr>
                    </thead>
                    <tbody class="tbodyVentas pt-3 pb-2" id="muestraProductos">
                    
                    </tbody>
                </table>
            </div>
            <div class="pieTabla">
                <div class="btnCotrolaTabla">
                    <a href="#" class="cancelarVenta">Cancelar vanta</a>
                    <a href="#" class="botonFinalizaCompra" data-toggle="modal" data-target="#modalFinCompra">Finalizar compra</a>
                </div>
                <div class="tfooter"></div>
                @include('VendedorPV.plantillaVP.finalizaVentaEfectivo')
            </div>
            @include('VendedorPV.plantillaVP.formFinalVenta')
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
    $('.botonFinalizaCompra').on('click', function(e){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url:'orden/nueva',
            method:'get',
            data:{
                user_id:{{Auth::user()->id}}
            }
        });
        e.preventDefault();
    });
    $('.cierraMensaje').on('click', function(e){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url:'relaciona/working/day',
            method:'get',
            data:{
                id:{{Auth::user()->id}}
            }
        });
        e.preventDefault();
    });
</script>
@endsection