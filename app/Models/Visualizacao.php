<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visualizacao extends Model
{
    use HasFactory;
    protected $table = 'visualizacoes';
    protected $with = ['video'];
    protected $fillable = ['user_id'];

    public function video(){
        return $this->belongsTo(Video::class);
    }

    public function scopeHoje($query){
        return $query->whereDate('created_at',Carbon::now());
    }

    public function scopeOntem($query){
        return $query->whereDate('created_at',Carbon::now()->subDay());
    }
}
