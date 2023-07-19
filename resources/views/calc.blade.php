@extends('layouts.template')
@section('title-block','Калькулятор')
@section('body-class','d-flex flex-column min-vh-100')
@section('content')
<!--------Форма Авторизации----------------------------------------------------->
  <div class="container flex-grow-1">
            <div class="row my-3">
                  <div class="col-12 text-center">
                       <h3>Калькулятор расчета стоимости товара</h3>
                  </div>
            </div>
            <div class="row gx-5 my-4">
                   <div class="col-sm-12 col-md-6 mb-3">
                       <label for="quan" class="form-label">Количество товара:</label>
                       <input type="number" class="form-control" id="quan" value="10" placeholder="" title="Количество товара" min="10" max="1000" autofocus>
                       <input class="form-range" id="range" type="range" value="10" min="10" max="1000">
                   </div>
                   <div class="col-sm-12 col-md-6 mt-3">
                            <div class=" border border-2 p-2">
                                
                                    <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="promo" value="0.1" />
                                            <label for="promo" class="form-check-label">Скидка по промокоду: &nbsp -10% к стоимости</label>
                                    </div>
                                    <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="bonus" value="0.15"/>
                                            <label for="bonus" class="form-check-label">Скидка по бонусной карте: &nbsp -15% к стоимости</label>
                                    </div>
                            </div> 
                            
                            <div class=" border border-2 p-2">
                                    <div class="form-check">
                                          <input class="form-check-input" id="smv" type="radio" name="dost" value="1" checked/>
                                          <label class="form-check-label" for="smv">Самовывоз </label>
                                    </div>
                                    <div class="form-check">
                                          <input class="form-check-input" id="dost" type="radio" name="dost" value="1.1" />
                                          <label class="form-check-label" for="dost" >Доставка:&nbsp +10% к стоимости  </label>
                                    </div>
                            </div>
                    </div>
                                    
            </div>
            <div class="row gx-5 my-5">
                   <div class="col-sm-12 col-md-6 mb-3">
                        <label for="stoimost" class="form-label" >Полная стоимость с учетом скидок и доставки:</label>
                        <input class="form-control" id="stoimost" name="stoimost" type="number" value="0" readonly="readonly">
                   </div>

                   <div class="col-sm-12 col-md-6 mt-3">
                         <div class="border border-2 p-2">
                               <form action="{{route('calc.store')}}" method="POST">
                                @csrf
      			                    <h5>Заказать доставку товара</h5>
                                    @if (session('status')) 
                                    <div class="alert alert-success">
                                        {{session('status')}}
                                    </div>
                                         @endif

                                        <div class="input-group my-3">
                                            <span  class="input-group-text">Введите ваше имя</span>
                                            <input type="text" class="form-control" id="" name="user_name" placeholder="Например, Иван">
                                            @error('user_name')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>
      		                            
                                        <div class="input-group my-3">
      				                        <span  class="input-group-text">Введите номер телефона</span>
      				                        <input type="text" class="form-control" id="" name="user_phone" placeholder="+7 (999) 99 99 999">
                                            @error('user_phone')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
      			                        </div>
                                     
      		
                                        <div class="input-group my-3">
                                            <span  class="input-group-text">Введите email</span>
                                            <input type="text" class="form-control" id="" name="user_email" placeholder="mail@mail.ru">
                                            @error('user_email')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>
      		
      			                        <button type="submit" class="btn btn-primary d-block  mx-auto">Заказать</button>
      		                    </form>
                         </div>
                   </div>

            </div>
  </div>
  
@endsection
@push('js-block')
	<script src="{{asset('js/calc.js')}}"></script>
@endpush