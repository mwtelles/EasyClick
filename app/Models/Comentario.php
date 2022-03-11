<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $fillable =   ['texto','user_id','video_id'];
    protected $with     =   ['autor'];

    public function autor(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function sub_comentarios(){
        return $this->hasMany(SubComentario::class);
    }

    public function curtidas(){
        return $this->hasMany(ComentariosCurtida::class);
    }
}
