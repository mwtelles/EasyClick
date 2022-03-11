<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubComentario extends Model
{
    use HasFactory;

    protected $fillable = ['texto','comentario_id','user_id','video_id'];
    protected $with = ['autor'];

    public function autor(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
