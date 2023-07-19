<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">E-Shop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 top-menu">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('main')}}">Главная</a>
        </li>
        <!--<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="thank-you.php">Каталог</a>
        </li>-->
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('calc')}}">Калькулятор</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('post.index')}}">Обратная связь</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('about')}}">О Сайте</a>
        </li>
        
      </ul>

      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-current="page" href="#"><i class="bi bi-person-circle"></i></a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                
                    <li><a class="dropdown-item" href="{{route('user.registration')}}">Регистрация</a></li>
                    <li><a class="dropdown-item" href="{{route('user.login')}}">Авторизация</a></li>
                  
                    <li><a class="dropdown-item" href="{{route('user.profile')}}">Мой Профиль</a></li>
                 
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#" data-bs-toggle="modal" data-bs-target="#modal-cart"><i class="bi bi-cart"></i></a>

            <!-- Модальное окно -->
        <div class="modal fade" id="modal-cart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
              <div class="modal-header bg-secondary text-white">
              <h5 class="modal-title" id="exampleModalLabel">Корзина</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
          </div>
                <div class="modal-body">
                       <table class="table">
                          <tbody> 
                               <tr>
                                    <td><img src="{{asset('img/products/apple_cinema_30.jpg')}}" alt=""></td>
                                    <td><a href="#">Apple Cinema 30"</a></td>
                                    <td>230,99$</td>
                                    <td>1</td>
                               </tr>

                               <tr>
                                    <td><img src="{{asset('img/products/canon_eos_5d_1.jpg')}}" alt=""></td>
                                    <td><a href="#">EOS 5D</a></td>
                                    <td>230,99$</td>
                                    <td>1</td>
                               </tr>

                               <tr>
                                    <td><img src="{{asset('img/products/hp_1.jpg')}}" alt=""></td>
                                    <td><a href="#">HP</a></td>
                                    <td>230,99$</td>
                                    <td>1</td>
                               </tr>
                          </tbody>   
                       </table>
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Продолжить покупки</button>
                  <button type="button" class="btn btn-primary">Перейти к оформлению заказа</button>
              </div>
            </div>
            </div>
        </div>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-search"></i></a>
        </li>
        
    </ul>
    </div>
  </div>
</nav>