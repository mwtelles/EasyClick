<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComentariosCurtida extends Model
{
    use HasFactory;

    protected $fillable = ['comentario_id','user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comentario(){
        return $this->belongsTo(Comentario::class);
    }
}
