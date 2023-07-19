@extends('layouts.template')
@section('title-block','Регистрация')
@section('body-class','d-flex flex-column min-vh-100')
@section('content')
<!----------Форма Регистрации----------------------------------------------------->
     <div class="container flex-grow-1">        
         <div class="row my-4"> 
            <div class="col-12 col-sm-12 col-md-6 offset-md-3">
                <div class="card mb-5">
                    <div class="card-body">    
         		     <h3 class="mb-4 text-center">Регистрация</h3>
                        <form action="{{route('user.save')}}" method="post">
                    	 @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label required">ФИО</label>  
                                <input type="text" class="form-control" id="name" name="name" placeholder="Введите свое полное имя">
                                @error('name')
								<div class="alert alert-danger">{{$message}}</div>
								@enderror
                            </div>  
                            <div class="mb-3"> 
                                <label for="login" class="form-label required">Логин</label>  
                                <input type="text" class="form-control" id="login" aria-describedby="loginHelpBlock" name="login" placeholder="Введите свой логин">
                                <div id="loginHelpBlock" class="form-text">Ваш логин должен состоять из не менее 4 символов.</div>
                                @error('login')
								<div class="alert alert-danger">{{$message}}</div>
								@enderror
                            </div>  
                            <div class="mb-3"> 
                                <label for="email" class="form-label required">Почта</label>  
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Введите адрес своей почты">
                                <div id="emailHelp" class="form-text">Мы никогда никому не передадим вашу электронную почту.</div>
                                @error('email')
								<div class="alert alert-danger">{{$message}}</div>
								@enderror
                            </div>
                            <!--<div class="mb-3">
                                <label for="inputImg" class="form-label">Изображение профиля</label>  
                                <input type="file"  id="inputIMg" name="avatar">
                                
                            </div>-->
                            <div class="mb-3">
                                <label for="password" class="form-label required">Пароль</label>  
                                <input type="password" id="password" class="form-control" aria-describedby="passwordHelpBlock" name="password" placeholder="Введите пароль">
                                <div id="passwordHelbBlock" class="form-text">Ваш пароль должен состоять из 4-20 символов.</div>
                                @error('password')
								<div class="alert alert-danger">{{$message}}</div>
								@enderror
                            </div>  
                            <div class="mt-3 mb-4">
                                <label for="passwordc_confirm" class="form-label required">Потверждение пароля</label>  
                                <input type="password" id="password_confirm" class="form-control" name="password_confirmation" placeholder="Подтвердите пароль">
                            </div>    
                                <button type="submit" class="btn btn-primary mx-auto d-block">Зарегистрироваться</button>
                                <p class="form-text mb-2">
                                    У вас уже есть аккаунт?-<a href="{{route('user.login')}}">Авторизируйтесь</a>
                                </p>                                                      
                            </form>
                        </div>
                    </div>
                </div>
            </div>
     </div>

@endsection