<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;// Подключает фасад Auth

class LoginController extends Controller
{

    public function index() {

        if(Auth::check()) {
            return redirect(route('user.profile'));
        }
        return view('user.login');
    }

    public function login(Request $request) {

        if(Auth::check()) {
        return redirect(route('user.profile')); // Если пользователь уже авторизован то редиректим его на страницу профиля
        }


        //Записываем в эту переменную только поля email и password
        $formFields=$request->only(['email','password']);

        // Делаем аутенфикацию с помощью встроенной функции atempt
        if(Auth::attempt($formFields)) {
            return redirect()->intended(route('user.profile'));// Если аутенфикация прошла успешно то направляемся на страницу профиля
        }

        // Если аутенфикация не прошла, то возвращаемся на страницу входа с ошибкой
        return redirect(route('user.login'))->withErrors([
            'email'=>'Не удалось авторизоваться'
        ]);

        
    }
}
