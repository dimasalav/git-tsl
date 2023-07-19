@extends('layouts.template')
@section('title-block'){{$post->subject}}@endsection
@section('body-class','d-flex flex-column min-vh-100')
@section('content')
	<div class="container flex-grow-1">
		<div class="row">
			<div class="col-16">
			@if (session('status'))	
					<div class="alert alert-success">
						{{session('status')}}
					</div>
			@endif
			<h4>{{$post->subject}}</h4>
				<div class="alert alert-info">
			
					<p>{{$post->message}}</p>
					<p>{{$post->name}}-{{$post->email}}</p>
					<p><small>{{$post->created_at}}</small></p>	
					<a class="link-primary" href="{{route('post.edit',$post->id)}}">Редактировать</a>&nbsp&nbsp
					
					<span class="form__delete">
						<form action="{{route('post.destroy',$post->id)}}" method="post">
						@csrf
						@method('delete')
						<button  type="submit"><a class="link-danger">Удалить</a></button>
						</form>		
					</span>
				</div>
			</div>
		</div>
	</div>	
@endsection