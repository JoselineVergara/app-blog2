<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\support\Facades\Hash;
use Illuminate\support\Facades\Auth;

class administrarAutenticacion extends Controller
{
    //
    public function register(Request $request){
        //validar

        $user = new User();
        $user->name= $request->name;
        $user->email= $request->email;
        $user->password= Hash::make($request->password);

        $user->save();

        Auth::login($user);
        return redirect(route('restaurantes.index'));

    }
    public function login(Request $request){
        //validacion
        $credenciales=[
            'email'=> $request->email,
            'password'=> $request->password,
        ];

        $remember = ($request->has('remember') ? true : false);

        if(Auth::attempt($credenciales,$remember)){
            $request->session()->regenerate();
            return redirect('restaurantes.index');
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
