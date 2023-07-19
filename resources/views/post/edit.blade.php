@extends('layouts.template')
@section('title-block','Редактирование')
@section('body-class','d-flex flex-column min-vh-100')
@section('content')
<!--------Форма Авторизации----------------------------------------------------->
<div class="container flex-grow-1">
    <div class="row">
        <div class="col-12 col-md-6 offset-md-3 mb-5 mt-4">
            <div class="card">
                <div class="card-body">
                <h5 class="text-center mb-3">Здесь вы сможете отредактировать отзыв</h5>
                <form action="{{route('post.update',$post->id)}}" method="post">
                @csrf
                @method('patch')
                <div class="form-group mb-3">
                    <label for="name" class="required">Введите имя</label>
                    <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control" value="{{$post->name}}">
                    @error('name')
                          <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="email" class="required">Email</label>
                    <input type="text" name="email" placeholder="Введите email" id="email" class="form-control" value="{{$post->email}}">
                    @error('email')
                          <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="subject" class="required">Тема сообщения</label>
                    <input type="text" name="subject" placeholder="Тема сообщения" id="subject" class="form-control" value="{{$post->subject}}">
                    @error('subject')
                          <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="required" for="message">Сообщение</label>
                    <textarea name="message" id="message" cols="" rows="5" class="form-control">{{$post->message}}</textarea>
                    @error('message')
                          <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mt-3 d-block w-25 mx-auto">Обновить</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
