<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    /**
     * defire a tabela q sera mapeada
     */
    protected $table = 'series';
    use HasFactory;
    protected $fillable = ['nome'];
}
