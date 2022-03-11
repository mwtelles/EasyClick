<?php

namespace App\Models;

use App\Models\GlobalScopes\OcultarVideos;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'capa_canal'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function videos(){
        return $this->hasMany(Video::class,'users_id','id')->withoutGlobalScopes();
    }

    public function videos_canal(){
        return $this->hasMany(Video::class,'users_id','id');
    }

    public function videos_ocultos(){
        return $this->hasMany(VideosOculto::class);
    }

    public function inscritos(){
        return $this->hasMany(Inscrito::class);
    }

    public function curtidas(){
        return $this->hasMany(Curtida::class);
    }

    public function visualizados(){
        return $this->hasMany(Visualizacao::class);
    }

    public function scopeHoje($query){
        return $query->whereDate('created_at',Carbon::now());
    }

    public function scopeOntem($query){
        return $query->whereDate('created_at',Carbon::now()->subDay());
    }

    /**
     * @return string
     */
    public function getImagemPerfilAttribute(){
        $profile_image = $this->profile_image;
        if(!$profile_image){
            return '/temp/frontend/images/user/default.png';
        }
        return Storage::url($profile_image);
    }

    /**
     * @return string
     */
    public function getCapaCanalSrcAttribute(){
        $capa_canal = $this->capa_canal;
        if(!$capa_canal){
            return '/temp/frontend/images/slider/slider1.jpg';
        }
        return Storage::url($capa_canal);

    }
}
