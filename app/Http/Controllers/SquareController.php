<?php

namespace App\Http\Controllers;

use App\Square;
use Illuminate\Http\Request;
use App\WorkingDay;
use App\Order;

class SquareController extends Controller
{
    public function create(Request $request)
    {
        $cuadre = new Square;

        $cuadre->data = $request->data;
        $cuadre->time = $request->time;
        $cuadre->fifty = $request->fifty;
        $cuadre->oneHundred = $request->oneHundred;
        $cuadre->twoHundred = $request->twoHundred;
        $cuadre->fiveHundred = $request->fiveHundred;
        $cuadre->thousandCoins = $request->thousandCoins;
        $cuadre->thousand = $request->thousand;
        $cuadre->twoThousand = $request->twoThousand;
        $cuadre->fiveThousand = $request->fiveThousand;
        $cuadre->tenThousand = $request->tenThousand;
        $cuadre->twentyThousand = $request->twentyThousand;
        $cuadre->fiftyThousand = $request->fiftyThousand;
        $cuadre->hundredThousand = $request->hundredThousand;
        if($request->fifty == ''){
            $request->fifty = 0;
            $cuadre->fifty = $request->fifty;
            $cuadre->save();
        }else if($request->oneHundred == ''){
            $request->oneHundred = 0;
            $cuadre->oneHundred = $request->oneHundred;
            $cuadre->save();
        }else if($request->twoHundred == ''){
            $request->twoHundred = 0;
            $cuadre->twoHundred = $request->twoHundred;
            $cuadre->save();
        }
        else if($request->fiveHundred == ''){
            $request->fiveHundred = 0;
            $cuadre->fiveHundred = $request->fiveHundred;
            $cuadre->save();
        }else if($request->thousandCoins == ''){
            $request->thousandCoins = 0;
            $cuadre->thousandCoins = $request->thousandCoins;
            $cuadre->save();
        }else if($request->thousand == ''){
            $request->thousand = 0;
            $cuadre->thousand = $request->thousand;
            $cuadre->save();
        }
        else if($request->twoThousand == ''){
            $request->twoThousand = 0;
            $cuadre->twoThousand = $request->twoThousand;
            $cuadre->save();
        }else if($request->fiveThousand == ''){
            $request->fiveThousand = 0;
            $cuadre->fiveThousand = $request->fiveThousand;
            $cuadre->save();
        }else if($request->tenThousand == ''){
            $request->tenThousand = 0;
            $cuadre->tenThousand = $request->tenThousand;
            $cuadre->save();
        }else if($request->twentyThousand == ''){
            $request->twentyThousand = 0;
            $cuadre->twentyThousand = $request->twentyThousand;
            $cuadre->save();
        }else if($request->fiftyThousand == ''){
            $request->fiftyThousand = 0;
            $cuadre->fiftyThousand = $request->fiftyThousand;
            $cuadre->save();
        }else if($request->hundredThousand == ''){
            $request->hundredThousand = 0;
            $cuadre->hundredThousand = $request->hundredThousand;
            $cuadre->save();
        }else{
            $cuadre->save();
        }
        if($cuadre->save()){
            $mensajeInicial = "Hola tu cuadre de caja inicial se registro éxitosamente.";
            $mensajeInicioDos = "Te deseamos un excelente turno laboral.";
            $mensajeFinalTurno = "Hola tu cuadre de caja inicial se registro éxitosamente";
            $mensajeFinalDos = "Que te valla  bien.";
            return view('VendedorPV/vendedorTienda', compact('mensajeInicial', 'mensajeInicioDos', 'mensajeFinalTurno', 'mensajeFinalDos'));
        }
        
    }
    public function vista(){
        return view('VendedorPV/formcuadreCaja');
    }
}
