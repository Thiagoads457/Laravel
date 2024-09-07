<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaController extends Controller
{
    public function mostrarExer1(){
        return view("exer1");
    }

    public function calcularExer1(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        return $valor1+$valor2;
    }

    public function mostrarExer2(){
        return view("exer2");
    }
    
    public function calcularExer2(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        return $valor2 - $valor1;
    }

    public function mostrarExer3(){
        return view("exer3");        
    }

    public function calcularExer3(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        $resultado = $valor1 * $valor2;
        return "Resposta: $resultado";           
    }

    public function mostrarExer4(){
        return view("exer4");
    }

    public function calcularExer4(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        if($valor2 ==0){
            return "Divisão por Zero Fera";
        }
        $resultado = $valor1 / $valor2;
        return "Resposta: $resultado";
    }

    public function mostrarExer5(){
        return view("exer5");
    }

    public function calcularExer5(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        $valor3 = (int)$request->input('valor3');
        $resultado = ($valor1 + $valor2 + $valor3) / 3;
        
        $resultadoFormatado = number_format($resultado, 2);

        return "resposta: $resultadoFormatado";       
        
    }

    public function mostrarExer6(){
        return view("exer6");
    }

    public function calcularExer6(Request $request){
        $celsius = (int)$request->input('celsius');
        $fahrenheit = ($celsius * 9/5) + 32;
        return "Temperatura em Fahrenheit: $fahrenheit";
    }
}
