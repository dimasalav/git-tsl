@extends('layouts.template')
@section('title-block','Авторизация')
@section('body-class','d-flex flex-column min-vh-100')
@section('content')
<!--------Форма Авторизации----------------------------------------------------->
<div class="container flex-grow-1">
    <div class="row my-3">
        <div class="col-12 col-sm-12 col-md-6 offset-md-3">
            <div class="card mb-5">
                    <div class="card-body"> 
    	               <h3 class="mb-3 text-center">Вход</h3>
                    <form action="{{route('user.login')}}" method="post">
            	       @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label required">E-mail</label>  
                        <input type="text" class="form-control" name="email" id="email"  placeholder="Введите свой e-mail">
                        @error('email')
						  <div class="alert alert-danger">{{$message}}</div>
					   @enderror
                    </div> 
                    <div>  
                        <label for="password" class="form-label required">Пароль</label>  
                        <!--<input type="password" class="form-control" name="password" id="inputPassword" placeholder="Введите свой пароль">-->
                    </div>   
                    <div class="input-group mb-3">
                        <div class="input-group-text" onclick="togglePassword()"><i id="icon" class="bi bi-eye-slash-fill" style="font-size: 1rem;"></i></div>
                        <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Введите свой пароль" aria-label="Введите свой пароль" aria-describedby="icon">
                    </div>
                    <button type="submit" class="btn btn-primary w-25 d-block mx-auto">Войти</button>
                    <p class="form-text mb-2">
                         У вас нет аккаунта?-<a href="{{route('user.registration')}}">Зарегистриуйтесь</a>
                    </p>    
                
                    </form>
                </div>
             </div>
        </div>
    </div>       
</div>
@endsection
@push('js-block')
	<script src="{{asset('js/password.js')}}"></script>
@endpush