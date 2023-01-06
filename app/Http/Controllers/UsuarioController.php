<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuardarUsuarioRequest;
use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $NewUser = new Usuario();

        if($request->hasFile("image")){
            $file = $request->file("image");
            $destinatiionpath = "images/usuarios/";
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file("image")->move($destinatiionpath,$filename);
            $NewUser->foto = $destinatiionpath . $filename;

            /*$file2 = $request->file("image2");
            $destinatiionpath2 = "images/usuarios/";
            $filename2 = time() . '-' . $file2->getClientOriginalName();
            $uploadSuccess2 = $request->file("image2")->move($destinatiionpath2,$filename2);*/
        }

        $NewUser->nombre = $request->Nombre;
        $NewUser->apellido = $request->Apellido;
        $NewUser->fecha_nacimiento = $request->FN;
        $NewUser->cedula = $request->Cedula;
        $NewUser->fecha_vencimiento = $request->FV;
        $NewUser->numero_licencia = $request->NL;
        $NewUser->correo = $request->Correo;
        $NewUser->direccion = $request->Direccion;
        $NewUser->pass = $request->Pass;
        $NewUser->es_admin = $request->Es_admin;

        $NewUser->save();

        //Usuario::create($request->all());
        return response()->json([
            'res'=>true,
            'msg'=>"usuario guardado",
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Usuario::find($id);

        return $user;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = Usuario::find($id);

        if ($request->has('Nombre') == false){
            $user->nombre = $user->nombre;
        }else{
            $user->nombre = $request->Nombre;
        }

        if ($request->has('Apellido') == false){
            $user->apellido = $user->apellido;
        }else{
            $user->apellido = $request->Apellido;
        }

        if ($request->has('FN') == false){
            $user->fecha_nacimiento = $user->fecha_nacimiento;
        }else{
            $user->fecha_nacimiento = $request->FN;
        }

        if ($request->has('Cedula') == false){
            $user->cedula = $user->cedula;
        }else{
            $user->cedula = $request->Cedula;
        }

        if ($request->has('FV') == false){
            $user->fecha_vencimiento = $user->fecha_vencimiento;
        }else{
            $user->fecha_vencimiento = $request->FV;
        }

        if ($request->has('NL') == false){
            $user->numero_licencia = $user->numero_licencia;
        }else{
            $user->numero_licencia = $request->NL;
        }

        if ($request->has('Correo') == false){
            $user->correo = $user->correo;
        }else{
            $user->correo = $request->Correo;
        }

        if ($request->has('Direccion') == false){
            $user->direccion = $user->direccion;
        }else{
            $user->direccion = $request->Direccion;
        }

        if ($request->has('Pass') == false){
            $user->pass = $user->pass;
        }else{
            $user->pass = $request->Pass;
        }

        if ($request->has('Es_admin') == false){
            $user->es_admin = $user->es_admin;
        }else{
            $user->es_admin = $request->Es_admin;
        }

        $user->save();

        return response()->json([
            'res'=>true,
            'msg'=>"usuario actualizado",
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Usuario::find($id);

        $user->delete();

        return response()->json([
            'res'=>true,
            'msg'=>"usuario eliminado",
        ]);
    }
}
