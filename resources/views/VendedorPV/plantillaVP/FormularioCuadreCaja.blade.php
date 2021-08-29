<div class="col-sm-12 col-lg-12 col-xl-12 fondoFormularioCuadreCaja">
    <form action="{{route('cuadre.inicial')}}" method="post" class="cuadreDeCaja">
        @csrf
        @method('post')
        <input type="hidden" name="data" class="fecha">
        <input type="hidden" name="time" class="hora">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                <table>
                    <thead class="theadFormCuadreCaja">
                        <tr>
                            <td>Monedas</td>
                            <td>Unidades</td>
                            <td>Total</td>
                        </tr>
                    </thead>
                    <tbody class="tbodyFomCuadreCaja">
                        <tr>
                            <td class="unidadCuadre pt-3">$ 1000 <input type="hidden" value="1000"></td>
                            <td class="pt-3"><input type="number" name="thousand" class="unidadCuadre"></td>
                            <td class="totalCuadre pt-3">00</td>
                        </tr>
                        <tr>
                            <td>$ 2000 <input type="hidden" value="2000"></td>
                            <td><input type="number" name="twoThousand" class="unidadCuadre"></td>
                            <td class="totalCuadre">00</td>
                        </tr>
                        <tr>
                            <td>$ 5000 <input type="hidden" value="5000"></td>
                            <td><input type="number" name="fiveThousand" class="unidadCuadre"></td>
                            <td class="totalCuadre">00</td>
                        </tr>
                        <tr>
                            <td>$ 10000 <input type="hidden" value="10000"></td>
                            <td><input type="number" name="tenThousand" class="unidadCuadre"></td>
                            <td class="totalCuadre">00</td>
                        </tr>
                        <tr>
                            <td>$ 20000 <input type="hidden" value="20000"></td>
                            <td><input type="number" name="twentyThousand" class="unidadCuadre"></td>
                            <td class="totalCuadre">00</td>
                        </tr>
                        <tr>
                            <td>$ 50000 <input type="hidden" value="50000"></td>
                            <td><input type="number" name="fiftyThousand" class="unidadCuadre"></td>
                            <td class="totalCuadre">00</td>
                        </tr>
                        <tr>
                            <td>$ 100000 <input type="hidden" value="100000"></td>
                            <td><input type="number" name="hundredThousand" class="unidadCuadre"></td>
                            <td class="totalCuadre">00</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="totalBilletes">00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                <table>
                    <thead class="theadFormCuadreCaja">
                        <tr>
                            <td>Monedas</td>
                            <td>Unidades</td>
                            <td>Total</td>
                        </tr>
                    </thead>
                    <tbody class="tbodyFomCuadreCaja">
                        <tr>
                            <td class="pt-3">$ 50 <input type="hidden" value="50"></td>
                            <td class="pt-3"><input type="number" name="fifty" class="unidadCuadreMoneda"></td>
                            <td class="totalCuadreMonedas pt-3">00</td>
                        </tr>
                        <tr>
                            <td>$ 100 <input type="hidden" value="100"></td>
                            <td><input type="number" name="oneHundred" class="unidadCuadreMoneda"></td>
                            <td class="totalCuadreMonedas">00</td>
                        </tr>
                        <tr>
                            <td>$ 200 <input type="hidden" value="200"></td>
                            <td><input type="number" name="twoHundred" class="unidadCuadreMoneda"></td>
                            <td class="totalCuadreMonedas">00</td>
                        </tr>
                        <tr>
                            <td>$ 500 <input type="hidden" value="500"></td>
                            <td><input type="number" name="fiveHundred" class="unidadCuadreMoneda"></td>
                            <td class="totalCuadreMonedas">00</td>
                        </tr>
                        <tr>
                            <td>$ 1000 <input type="hidden" value="1000"></td>
                            <td><input type="number" name="thousandCoins" class="unidadCuadreMoneda"></td>
                            <td class="totalCuadreMonedas">00</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="totalMonedas">00</td>
                        </tr>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-4">
                        <button type="submit" class="guardar">Guardar</button>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="imprimirCuadre">Imprimir</button>
                    </div>
                    <div class="col-4">
                        <h6>total en caja $ <span class=TotalCuadreCaja>0</span></h6>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
    $('.guardar').on('click', function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url:'working/day',
            method:'get',
            data:{
                user_id:{{Auth::user()->id}}
            }
        });
    });
</script>
<script src="{{asset('js/cuadreCaja.js')}}"></script>