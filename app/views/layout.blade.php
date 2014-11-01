<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>

    <title>DELIVERY</title>

    <!-- Favicons -->
    <!-- <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/img/favicon.png') }}"> -->
    <!-- <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}"> -->
    <meta name="description" content=""/>
   <meta name="viewport" content="width-device-width, initial-scale=1.0"> 
    {{ HTML::style('assets/css/main.css'); }}
    {{ HTML::style('assets/css/normalize.css'); }}
    <script type="application/javascript">
        var base_url = '/';
    </script>
</head>
<body>
    <!-- {{ HTML::image('assets/img/p1.jpg','',array('class' => 'NoticiaPrincipal-image')) }}   -->
<div class="MainMenu-container">
 <nav class="MainMenu"  >
    <div class="MainMenu-closeRegister">
     <a class="MainMenu-close icon-close"></a>
     <a class="MainMenu-singIn" href="">INICIAR SESIÓN</a>
    </div>
     <a class="MainMenu-singUp"href="">REGÍSTRATE</a>
     <ul class="MainMenu-primerItem">
         <li class="MainMenu-primerList"><a class="MainMenu-primerlink" href="">inicio</a></li>
         <li class="MainMenu-primerList"><a class="MainMenu-primerlink" href="">Nuestras Ciudades</a></li>
         <li class="MainMenu-primerList"><a class="MainMenu-primerlink" href="">Sé un conductor</a></li>
     </ul>
     <ul class="MainMenu-segundItem">
         <li class="MainMenu-segundList"><a class="MainMenu-sgundLink" href="">Funciones de la Aplicacion</a></li>
         <li class="MainMenu-segundList"><a class="MainMenu-sgundLink" href="">Seguridad</a></li>
         <li class="MainMenu-segundList"><a class="MainMenu-sgundLink" href="">Negocios</a></li>
         <li class="MainMenu-segundList"><a class="MainMenu-sgundLink" href="">Conocenos</a></li>
         <li class="MainMenu-segundList"><a class="MainMenu-sgundLink" href="">Centro de ayuda</a></li>
         <li class="MainMenu-segundList"><a class="MainMenu-sgundLink" href="">únete al equipo</a></li>
         <li class="MainMenu-segundList"><a class="MainMenu-sgundLink" href="">legal</a></li>
         <li class="MainMenu-segundList"><a class="MainMenu-sgundLink" href="">blog</a></li>
         <li class="MainMenu-segundList"><a class="MainMenu-sgundLink" href="">se un conductor</a></li>
     </ul>
     <p class="MainMenu-titleIdioma">Idioma</p>
     <select class="MainMenu-select" name="" id="">
           <option class="MainMenu-option" value="">Español</option>
           <option class="MainMenu-option" value="">Frances</option>
           <option class="MainMenu-option" value="">Ingles</option>
     </select>
   <div class="MainMenu-imageContainer"> 
      {{ HTML::image('assets/img/apple.png','',array('class' => 'MainMenu-image')) }}
      {{ HTML::image('assets/img/google.png','',array('class' => 'MainMenu-image')) }}
      {{ HTML::image('assets/img/windows.png','',array('class' => 'MainMenu-image')) }}
    </div>
   
 </nav> 
</div>   
     
        <div class="Body-container"> 
        <div class="Body-overlay" >  </div> 
            <header class="Header">
                <div class="Header-menuLeftContainer">
                    <a href="#" class="Header-menuLeft icon-menu">
                    <span class="Header-titleLeft">MENÚ</span></a>
                </div>
                <div class="Header-logoGeneral"> 
                    <a href="#">
                      
                          {{ HTML::image('assets/img/logo.png','',array('class' => 'Header-logo')) }}
                 
                    </a>
                </div>   
                <div class="Header-singContainer">
                    <a href="#" class="Header-signIn">INICIAR SESIÓN</a>
                    <a href="#" class="Header-signUp">REGISTRATE</a>
                </div>
            </header>

            <section class="Slider">
                 <ul class="Slider-containerSlider" >
                  <li class="Slider-containerItem" >  
                      <div class="Slider-titleContainer"  > 
                         <h2 class="Slider-titulo">Dándote el gusto</h2>
                         <p class="Slider-subtitulo">REDOBLA TU ESFUERZO CUANDO QUIERAS TENER UNA GRAN NOCHE</p>
                         <a class="Slider-link" href="#">Regístrate en Uber.</a>
                         <!-- {{ HTML::image('assets/img/image1.jpg','',array('class' => 'Slider-image')) }} -->
                     </div>
                      
                             
                  </li> 

                  <li class="Slider-containerItem" >  
                      <div class="Slider-titleContainer"> 
                         <h2 class="Slider-titulo">Daaaaaao</h2>
                         <p class="Slider-subtitulo">REDOBLA TU ESFUERZO CUANDO QUIERAS TENER UNA GRAN NOCHE</p>
                         <a class="Slider-link" href="#">Regístrate en Uber.</a>  
                         <!-- {{ HTML::image('assets/img/image2.jpg','',array('class' => 'Slider-image')) }}       -->
                     </div>
                      
                  </li>

               <div class="Slider-nextprev">
                  <a href="#" class="unslider-arrow prev">Previous slide</a>
                  <a href="#" class="unslider-arrow next">Next slide</a>
                 </div>

                </ul>
             
                  <!-- <ol class="dots">
                    <li class="dot">1</li>
                    <li class="dot active">2</li>
                    <li class="dot">3</li>
                    <li class="dot">4</li>
                  </ol>
               </ul>
 -->           
            </section>


            








            <section>
             <p>jshdjhsd</p>
             <p>kjshdksjhdj</p>
            </section>
         </div>
         
  
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
{{ HTML::script('assets/js/layout.js') }}
{{ HTML::script('assets/js/slider.js') }}
{{ HTML::script('assets/js/unslider.js') }}

</body>
</html>
