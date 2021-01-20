<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Models\user_address;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('modulos.login.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('modulos.login.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $direccion=new user_address();
        $usuario=new user();
        $fecha=Carbon::now();

        $direccion->city=$request->city;
        $direccion->location=$request->location;
        $direccion->type_housing=$request->type_housing;
        $direccion->direction=$request->direction;
        $direccion->aditional=$request->aditional;
        $direccion->save();

        $id_address=DB::table('user_address')->select('id')->where('direction',$request->direction)->first();

        $usuario->id_Address=$id_address->id;
        $usuario->id_states=1;
        $usuario->role="client";
        $usuario->date_registration=$fecha;
        $usuario->name=$request->name;
        $usuario->lastname=$request->lastname;
        $usuario->type_id=$request->type_id;
        $usuario->number_id=$request->number_id;
        $usuario->birthdate=$request->birthdate;
        $usuario->email=$request->email;
        $usuario->password=$request->password;
        $usuario->name=$request->name;
        $usuario->save();
        
        $confirm="Felicidades ya estas registrado";

        return view('index',$confirm);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {
        //
    }
}
