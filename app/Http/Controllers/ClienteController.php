<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente;
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

    public function editar($cliente){
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
}
