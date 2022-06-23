<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Cliente;
use App\Models\Venda;
use Log;

class ClienteController extends Controller
{
    public function listagem() {
        DB::connection()->enableQueryLog();
        
        if (view()->exists('cliente.listagem')) {
            $cliente = Cliente::all();
            Log::info(
                DB::getQueryLog()
            );
        
            return view('cliente.listagem', 
            ['cliente' => $cliente]);
        } else {
            return 'Página não encontrada.';
        }        
    }

    public function editar($codigo){
        if(view()->exists('cliente.editar')) {
            $cliente = Cliente::where("codigo", $codigo)->get()->first();

            return view('cliente.editar', [
                'cliente' => $cliente
            ]); 
        } else {
            return 'Página não encontrada';
        }
    }

    public function update(Request $request, $codigo){
        Cliente::where("codigo", $codigo)->update($request->except("_token"));
        return redirect(route("cliente.listagem"));
    }

    public function deletar($codigo){
        $venda = Venda::where("cliente", $codigo)->get()->first();

        if($venda){
            Session::flash('message',
                           'Falha ao deletar cliente. Há registros de venda relacionados ao cliente e portanto o mesmo não pode ser removido!');
        } else {
            Cliente::where("codigo", $codigo)->delete();
            
        }
        return redirect(route("cliente.listagem"));
    }

    public function inserir() {
        if(view()->exists('cliente.cadastro')) {
            return view('cliente.cadastro');
        } else {
            return 'Página não encontrada';
        }
    }

    public function create(Request $request){
        Cliente::create($request->except("_token"));
        return redirect(route("cliente.listagem"));
    }
}
