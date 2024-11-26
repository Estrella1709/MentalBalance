<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Http\Requests\ValidadorRegistroG;
use App\Http\Requests\ValidadorRegistroM;


class registroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $isLoggedIn = auth()->check(); // Verifica si el usuario está autenticado
        $user = auth()->user(); // Obtiene el usuario autenticado, si existe

        if ($isLoggedIn) {
            // Renderiza la vista para usuarios autenticados con cambios
            return view('home', [
                'loggedIn' => true,
                'user' => $user
            ]);
        }

        // Renderiza la vista normal para usuarios no autenticados
        return view('home', ['loggedIn' => false]);
    }

   
    /* 
        Funciones para registro de usuario (paciente/medico)
    */
    public function create()
    {
        return view('registroG');
    }

    public function showFormMedico($user_id)
    {
        return view('registroM', compact('user_id'));
    }

    
    public function store(ValidadorRegistroG $request)
    {
        $idTipoUsuario = $request->input('user-type');

        $userId = DB::table('users')->insertGetId([
            "nombre" => $request->input('nombre'),
            "apellidoP" => $request->input('apellido_paterno'),
            "apellidoM" => $request->input('apellido_materno'),
            "email" => $request->input('email'),
            "telefono" => $request->input('telefono'),
            "fecha_nacimiento" => $request->input('fecha_nacimiento'),
            "password" => bcrypt($request->input('password')), 
            "id_tipo_usuario" => $idTipoUsuario,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        // Si el tipo de usuario es médico, redirigir al formulario de registro de médico
        if ($idTipoUsuario == 1) { // Solo si el tipo de usuario es médico
            return redirect()->route('registroM', ['user_id' => $userId]);
        }

        // Si el tipo de usuario es paciente, guardar el id del usuario en la tabla pacientes
        if ($idTipoUsuario == 2) { // Si el tipo de usuario es paciente
            DB::table('pacientes')->insert([
                'id_usuario' => $userId,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }


        // Si es otro tipo de usuario (Paciente), solo redirigir a la pantalla de inicio de sesión
        return redirect()->route('rutaInicioSesion')->with('success', 'Registro exitoso');
    }   

    // Método storeMedico para el registro del médico
    public function storeMedico(ValidadorRegistroM $request)
    {
        
        DB::table('medicos')->insert([
            'id_especialidad' => $request->input('especialidad'),
            'cedula' => $request->input('cedula_profesional'),
            'descripcion' => $request->input('descripcion'),
            'id_usuario' => $request->input('user_id'), // Asignamos el user_id
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Redirigir con mensaje de éxito
        return redirect()->route('rutaInicioSesion')->with('success', 'Registro de médico completado');
    }





    /* 
        Funciones para inicio de sesión (paciente/medico)
    */

    public function showLoginForm()
    {
        return view('inicioSesion');
    }

    // Procesar el inicio de sesión
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Intentar iniciar sesión
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/'); 
        }

        // Si fallan las credenciales
        return back()->withErrors([
            'email' => 'Las credenciales no coinciden con nuestros registros.',
        ])->onlyInput('email');
    }

    // Cerrar sesión
    public function logout(Request $request)
    {
        Auth::logout(); // Cierra la sesión del usuario
        $request->session()->invalidate(); // Invalida la sesión
        $request->session()->regenerateToken(); // Regenera el token CSRF

        return redirect('/')->with('success', 'Sesión cerrada exitosamente'); // Redirige al home
    }







    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
