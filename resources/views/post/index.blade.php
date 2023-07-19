@extends('layouts.template')
@section('title-block','Обратная связь')
@section('body-class','d-flex flex-column min-vh-100')
@section('content')
<div class="container flex-grow-1">
   	<div class="row mb-4">
   	   		<div class="col-12">
   			<h2 class="text-center">Обратная связь</h2>
   			@if (session('status'))	
					<div class="alert alert-success">
						{{session('status')}}
					</div>
			@endif
   		</div>		
  	</div>
  	<div class="row">	
   		<div class="col-12 col-md-6 mb-5">
   			<h5 class=" mb-3">Отзывы  о сайте</h5>

   			@foreach($posts as $post)
    		<div class="alert alert-info">
        		<h5>{{$post->subject}}</h5>
        		<p><small>{{$post->created_at}}</small></p>
        		<a class="link-primary" href="{{route('post.show', $post->id)}}">Детальнее</a>
    		</div>

			@endforeach
   		</div>


   		<div class="col-12 col-md-6 mb-5">
   			<div class="card">
   				<div class="card-body">
   				<h5 class="text-center mb-3">Здесь вы сможете оставить свой отзыв</h5>
   				<form action="{{route('post.store')}}" method="post">
				@csrf
				<div class="form-group mb-3">
					<label for="name" class="required">Введите имя</label>
					<input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
					@error('name')
						  <div class="alert alert-danger">{{$message}}</div>
					@enderror
				</div>
				<div class="form-group mb-3">
					<label for="email" class="required">Email</label>
					<input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
					@error('email')
						  <div class="alert alert-danger">{{$message}}</div>
					@enderror
				</div>

				<div class="form-group mb-3">
					<label for="subject" class="required">Тема сообщения</label>
					<input type="text" name="subject" placeholder="Тема сообщения" id="subject" class="form-control">
					@error('subject')
						  <div class="alert alert-danger">{{$message}}</div>
					@enderror
				</div>
				<div class="form-group mb-3">
					<label class="required" for="message">Сообщение</label>
					<textarea name="message" id="message" cols="" rows="5" class="form-control"></textarea>
					@error('message')
						  <div class="alert alert-danger">{{$message}}</div>
					@enderror
				</div>
				<button type="submit" class="btn btn-primary mt-3 d-block w-25 mx-auto">Отправить</button>
				</form>
				</div>
			</div>
   		</div>
   </div>
</div>
@endsection