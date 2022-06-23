<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Produto;
use App\Models\Venda;
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

    public function deletar($codigo){
        $venda = Venda::where("produto", $codigo)->get()->first();

        if($venda){
            Session::flash('message',
                           'Falha ao deletar produto. Há registros de venda relacionados ao produto e portanto o mesmo não pode ser removido!');
        }else{
            Produto::where("codigo", $codigo)->delete();
            
        }
        return redirect(route("produto.listagem"));
    }

    public function inserir() {
        if(view()->exists('produto.cadastro')) {
            return view('produto.cadastro');
        } else {
            return 'Página não encontrada';
        }
    }

    public function create(Request $request){
        Produto::create($request->except("_token"));
        return redirect(route("produto.listagem"));
    }
}
