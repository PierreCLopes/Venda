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
        //$produto = Produto::where("codigo", $codigo)->get()->first();

        //if(isset($todo->id) && !is_null($todo->id)){
       //     return view('todo-grupos.listagem', [
       //         'grupos' => TodoGrupo::get(),
       //         'error'  => "Falha ao Remover Grupo. Há registros de To-Do relacionados ao grupo e portanto o mesmo não pode ser removido. Se realmente quiser remover este grupo, remova ou altere o grupo dos registros de To-Do conflitantes."
       //     ]);
      //  } else {
            Cliente::where("codigo", $codigo)->delete();
            return redirect(route("cliente.listagem"));
       // }
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
