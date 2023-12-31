@extends('layout.layouts')

@section('content')
<nav class="navbar navbar-expand-md navbar-dark" style="background-color:#3097D1">
    <a href="index.html" class="navbar-brand"><img src="{{asset('img/brand-white.png')}}" alt="logo" class="img-fluid" width="80px" height="100px"></a>

    <button class="navbar-toggler" data-toggle="collapse" data-target="#responsive"><span class="navbar-toggler-icon"></span></button>


    <div class="collapse navbar-collapse" id="responsive">
        <ul class="navbar-nav mr-auto text-capitalize">
               
                <li class="nav-item"><a href="{{route('user')}}" class="nav-link active">Home</a></li>
                <li class="nav-item"><a href="{{route('userprofile')}}" class="nav-link active">profile</a></li>
             
                <li class="nav-item"><a href="{{route('usercomment')}}" class="nav-link active">comment</a></li>
                <li class="nav-item"><a href="{{route('userReplayView')}}" class="nav-link active">CommentReplay</a></li>
                
                <li class="nav-item"><a href="{{route('userlikeposts')}}" class="nav-link active">likePosts</a></li>
  
                
            </ul>

        <form action="" class="form-inline ml-auto d-none d-md-block">
            <input type="text" name="search" id="search" placeholder="Search" class="form-control form-control-sm">
        </form>
        <a href="notification.html" class="text-decoration-none" style="color:#CBE4F2;font-size:22px;"><i class="far fa-bell ml-3 d-none d-md-block"></i></a> 
        <img src="{{asset('img/avatar-dhg.png')}}" alt="" class="rounded-circle ml-3 d-none d-md-block" width="32px" height="32px">





    </div>




</nav>


<!---------------------------------------------Ends navigation------------------------------>







 <!---------------------------MOdal Section  satrts------------------->

<div class="modal fade" id="modalview" >
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">

        <div class="modal-content">


            <div class="modal-header">
                <div class="modal-title h4">Messages</div>

                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>


            <div class="modal-body">


                <ul class="list-unstyled">


                 <a href="#" class="text-decoration-none">
                    <li class="media hover-media">
                       
                            <img src="{{asset('img/avatar-dhg.png')}}" alt="img" width="60px" height="60px" class="rounded-circle mr-3">

                            <div class="media-body text-dark">
                                    <h6 class="media-header">Jchob Thunder and <strong> 1 others</strong></h6>
                                    <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                            </div>

                    </li>
                </a>
                <hr class="my-3">


                
                <a href="#" class="text-decoration-none">
                        <li class="media hover-media">
                           
                                <img src="{{asset('img/avatar-fat.jpg')}}" alt="img" width="60px" height="60px" class="rounded-circle mr-3">

                                <div class="media-body text-dark">
                                        <h6 class="media-header">Mark Otto and <strong> 3 others</strong></h6>
                                        <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                                </div>

                        </li>
                    </a>


                    <hr class="my-3">


                    <a href="#" class="text-decoration-none">
                        <li class="media hover-media">
                           
                                <img src="{{asset('img/avatar-mdo.png')}}" alt="img" width="60px" height="60px" class="rounded-circle mr-3">

                                <div class="media-body text-dark">
                                        <h6 class="media-header">Archer andu and <strong> 5 others</strong></h6>
                                        <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                                </div>

                        </li>
                    </a>

                    <hr class="my-3">


                    <a href="#" class="text-decoration-none">
                            <li class="media hover-media">
                               
                                    <img src="{{asset('img/avatar-dhg.png')}}" alt="img" width="60px" height="60px" class="rounded-circle mr-3">
    
                                    <div class="media-body text-dark">
                                            <h6 class="media-header">Jchob Thunder and <strong> 1 others</strong></h6>
                                            <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    
                                    </div>
    
                            </li>
                        </a>
                        <hr class="my-3">
    
    
                        
                        <a href="#" class="text-decoration-none">
                                <li class="media hover-media">
                                   
                                        <img src="{{asset('img/avatar-fat.jpg')}}" alt="img" width="60px" height="60px" class="rounded-circle mr-3">
        
                                        <div class="media-body text-dark">
                                                <h6 class="media-header">Mark Otto and <strong> 3 others</strong></h6>
                                                <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        
                                        </div>
        
                                </li>
                            </a>
    
    
                            <hr class="my-3">
    
    
                            <a href="#" class="text-decoration-none">
                                <li class="media hover-media">
                                   
                                        <img src="{{asset('img/avatar-mdo.png')}}" alt="img" width="60px" height="60px" class="rounded-circle mr-3">
        
                                        <div class="media-body text-dark">
                                                <h6 class="media-header">Archer andu and <strong> 5 others</strong></h6>
                                                <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        
                                        </div>
        
                                </li>
                            </a>

                    
                            <hr class="my-3">
                            <a href="#" class="text-decoration-none">
                                    <li class="media hover-media">
                                       
                                            <img src="{{asset('img/avatar-dhg.png')}}" alt="img" width="60px" height="60px" class="rounded-circle mr-3">
            
                                            <div class="media-body text-dark">
                                                    <h6 class="media-header">Jchob Thunder and <strong> 1 others</strong></h6>
                                                    <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            
                                            </div>
            
                                    </li>
                                </a>
                                <hr class="my-3">
            
            
                                
                                <a href="#" class="text-decoration-none">
                                        <li class="media hover-media">
                                           
                                                <img src="{{asset('img/avatar-fat.jpg')}}" alt="img" width="60px" height="60px" class="rounded-circle mr-3">
                
                                                <div class="media-body text-dark">
                                                        <h6 class="media-header">Mark Otto and <strong> 3 others</strong></h6>
                                                        <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                
                                                </div>
                
                                        </li>
                                    </a>
            
            
                                    <hr class="my-3">
            
            
                                    <a href="#" class="text-decoration-none">
                                        <li class="media hover-media">
                                           
                                                <img src="{{asset('img/avatar-mdo.png')}}" alt="img" width="60px" height="60px" class="rounded-circle mr-3">
                
                                                <div class="media-body text-dark">
                                                        <h6 class="media-header">Archer andu and <strong> 5 others</strong></h6>
                                                        <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                
                                                </div>
                
                                        </li>
                                    </a>




                </ul>



                

            </div>
        </div>


    </div>


