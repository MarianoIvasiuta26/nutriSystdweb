<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function register(Request $request){
        //Validar datos

        $user = new User();

        $user->tipo_usuario = $request->tipo_usuario;
        $user->dni = $request->dni;
        $user->nombre = $request->nombre;
        $user->apellido = $request->apellido;
        $user->email = $request->email;
        $user->telefono = $request->telefono;
        $user->password = Hash::make($request->password);

        $user->save();

        Auth::login($user);
        return redirect(route('login'));

    }

    public function login(Request $request){

        $credentials = [
            "email" => $request->email,
            "password" => $request->password,
        ];

        $remember = ($request->has('remember') ? true : false);

        if(Auth::attempt($credentials, $remember)){
                $request->session()->regenerate();

                return redirect()->intended(route('home'));
        }else{
            return redirect('login');
        }

    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }



}
