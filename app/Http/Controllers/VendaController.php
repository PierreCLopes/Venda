<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Venda;
use Log;

class VendaController extends Controller
{
    public function listagem() {
        DB::connection()->enableQueryLog();
        
        if (view()->exists('venda.listagem')) {
            $venda = Venda::all();
            Log::info(
                DB::getQueryLog()
            );
        
            return view('venda.listagem', 
            ['venda' => $venda]);
        } else {
            return 'Página não encontrada.';
        }        
    }

    public function editar($codigo){
        if(view()->exists('venda.editar')) {
            $venda = Venda::where("codigo", $codigo)->get()->first();

            return view('venda.editar', [
                'venda' => $venda
            ]);
        } else {
            return 'Página não encontrada';
        }
    }

    public function update(Request $request, $codigo){
        Venda::where("codigo", $codigo)->update($request->except("_token"));
        return redirect(route("venda.listagem"));
    }
}
