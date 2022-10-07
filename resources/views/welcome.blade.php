<!DOCTYPE html>

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>studio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ url('/css/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('/css/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ url('/css/css/owl.theme.default.css') }}" rel="stylesheet">
    <link href="{{ url('/css/css/animate.css') }}" rel="stylesheet">
    <link href="{{ url('/css/css/main_styles.css') }}" rel="stylesheet">
    <link href="{{ url('/css/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <style>

         .carousel{
    /* background-image: u; */
    margin-top: 20px;
}
.carousel-item{
    text-align: center;
    min-height: 250px; /* Prevent carousel from being distorted if for some reason image doesn't load */
}
.bs-example{
	margin: 20px;
}
#myCarousel .carousel-item .mask {
    position: absolute;
    top: 0;
	left:0;
	height:100%;
    width: 100%;
    background-attachment: fixed;
}
#myCarousel .container {max-width: 1430px;  }
#myCarousel .carousel-item{height:100%; min-height:550px; }
#myCarousel{position:relative; z-index:1; background:url('storage/backg/2.jpg') center center no-repeat; background-size:cover; }

.carousel-control-next, .carousel-control-prev{height:40px; width:40px; padding:12px; top:50%; bottom:auto; transform:translateY(-50%); background-color: #f47735; }


.carousel-item {
    position: relative;
    display: none;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    width: 100%;
    transition: -webkit-transform .6s ease;
    transition: transform .6s ease;
    transition: transform .6s ease,-webkit-transform .6s ease;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-perspective: 1000px;
    perspective: 1000px;
}
.carousel-fade .carousel-item {
	opacity: 0;
	-webkit-transition-duration: .6s;
	transition-duration: .6s;
	-webkit-transition-property: opacity;
	transition-property: opacity
}
#myCarousel h4{
	font-size:50px;
	margin-bottom:15px;
	color:#FFF;
	line-height:100%;
	letter-spacing:0.5px;
	font-weight:600;
}
#myCarousel p{
	font-size:18px;
	margin-bottom:15px;
	color:#d5d5d5;
}
#bo{
    padding-top:-20px;
    margin-top:0;
}

     </style>
       
    </head>
    <body>
       
         <header id="bo" class="main_menu home_menu" style="background-image:url(storage/img/footer.jpg)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="/storage/hogevalogo.png" width="70" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-center"
                            id="navbarSupportedContent" >
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/"   style="color: #FFFFFF;">Accueil</a>
                                </li>
                          

                                <li class="nav-item">
                                @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block ">
                    @auth
                        <a href="{{ url('/dashboard') }}" style="color:white;" class="text-sm text-gray-700 underline">Service</a>
                    @else
                        <a href="{{ route('login') }}" style="color:white;" class="text-sm text-gray-700 underline">Connexion</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" style="color:white;"  class="ml-4 text-sm text-gray-700 underline">Enregistre</a>
                        @endif
                    @endif
                </div>
            @endif
                                </li>
                            </ul>
                        </div>
                        
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->
     <!-- banner part start-->
    
            <div class="content"  >
            
                
                <div class="super_container"  style="background-color:#737BEE">
	
                
                    <!-- Home -->
                    
                    <div id="myCarousel" style="padding-top: 100px;"class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <div class="mask flex-center">
                              <div class="container">
                                <div class="row align-items-center" style="background-image:url(storage/img/footer.jpg)">
                                  <div class="col-md-7 col-12 order-md-1 order-2">
                                    <h4  style="color: #ffed4a;">Recuperation des enfants  <br>
                                    non accompagnés</h4>
                                    <p> &nbsp; <br />
                    &nbsp; Hebergement des enfants ayant des problemes familiaux<br />
                    &nbsp; Education des enfants de la rue:<br />
					&nbsp; (Les faire des disciples)</p>
                                    </div>
                                  <div class="col-md-5 col-12 order-md-2 order-1"><img style="box-shadow: 5px 10px #2ac275;;" src="storage/img/16.jpg" class="mx-auto rounded-circle" alt="slide"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <div class="mask flex-center">
                              <div class="container">
                                <div class="row align-items-center" style="background-image:url(storage/img/footer.jpg)" >
                                <div class="col-md-7 col-12 order-md-1 order-2">
                                    <h4  style="color: #ffed4a;">Recuperation des enfants  <br>
                                    non accompagnés</h4>
                                    <p> &nbsp; <br />
                    &nbsp; Hebergement des enfants ayant des problemes familiaux<br />
                    &nbsp; Education des enfants de la rue:<br />
					&nbsp; (Les faire des disciples)</p>
                                    </div>
                                  <div class="col-md-5 col-12 order-md-2 order-1"><img style="box-shadow: 2px 3px #2ac275;;" src="storage/img/17.jpg" class="mx-auto rounded-circle" alt="slide"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <div class="mask flex-center">
                              <div class="container">
                                <div class="row align-items-center" style="background-image:url(storage/img/footer.jpg)">
                                <div class="col-md-7 col-12 order-md-1 order-2">
                                    <h4  style="color: #ffed4a;">Recuperation des enfants  <br>
                                    non accompagnés</h4>
                                    <p> &nbsp; <br />
                    &nbsp; Hebergement des enfants ayant des problemes familiaux<br />
                    &nbsp; Education des enfants de la rue:<br />
					&nbsp; (Les faire des disciples)</p>
                                    </div>
                                  <div class="col-md-5 col-12 order-md-2 order-1"><img  style="box-shadow: 2px 3px #c2b82a;" src="storage/img/20.jpg" class="mx-auto rounded-circle" alt="slide"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                    </div>
                     
                </div>

                </div>
             </div>

             <script src="{{ asset('js/app.js') }}"></script>
             <script src="{{ url('/js/jquiry/jquery.min.js') }}"></script>
             <script src="{{ url('/js/jquiry/jquery-3.3.1.min.js') }}"></script>
             <script src="{{ url('/js/jquiry/popper.js') }}"></script>
             <script src="{{ url('/js/jquiry/bootstrap.min.js') }}"></script>
             <script src="{{ url('/js/jquiry/TweenMax.min.js') }}"></script>
             <script src="{{ url('/js/jquiry/TimelineMax.min.js') }}"></script>
             <script src="{{ url('/js/jquiry/ScrollMagic.min.js') }}"></script>
             <script src="{{ url('/js/jquiry/animation.gsap.min.js') }}"></script>
             <script src="{{ url('/js/jquiry/custom.js') }}"></script>
             <script src="{{ url('/js/jquiry/ScrollToPlugin.min.js') }}"></script>
             <script src="{{ url('/js/jquiry/owl.carousel.js') }}"></script>
             
             <script src="{{ url('/js/jquiry/jquery.jplayer.min.js.js') }}"></script>
             <script src="{{ url('/js/jquiry/jquery.playlist.min.js.js') }}"></script>
             <script src="{{ url('/js/jquiry/easing.js') }}"></script>
             <script src="{{ url('/js/jquiry/parallax.min.js') }}"></script>
             <script src="{{ url('/js/jquiry/jquery.scrollTo.min.js') }}"></script>
             <script src="{{ url('/js/jquiry/index.js') }}"></script>    </body>
</html>
