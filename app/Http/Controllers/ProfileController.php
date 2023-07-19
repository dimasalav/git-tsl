<?php

namespace App\Http\Controllers;
use App\Models\User; // Подключаем модель User
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;// Подключает фасад Auth


class ProfileController extends Controller
{
    public function index() {
        //return view('profile',['user'=>Auth::user()]);
        $user=Auth::user();
        return view('user.profile', compact('user'));      
    }
}
