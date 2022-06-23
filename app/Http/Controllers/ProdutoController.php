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
            //dd($produtos);
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
                'produto'      => $produto
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
        //$produto = Produto::where("codigo", $codigo)->get()->first();

        //if(isset($todo->id) && !is_null($todo->id)){
       //     return view('todo-grupos.listagem', [
       //         'grupos' => TodoGrupo::get(),
       //         'error'  => "Falha ao Remover Grupo. Há registros de To-Do relacionados ao grupo e portanto o mesmo não pode ser removido. Se realmente quiser remover este grupo, remova ou altere o grupo dos registros de To-Do conflitantes."
       //     ]);
      //  } else {
            Produto::where("codigo", $codigo)->delete();
            return redirect(route("produto.listagem"));
       // }
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
