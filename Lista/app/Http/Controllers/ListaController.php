<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class ListaController extends Controller
{
    public function mostrarExer1(){
        return view("exer1");
    }

    public function calcularExer1(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        $resultado = $valor1 + $valor2;
    
        // Armazenando o resultado na sessão e redirecionando
        return redirect()->back()->with('resultado', "A soma de $valor1 e $valor2 é: $resultado");
    }
    

    public function mostrarExer2(){
        return view("exer2");
    }
    
    public function calcularExer2(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        $resultado = $valor1 - $valor2;

        return redirect()->back()->with('resultado', "A subtração de $valor1 e $valor2 é: $resultado");
        
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
        $resultado = ($celsius * 9/5) + 32;
    
        return redirect()->back()->with('resultado', "A Temperatura em $celsius é: $resultado º");
       
    }    
    

    public function mostrarExer7(){
        return view("exer7");
    }

    public function calcularExer7(Request $request){
        $fahrenheit = (int) $request->input('fahrenehit');
        $resultado = ($fahrenheit - 32) * 5/9;

        return redirect()->back()->with('resultado', "A Temperatura em $fahrenheit é: $resultado º");

    }

    public function mostrarExer8(){
        return view("exer8");
    }

    public function calcularExer8(Request $request){
        $valor1 = (float) $request->input('valor1');
        $valor2 = (float) $request->input('valor2');
        $resultado = $valor1 * $valor2;
        
        return redirect()->back()->with('resultado', "A área do retângulo é de $resultado ");

    }

    
    public function mostrarExer9(){
        return view("exer9");
    }

    public function calcularExer9(Request $request){
        $valor1 = (float) $request->input('valor1');
        $resultado = pi() * pow($valor1,2);

        return redirect()->back()->with('resultado', "A área do círculo é: " . round($valor1, 2) . " unidades quadradas");
        
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
