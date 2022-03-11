<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $videos = auth()->user()->videos()->when($request->order, function ($q) use ($request) {
            return $q->orderBy('created_at', $request->order);
        })->orderBy('created_at', 'DESC')->get();

        return view('videos.index', [
            'videos' => $videos,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('videos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'linguagem' => 'required',
            'duracao' => 'required',
            'ano_lancamento' => 'required',
            'video' => 'required',
            'descricao' => 'required',
            'qualidade' => 'required',
            'categorias_id' => 'required',
            'img_thumb' => 'required',
            'titulo' => 'required',
        ],
            [
                'img_thumb.required' => 'O campo Imagem de Capa é obrigatório',
                'categorias_id.required' => 'O campo categoria é obrigatório',
                'descricao.required' => 'O campo descrição é obrigatório',
                'ano_lancamento.required' => 'O campo ano de lançamento é obrigatório',
                'duracao.required' => 'O campo duração é obrigatório',
            ])->validate();
        $data = $request->all();
        $video = new Video();
        $video->fill($data);
        $video->img_thumb = $request->file('img_thumb')->store('thumbs', 'public');
        $video->video = $request->file('video')->store('videos', 'public');

        if (auth()->user()->videos()->create($video->toArray())) {
            return redirect()->route('canal.index')->with('success', 'Video cadastrado com sucesso!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Video $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $video)
    {
        $video = Video::withoutGlobalScopes()->find($video);
        $data = $request->all();

        $video->fill($data);

        if (isset($data['visibilidade'])) {
            $data['visibilidade'] = (int)$request->visibilidade;
        }
        if ($request->hasFile('img_thumb')) {
            $video->img_thumb = $request->file('img_thumb')->store('thumbs', 'public');
        }
        if ($request->hasFile('video')) {
            $video->video = $request->file('video')->store('videos', 'public');
        }

        $video->save();
        return redirect('/canal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
