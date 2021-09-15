@extends('adiminstrador.plantilla.plantillaApp')
@section('mainAdmin')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <section>
        <div class="row">
            <div class="col-12 tableReporteCuadreCaja">
                <table id="reporteCuadreCaja">
                    <thead>
                        <tr class="trHistorialCuadre">
                            <th width="7%" class="Fecha">Fecha y hora</th>
                            <th width="4%">$ 50</th>
                            <th width="4%">$ 100</th>
                            <th width="4%">$ 200</th>
                            <th width="4%">$ 500</th>
                            <th width="5%">$ 1.000</th>
                            <th width="5%">$ 2.000</th>
                            <th width="5%">$ 5.000</th>
                            <th width="5%">$ 10.000</th>
                            <th width="5%">$ 20.000</th>
                            <th width="5%">$ 50.000</th>
                            <th width="5%">$ 100.000</th>
                        </tr>
                    </thead>
                    <tbody class="tbodyHistorial">
                            @foreach($datos as $dato)
                                <tr class="{{$dato->id}}">
                                    <td class="Fecha">{{$dato->data}} {{$dato->time}}</td>
                                    <td class="text-center">{{$dato->fifty}}</td>
                                    <td class="text-center">{{$dato->oneHundred}}</td>
                                    <td class="text-center">{{$dato->twoHundred}}</td>
                                    <td class="text-center">{{$dato->fiveHundred}}</td>
                                    <td class="milTotal{{$dato->id}} text-center"></td>
                                    <td class="text-center">{{$dato->twoThousand}}</td>
                                    <td class="text-center">{{$dato->fiveThousand}}</td>
                                    <td class="text-center">{{$dato->tenThousand}}</td>
                                    <td class="text-center">{{$dato->twentyThousand}}</td>
                                    <td class="text-center">{{$dato->fiftyThousand}}</td>
                                    <td class="text-center">{{$dato->hundredThousand}}</td>
                                </tr>
                                <script>
                                    var mil = {{$dato->thousandCoins}} + {{$dato->thousand}};
                                    $('.milTotal'+{{$dato->id}}).html(`${mil}`);
                                </script>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection