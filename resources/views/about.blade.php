@extends('layouts.template')
@section('title-block','О Сайте')
@section('body-class','d-flex flex-column min-vh-100')
@section('content')
<!--------Информация о сайте----------------------------------------------------->
 
 <div class="container flex-grow-1 my-5">
    <div class="card mb-3">
        <div class="row g-0">
               <div class="col-md-4">
                   <img src="{{asset('img/myfoto.jpg')}}" class="img-fluid rounded-start" alt="">
               </div>

               <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title text-center">Информация о сайте</h5>
                        <p class="card-text" style="text-indent:3%;">
                            Приветствую! Мое имя Дмитрий, и я увлекаюсь созданием веб-сайтов!
                        </p>
                        <p class="card-text" style="text-indent:3%; margin-bottom:30px;">
                             Данный сайт построен с помощью технологий html 5, css 3, Bootstrap 5, PHP-фреймворка Laravel и JavaScript.
                             Благодаря использованию Bootstrap сетки, данный сайт полностью адаптивен к любым мобильным и десктопным устройствам.
                        </p>                        
                        <h5>Контакты для связи со мной</h5>
                        <span class="card-text text-primary"><i class="bi bi-envelope-at-fill" style="font-size: 18px;"></i>&nbsp;&nbsp;<a href="mailto:dima_salav3@mail.ru" class="link-primary">dima_salav3@mail.ru</a></span><br>
                        <span class="card-text text-primary"><i class="bi bi-envelope-at-fill" style="font-size: 18px;"></i>&nbsp;&nbsp;<a href="mailto:dmitrijk53530@gmail.com" class="link-primary">dmitrijk53530@gmail.com</a></span><br>
                        <span class="card-text text-primary"><i class="fa-brands fa-vk" style="font-size: 20px;"></i>&nbsp;&nbsp;<a href="https://vk.com/id516226489" target="_blank" class="link-primary">@id516226489</a></span>
                    </div>
               </div>
        </div>       

    </div>
</div>
@endsection