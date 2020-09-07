<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{

    public function index()
    {
        return Usuario::all();
    }
 
    public function store(Request $request)
    {
        Usuario::create($request->all());
    }

    public function saldo(Request $request){

        $usuario = Usuario::where([
            ['conta', '=', $request->conta],
            ['senha', '=', $request->senha]
        ])->first();

        if(!$usuario){
            return ["message"=>"Não foi possível realizar a consulta do saldo.", "Erro:"=>$usuario];
        }
        return $usuario->saldo; 
       }

    public function saque(Request $request){
        
        if(!is_numeric($request->valor) OR $request->valor <= 0) {
            return response('Valor incorreto.');
        }

        $usuario = Usuario::where([
            ['conta', '=', $request->conta],
            ['senha', '=', $request->senha]
        ])->first();

        if($usuario->saldo < $request->valor) {
            return response('Saldo insuficiente.');
        }

        $usuario->saldo -= $request->valor;

        $usuario->save();

        return $usuario->saldo;
    }

    public function deposito(Request $request){
        
        if(!is_numeric($request->valor) OR $request->valor <= 0) {
            return response('Valor incorreto.');
        }

        $usuario = Usuario::where([
            ['conta', '=', $request->conta]
        ])->first();

        $usuario->saldo += $request->valor;

        $usuario->save();

        return $usuario->saldo;
    }

    public function show($id)
    {
        $usuario =  Usuario::findOrFail($id);
        return $usuario;
    }

    public function update(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->update($request->all());
    }

}
