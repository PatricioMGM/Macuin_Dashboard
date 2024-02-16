<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Response;
use Illuminate\Support\Facades\Auth;


use Illuminate\Support\Facades\Session;

class loginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Obtener el usuario autenticado
            $user = Auth::user();

            // Guardar el departamento y el ID del usuario en la sesión
            Session::put('department', $user->department);
            Session::put('user_id', $user->id);

            return redirect()->intended(route('Cliente.index'));
        }

        return back()->withErrors([
            'email' => 'No se encontro el usuario o la contraseña es incorrecta.',
        ]);
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();

        // Eliminar el departamento y el ID del usuario de la sesión
        Session::forget('department');
        Session::forget('user_id');

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
