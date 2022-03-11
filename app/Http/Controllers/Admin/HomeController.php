<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\User;
use App\Models\Visualizacao;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['visualizacoes_hoje'] = Visualizacao::hoje()->count();
        $data['visualizacoes_ontem']= Visualizacao::ontem()->count();
        $data['categorias']= Categoria::getAtivos()->get();
        $data['categorias_hoje'] = Categoria::hoje()->count();
        $data['categorias_ontem']= Categoria::ontem()->count();
        $data['usuarios_hoje'] = User::hoje()->count();
        $data['usuarios_ontem']= User::ontem()->count();
        $data['videos_visualizados_recentemente']= Visualizacao::orderBy('created_at','desc')->limit(5)->get();
        $data['videos_mais_visualizados']= Visualizacao::select(['video_id'])->groupBy('video_id')->limit(5)->get();
        return view('admin.home',$data);
    }
}
