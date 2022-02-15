<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;
    // Corrige o pradrão de nomeação de tabelas do ELOQUENT
    protected $table = 'fornecedores';
    protected $fillable = ['nome', 'site', 'email', 'uf', 'email'];
}
