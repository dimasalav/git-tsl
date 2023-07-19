<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store (Request $request) {

        $validateFields=$request->validate([ // Валидация
            'user_name'=>['required','string'],
            'user_phone'=>['required','string'],
            'user_email'=>['required','email'],            
            
        ]);
        
        return redirect()->back()->with('status','Ваш заказ принят');
    }
}
