<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $table = 'vendas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'codigo',
        'cliente',
        'produto',
        'quantidade',
        'valorunitario',
        'valortotal',
        'descricao'
    ];

    public function clientes() {
        return $this->belongsTo(Cliente::class);
    }

    public function produto() {
        return $this->belongsTo(Produto::class);
    }
}
