<?php

namespace App\Http\Controllers;

use App\Models\User; // Подключаем модель User
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;// Подключает фасад Auth

class RegisterController extends Controller
{

    public function index() {

        if(Auth::check()) {
            return redirect(route('user.profile'));
        }
        return view('user.registration');
    }
    
    public function save(Request $request) {

        if(Auth::check()) {
        return redirect(route('user.profile')); // Если пользователь уже авторизован то редиректим его на страницу профиля
        }

        $validateFields=$request->validate([ // Валидация
            'name'=>['required', 'string'],
            'login'=>['required','string','min:4'],
            'email'=>['required','email'],
            'password'=>['required','min:4','max:20','confirmed'],
            
        ]);


        // Проверяем на наличие пользователя с таким email в базе и если такой пользователь уже существует выдаем ошибку
        if(User::where('email',$validateFields['email'])->exists()) {
            return redirect(route('user.registration'))->withErrors(
            [
                'email'=>'Такой пользователь уже зарегистрирован'
            ]
        ); }

                      
        $user=User::create($validateFields);

        //если пользователь создался
        if($user) {
            Auth::login($user); // Используем фасад Auth            
            //auth()->login($user);
            //return redirect()->to(route('user.profile'));
            return redirect(route('user.profile'));// После аутенфикации перенаправляемся на страницу профиля

        }
            //если пользователя нет то возвращаем ошибку
            return redirect(route('user.login'))->withErrors(
            [
                'formError'=>'Произошла ошибка при сохранении пользователя'
            ]
        );
        
    }
}
