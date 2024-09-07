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

    public function calcularExer6(Request $request) {
        $celsius = (int) $request->input('celsius');
        $fahrenheit = ($celsius * 9/5) + 32;
    
        // Armazenando o resultado na sessão
        return redirect()->back()->with('resultado',"Temperatura em Fahrenheit: $fahrenheit");
    }
    
    

    public function mostrarExer7(){
        return view("exer7");
    }

    public function mostrarExer8(){
        return view("exer8");
    }


    public function mostrarExer9(){
        return view("exer9");
    }


    public function mostrarExer10(){
        return view("exer10");
    }


    public function mostrarExer11(){
        return view("exer11");
    }


    public function mostrarExer12(){
        return view("exer12");
    }


    public function mostrarExer13(){
        return view("exer13");
    }


    public function mostrarExer14(){
        return view("exer14");
    }


    public function mostrarExer15(){
        return view("exer15");
    }


    public function mostrarExer16(){
        return view("exer16");
    }


    public function mostrarExer17(){
        return view("exer17");
    }


    public function mostrarExer18(){
        return view("exer18");
    }


    public function mostrarExer19(){
        return view("exer19");
    }


    public function mostrarExer20(){
        return view("exer20");
    }
}
