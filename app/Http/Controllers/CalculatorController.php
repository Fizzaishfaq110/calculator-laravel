<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function form()
    {
        return view('calculator');
    }

    public function calculate(Request $request)
    {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $operation = $request->input('operation');
        $symbol = '';
        $result = '';
    
        switch ($operation) {
            case 'addition':
                $result = $num1 + $num2;
                $symbol = '+';
                break;
            case 'subtraction':
                $result = $num1 - $num2;
                $symbol = '-';
                break;
            case 'multiplication':
                $result = $num1 * $num2;
                $symbol = '*';
                break;
            case 'division':
                if ($num2 == 0) {
                    $result = 'Cannot divide by zero';
                    $symbol = '/';
                } else {
                    $result = $num1 / $num2;
                    $symbol = '/';
                }
                break;
            default:
                $result = 'Invalid operation';
        }
    
        return view('calculator', [
            'num1' => $num1,
            'num2' => $num2,
            'operation' => $operation,
            'symbol' => $symbol,
            'result' => $result
        ]);
    }
    
}