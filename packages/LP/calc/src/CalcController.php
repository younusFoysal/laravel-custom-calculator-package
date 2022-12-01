<?php


namespace LP\Calc;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CalcController extends Controller
{

    public function add($a, $b){
        $result = $a + $b;
        return view('calc::add', compact('result'));
    }

    public function subtract($a, $b){
        $result = $a - $b;
        return view('calc::subtract', compact('result'));
    }
}
