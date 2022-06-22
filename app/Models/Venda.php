<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;

    public $table = 'Venda';

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
}
