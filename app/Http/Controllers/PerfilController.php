<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('perfil.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param User $perfil
     * @return Response
     */
    public function update(Request $request, User $perfil)
    {
        $validator = Validator::make($request->all(),[
            'email'=>'required|unique:users,email,'.$perfil->id,
            'name'=> 'required',
            'imagem_de_perfil'=>'image',
            'capa_canal'=>'image',
        ]);
        if($request->new_password !== null){
            if($request->passwordd !== $perfil->password){
                return redirect()->route('perfil.index')->withErrors(['password'=>'Senha atual incorreta.']);
            }
            if($request->new_password === $perfil->password){
                return redirect()->route('perfil.index')->withErrors(['password'=>'A nova senha deve ser diferente da antiga.']);
            }
            if($request->new_password === $request->confirm_new_password){
                $perfil->password = Hash::make($request->new_password);
            }else{
                return redirect()->route('perfil.index')->withErrors(['password'=>'Informe corretamente a nova senha.']);
            }
        }
        if($validator->fails()){
            return redirect()->route('perfil.index')->withErrors($validator);
        }
        if($request->hasFile('imagem_de_perfil')){
            if($perfil->profile_image){
                unlink('storage/'.$perfil->profile_image);
            }
            $perfil->profile_image = $request->file('imagem_de_perfil')->store('users/profile','public');
        }

        $perfil->fill($request->all());
        $perfil->save();
        return redirect()->back()->with('success','Dados atualizados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
