<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Produto;
use Log;

class ProdutoController extends Controller
{
    public function listagem() {
        DB::connection()->enableQueryLog();
        
        if (view()->exists('produto.listagem')) {
            $produtos = Produto::all();
            Log::info(
                DB::getQueryLog()
            );
        
            return view('produto.listagem', 
            ['produtos' => $produtos]);
        } else {
            return 'Página não encontrada.';
        }        
    }

    public function editar($codigo){
        if(view()->exists('produto.editar')) {
            $produto = Produto::where("codigo", $codigo)->get()->first();

            return view('produto.editar', [
                'produto' => $produto
            ]);
        } else {
            return 'Página não encontrada';
        }
    }

    public function update(Request $request, $codigo){
        Produto::where("codigo", $codigo)->update($request->except("_token"));
        return redirect(route("produto.listagem"));
    }
}
