@extends('adiminstrador.plantilla.plantillaApp')
@section('mainAdmin')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <section>
        <div class="row">
            <div class="col-12">
                <table>
                    <thead>
                        <tr class="trHistorialCuadre">
                            <td width="7%">Fecha y hora</td>
                            <td width="4%">$ 50</td>
                            <td width="4%">$ 100</td>
                            <td width="4%">$ 200</td>
                            <td width="4%">$ 500</td>
                            <td width="5%">$ 1.000</td>
                            <td width="5%">$ 2.000</td>
                            <td width="5%">$ 5.000</td>
                            <td width="5%">$ 10.000</td>
                            <td width="5%">$ 20.000</td>
                            <td width="5%">$ 50.000</td>
                            <td width="5%">$ 100.000</td>
                        </tr>
                    </thead>
                    <tbody class="tbodyHistorial">
                        @foreach($datos as $dato)
                            <tr class="{{$dato->id}}">
                                <td>{{$dato->data}} {{$dato->time}}</td>
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
