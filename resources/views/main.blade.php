@extends('layouts.template')
@section('title-block','Главная')
@section('content')
<!-----------------     SLIDER   ----------------------------------->
   <div class="container-fluid my-carousel">  
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
             <div class="carousel-indicators">
                 <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                 <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                 <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                 
                </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{asset('img/1.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{asset('img/2.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{asset('img/3.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                    
               </div>
               <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Предыдущий</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Следующий</span>
               </button>
          </div>
    </div>      
        
<!---------------------------------------------------------------->  
<section class="main-content">
    <div class="container">
        <div class="row">
           <div class="col-lg-4 col-sm-6 mb-3">
               <div class="product-card">
                        <div class="product-thumb">
                            <a href="#"><img src="{{asset('img/products/iphone_1.jpg')}}" alt=""></a>
                        </div>
                        <div class="product-details">
                                <h4><a href="#">iPhone</a></h4>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil, ducimus!</p>
                                <div class="product-bottom-details d-flex justify-content-between">
                                      <div class="product-price">
                                          <small>$230.99 </small>$99
                                      </div>
                                      <div class="product-links">
                                          <a href="#"><i class="bi bi-cart"></i></a>
                                          <a href="#"><i class="bi bi-heart"></i></a>
                                      </div>
                                 </div><!---pr-bottom-details-->
                          </div><!--pr-details-->
                      </div><!--pr-card-->    
               </div><!--col-->

               <div class="col-lg-4 col-sm-6 mb-3">
                <div class="product-card">
                         <div class="product-thumb">
                             <a href="#"><img src="{{asset('img/products/apple_cinema_30.jpg')}}" alt=""></a>
                         </div>
                         <div class="product-details">
                                 <h4><a href="#">Apple Cinema 30</a></h4>
                                 <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil, ducimus!</p>
                                 <div class="product-bottom-details d-flex justify-content-between">
                                       <div class="product-price">
                                           <small>$230.99 </small>$250
                                       </div>
                                       <div class="product-links">
                                           <a href="#"><i class="bi bi-cart"></i></a>
                                           <a href="#"><i class="bi bi-heart"></i></a>
                                       </div>
                                  </div><!---pr-bottom-details-->
                           </div><!--pr-details-->
                       </div><!--pr-card-->    
                </div><!--col-->

                <div class="col-lg-4 col-sm-6 mb-3">
                  <div class="product-card">
                           <div class="product-thumb">
                               <a href="#"><img src="{{asset('img/products/canon_eos_5d_1.jpg')}}" alt=""></a>
                           </div>
                           <div class="product-details">
                                   <h4><a href="#">Canon EOS 5d</a></h4>
                                   <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil, ducimus!</p>
                                   <div class="product-bottom-details d-flex justify-content-between">
                                         <div class="product-price">
                                             <small>$230.99 </small>$95
                                         </div>
                                         <div class="product-links">
                                             <a href="#"><i class="bi bi-cart"></i></a>
                                             <a href="#"><i class="bi bi-heart"></i></a>
                                         </div>
                                    </div><!---pr-bottom-details-->
                             </div><!--pr-details-->
                         </div><!--pr-card-->    
                  </div><!--col-->

                  <div class="col-lg-4 col-sm-6 mb-3">
                    <div class="product-card">
                             <div class="product-thumb">
                                 <a href="#"><img src="{{asset('img/products/hp_1.jpg')}}" alt=""></a>
                             </div>
                             <div class="product-details">
                                     <h4><a href="#">HP</a></h4>
                                     <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil, ducimus!</p>
                                     <div class="product-bottom-details d-flex justify-content-between">
                                           <div class="product-price">
                                               <small>$230.99 </small>$355
                                           </div>
                                           <div class="product-links">
                                               <a href="#"><i class="bi bi-cart"></i></a>
                                               <a href="#"><i class="bi bi-heart"></i></a>
                                           </div>
                                      </div><!---pr-bottom-details-->
                               </div><!--pr-details-->
                           </div><!--pr-card-->    
                    </div><!--col-->

                    <div class="col-lg-4 col-sm-6 mb-3">
                      <div class="product-card">
                               <div class="product-thumb">
                                   <a href="#"><img src="{{asset('img/products/imac_1.jpg')}}" alt=""></a>
                               </div>
                               <div class="product-details">
                                       <h4><a href="#">iMac</a></h4>
                                       <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil, ducimus!</p>
                                       <div class="product-bottom-details d-flex justify-content-between">
                                             <div class="product-price">
                                                 <small>$230.99 </small>$395
                                             </div>
                                             <div class="product-links">
                                                 <a href="#"><i class="bi bi-cart"></i></a>
                                                 <a href="#"><i class="bi bi-heart"></i></a>
                                             </div>
                                        </div><!---pr-bottom-details-->
                                 </div><!--pr-details-->
                             </div><!--pr-card-->    
                      </div><!--col-->

                      <div class="col-lg-4 col-sm-6 mb-3">
                        <div class="product-card">
                                 <div class="product-thumb">
                                     <a href="#"><img src="{{asset('img/products/iphone_1.jpg')}}" alt=""></a>
                                 </div>
                                 <div class="product-details">
                                         <h4><a href="#">iPhone</a></h4>
                                         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil, ducimus!</p>
                                         <div class="product-bottom-details d-flex justify-content-between">
                                               <div class="product-price">
                                                   <small>$230.99 </small>$99
                                               </div>
                                               <div class="product-links">
                                                   <a href="#"><i class="bi bi-cart"></i></a>
                                                   <a href="#"><i class="bi bi-heart"></i></a>
                                               </div>
                                          </div><!---pr-bottom-details-->
                                   </div><!--pr-details-->
                               </div><!--pr-card-->    
                        </div><!--col-->
          </div><!--row-->
    </div><!--container-->
</section>
@endsection
