@extends('layouts.template')
@section('title-block','Мой Профиль')
@section('body-class','d-flex flex-column min-vh-100')
@section('content')
<div class="container flex-grow-1">
        <div class="row mt-4">
        </div>
        <div class="row mt-4 mb-5">
            <div class="col-12">       
                <div class="card text-center mx-auto" style="width: 18rem;">
                    <!--<img src="" class="card-img-top" alt="">-->
                    <div class="card-header">
                        <h4 class="card-title">Мой профиль</h4>
                    </div>
                    <div class="card-body">
                    	
                        <h5 class="card-title">Имя: <span class="text-primary">
                        		{{ $user->name }}
                        </span></h5>
                        
                        <h5 class="card-title">Логин: <span class="text-primary">
                                {{ $user->login }}
                        </span></h5>

                        <h5 class="card-title">E-mail: <span class="text-primary">
                                {{ $user->email }}
                        </span></h5>

                        <h5 class="card-title">Дата регистрации: <span class="text-primary">
                                {{ $user->created_at }}
                        </span></h5>
                        
                    </div>
                    <div class="card-footer">
                        <a href="{{route('user.logout')}}" class="btn btn-primary">Выход</a>
                    </div>
                </div>
             </div> 
       </div>       
  </div>
	
@endsection