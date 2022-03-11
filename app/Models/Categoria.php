<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable = ['titulo','descricao','is_active'];
    protected $table = 'categorias';

    public function videos(){
        return $this->hasMany(Video::class,'categorias_id');
    }

    public function scopeHoje($query){
        return $query->whereDate('created_at',Carbon::now());
    }

    public function scopeOntem($query){
        return $query->whereDate('created_at',Carbon::now()->subDay());
    }

    public function scopeGetAtivos($query){
        return $query->where('is_active',true);
    }
}