</div>

<!-------------------------------MOdal Ends---------------------------->




















<!-----------------------------------Banner/img Starts-------------------->


<div class="banner">
    <div class="banner-title d-flex flex-column justify-content-center align-items-center">
        <img src="{{asset('img/avatar-dhg.png')}}" alt="img" class="rounded-circle" width="80px" height="80px">
        <h3 class="text-light">Dave Gamache</h3>
        <p class="text-light">I wish i was a little bit taller, wish i was a baller, wish i had a girl… also.</p>

    </div>


    <div class="banner-end d-flex justify-content-center align-items-end">
      
    </div>


    

</div>

<!--------------------Image Portfolio----------------->


<div class="grid-template container my-4">
    

    <div class="item-1">
           
        
   
   <a href="portfolio/img1.jpg" data-lightbox="id"><img src="{{asset('portfolio/img1.jpg')}}" alt="" class="img-fluid" style="width:455px; height: 255px;"></a>     
  


    </div>

    <div class="item-2 ">
        <a href="portfolio/img2.jpg"data-lightbox="id"> <img src="{{asset('portfolio/img2.jpg')}}" alt="" class="img-fluid" style="width:217px; height: 255px;"></a>   

        </div>
        <div class="item-3">
                <a href="portfolio/img3.jpg"data-lightbox="id"> <img src="{{asset('portfolio/img3.jpg')}}" alt="" class="img-fluid" style="width:217px; height: 255px;"></a> 
            </div>
            <div class="item-4">
                    <a href="portfolio/img4.jpg"data-lightbox="id"> <img src="{{asset('portfolio/img4.jpg')}}" alt="" class="img-fluid" style="width:217px; height: 255px;"></a> 
            


                </div>


                <div class="item-5">

                        <a href="portfolio/img5.jpg"data-lightbox="id"><img src="{{asset('portfolio/img5.jpg')}}" alt="" class="img-fluid" style="width:217px; height: 255px;"></a> 
  


                </div>
    
                <div class="item-6">
                        <a href="portfolio/img6.jpg"data-lightbox="id">   <img src="{{asset('portfolio/img6.jpg')}}" alt="" class="img-fluid" style="width:217px; height: 255px;"></a> 
                    
    
                    </div>
                    <div class="item-7">
                            <a href="portfolio/img7.jpg"data-lightbox="id"> <img src="{{asset('portfolio/img7.jpg')}}" alt="" class="img-fluid" style="width:455px; height: 255px;"></a> 
                      
                        </div>
                        <div class="item-8">
                        
                                <a href="portfolio/img8.jpg"data-lightbox="id">  <img src="{{asset('portfolio/img8.jpg')}}" alt="" class="img-fluid" style="width:217px; height: 255px;"></a> 
    
                            </div>

                            <div class="item-9">
                                    <a href="portfolio/img9.jpg"data-lightbox="id"><img src="{{asset('portfolio/img9.jpg')}}" alt="" class="img-fluid" style="width:217px; height: 255px;"></a> 
  


                            </div>
                
                            <div class="item-10">
                                    <a href="portfolio/img10.jpg"data-lightbox="id">    <img src="{{asset('portfolio/img10.jpg')}}" alt="" class="img-fluid" style="width:217px; height: 255px;"></a> 
                                
                
                                </div>
                                <div class="item-11">
                                        <a href="portfolio/img11.jpg"data-lightbox="id">   <img src="{{asset('portfolio/img11.jpg')}}" alt="" class="img-fluid" style="width:455px; height: 255px;"></a> 
                                  
                                    </div>
                                    <div class="item-12">
                                            <a href="portfolio/img12.jpg"data-lightbox="id">   <img src="{{asset('portfolio/img12.jpg')}}" alt="" class="img-fluid" style="width:217px; height: 255px;"></a> 
                                    
                
                
                                        </div>

                


</div>
@endsection