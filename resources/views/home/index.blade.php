<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;600;700&display=swap" rel="stylesheet">
	<link rel="icon" type="image/png"  href="{{ asset('assets/img/logo.png') }}">
	<link href="{{ asset('assets/assets/frontend/style.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/assets/frontend/tiny-slider.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/assets/frontend/aos.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/assets/frontend/style1.css') }}" rel="stylesheet" type="text/css" />
   
    
    <title>School</title>
  </head>
  <body>
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close"><span class="icofont-close js-menu-toggle"></span></div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    <nav class="site-nav">
      <div class="container">
        <div class="site-navigation"><a href="#" class="logo m-0">SCHOOL</a>
          <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
            <li class="active"><a href="#">Home</a></li>
            
            
          </ul><a href="#" class="burger ms-auto float-end site-menu-toggle mt-2 js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar"><span></span></a>
        </div>
      </div>
    </nav>
    <div class="hero v-h-full overlay" style="background-image: url({{ asset('assets/img/bg_hero.jpg') }})">
      <div class="container">
        <div class="row align-items-center v-h-full">
          <div class="col-lg-10 col-xxl-6">
            <h1 class="heading-2 text-white mb-4" data-aos="fade-up">{{$pages->name}}</h1>
            <p data-aos="fade-up" data-aos-delay="200"><a href="#" class="btn btn-primary-gradient">Read More</a></p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="section section-3">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mb-5">
		 
            
			
			<h4>{{$pages->description}}</h4>
			
          </div>
        </div>
        
      </div>
      
    </div>
    
            
      
     
   
    
    <div class="section footer ">
      <div class="container  text-center">
        <div class="row">
          <div class="col-lg-12 mx-auto">
            
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <p> Copyright &copy;<script>
                document.write(new Date().getFullYear());
              </script> All rights reserved | This site is made with  by <a href="#" target="_blank" rel="nofollow noopener">School</a></p>
          </div>
        </div>
      </div>
    </div>
    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status"><span class="visually-hidden">Loading...</span></div>
    </div>
	
	
	
	
    <script src="{{ asset('assets/assets/frontend/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/assets/frontend/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/assets/frontend/aos.js') }}"></script>
    <script src="{{ asset('assets/assets/frontend/navbar.js') }}"></script>
    <script src="{{ asset('assets/assets/frontend/custom.js') }}"></script>
    
  </body>
</html>