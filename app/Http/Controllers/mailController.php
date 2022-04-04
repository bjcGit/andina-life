<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mailController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        //
        $request->validate([
            'name' => ['required', 'alpha', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => 'required',
            'message' => 'required',
        ], [
            'name.required' => 'El nombre es requerido',
            'email.required' => 'El servicio es obligatorio',
            'name.alpha' => 'El nombre solo deben ser letras',
            'email.email' => 'Correo no valido',
            'phone' => 'Es requerido el teléfono',
            'message' => 'El mensaje es necesario',
        ]);

        dd($request->all());
        $details = [
            'title' => 'Bienvenido ' . $request->name,
            'body' => 'Oficialmente ya eres parte de Vita Salud IPS. Queremos informarte que ingresamos todos 
            tus datos en nuestro sistema. Ahora puedes empezar a realizar todas las acciones necesarias
            de acuerdo a tu rol en nuestro sistema. Tus credenciales para ingresar al portal son
            los siguientes: ',
            'usuario' => 'Usuario: ' . $request['email']

        ];
        
        Mail::to($request['email'])->send(new \App\Mail\MyUserMail($details));
        
        return redirect()->route('users.home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
