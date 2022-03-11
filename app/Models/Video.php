<?php

namespace App\Models;

use App\Models\GlobalScopes\OcultarVideos;
use App\Models\GlobalScopes\VisibilidadeVideos;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;
use phpDocumentor\Reflection\Types\Collection;

class Video extends Model
{
    use HasFactory;
    protected $fillable = ['id','titulo','descricao','users_id','ano_lancamento','linguagem','duracao','qualidade','visibilidade','categorias_id','img_thumb','video'];
    protected $table = 'videos';

    public function user(){
        return $this->belongsTo(User::class,'users_id');
    }

    public function categoria(){
        return $this->belongsTo(Categoria::class,'categorias_id');
    }

    public function visualizacoes(){
        return $this->hasMany(Visualizacao::class);
    }

    public function curtidas(){
        return $this->hasMany(Curtida::class);
    }

    public function comentarios(){
        return $this->hasMany(Comentario::class);
    }

    public function getVisibilidadeTextoAttribute(){
        return [
            0   =>  'Público',
            1   =>  'Privado'
        ][$this->visibilidade];
    }

    public function getCodeAttribute(){
        return Crypt::encryptString($this->id);
    }

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::addGlobalScope(new OcultarVideos());
        static::addGlobalScope(new VisibilidadeVideos());
    }

}
