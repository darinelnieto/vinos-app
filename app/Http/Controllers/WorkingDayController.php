<?php

namespace App\Http\Controllers;

use App\WorkingDay;
use Illuminate\Http\Request;
use App\Square;

class WorkingDayController extends Controller
{
    public function create(Request $request)
    {
        if($request->ajax()){
            $diaTrabajado = new WorkingDay;
            $diaTrabajado->user_id = $request->user_id;
            $diaTrabajado->save();
        }
    }

    public function relaciona(Request $request){
        if($request->ajax()){
            $square = Square::latest('id')->first();
            $workingDay = WorkingDay::latest('id')->first();
            $workingDay->Squares()->attach($square);
        }
    }
}
