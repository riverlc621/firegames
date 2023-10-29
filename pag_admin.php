<?php

session_start();
// error_reporting(0);

// $varsesion= $_SESSION['usuario'];

// if($varsesion == null || $varsesion = ""){
//     echo"no tiene permiso para ingresar";
//     die();
// }else{
//     if((time()-$_SESSION['time'] ) > 60){
//         header('location:logout-page.php');

//     }
// }
if(!$_SESSION['usuario']){
  header('location:formulario.html');
}else{
  if((time() - $_SESSION['time']) > 60){
    header('location:formulario.html');
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FIRE OF GAMES</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 
  <link href="assets/img/3.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

 
  <link href="assets/css/style.css" rel="stylesheet">

 
</head>
<!-- <script>
  //variable para el tiempo de inactividad
  var tiempoinactividad = 1 * 60 * 1000; //se presentan los minutos en milisegundos
  var contadorinactividad = 0;
  function restablecercontador(){
    contadorinactividad = 0;
  }
  function verificarincactividad(){
    contadorinactividad += 1000; //añade un segundo al cpmtadoe de unactividad cada segundo
  }
  //si el tiempo de inactividad deseado es superado mostrar un mensaje y cerrar session
  if(contadorinactividad >= tiempoinactividad){
    alert("se a detectado inactividad por 1 minuto asi que se cerrara la sesion");
    window.location.href="cerrar_sesion.php";//se redirige a cerrar sesion
  }

  //restablecer contador de inactividad cuando el usuario realize una actividad
  document.activeEventlistener("mousemove",restablecercontador);
  document.activeEventlistener("keypress",restablecercontador);
  //verificar inactividad cada segundo
  setInterval(verificarincactividad,1000);
</script> -->
<body>

  
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+57 300 7567923</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> ABIERTA TODOS LOS DIAS 12h</span></i>
      </div>

      <div class="languages d-none d-md-flex align-items-center">
        <ul>
          <li>FIRE </li>
          <li><a href="#"></a>GAMES</li>
        </ul>
      </div>
    </div>
  </div>

  
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html"><a href="./firee2/index.html">FIRE</a> OF GAMES</a></h1>
      

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">INICIO</a></li>
          <li><a class="nav-link scrollto" href="#about">REGLAS</a></li>
          <li><a class="nav-link scrollto" href="#menu">FIGURAS</a></li>
          <li><a class="nav-link scrollto" href="#specials">CONSOLAS</a></li>
          <li><a class="nav-link scrollto" href="#events">EVENTOS</a></li>
          <li><a class="nav-link scrollto" href="#chefs">CREADORES</a></li>
          <li><a class="nav-link scrollto" href="#gallery">GALERIA</a></li>
          <li class="dropdown"><a href="./firee2/index.html"><span>SECCION 2</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
          <li><a class="nav-link scrollto" href="#contact">MAPA</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li class="dropdown">
      <a href="" class="book-a-table-btn scrollto d-none d-lg-flex"><?php echo $_SESSION['usuario'];  ?></a>
            <ul>
              <li class="dropdown"><a href="INFORME.php"><span>DATOS</span></a></li>
              <li class="dropdown"><a href="formulario.html"><span>CAMBIO DE USUARIO</span></a></li>
              <li class="dropdown"><a href="index.html"><span>CERRAR SESION</span></a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      
    </div>
  </header>
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>BIENVENIDO <?php echo $_SESSION['usuario'];  ?> A  <span>FIRE OF GAMES</span></h1>
          <h2>PAGINA SOBRE VIDEOJUEGOS Y MAS </h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">JUEGOS MAS POPULARES </a>
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">COMPRAR TU JUEGO</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://youtu.be/d4yXAH0qoCo" class="glightbox play-btn"></a>
        </div>

      </div>
    </div>
  </section>
  <main id="main">

    
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="assets/img/m.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>REGLAS:</h3>
            <p class="fst-italic">
              NO TE PREOCUPES ESTA PAGINA ESTA CREADA PARA QUE TE ENTRETENGAS, LA PASES BIEN Y PUEDAS COMPRAR TODO LO QUE QUIERAS, SI LO PUEDES ENCONTRAR O ESTA A NUESTRA DISPOSICION.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i>NECESITAMOS QUE SEAN RESPETUOSOS, CON LOS CREADORES DE ESTA PAGINA Y CON LOS QUE LA USAN.</li>
              <li><i class="bi bi-check-circle"></i> SI TIENEN ALGUN PROBLEMA CON LA PAGINA SE PUEDEN COMUNICAR A NUESTRO NUMERO QUE ESTA EN EL INICIO, ARRIVA A LA IZQUIERDA.</li>
              <li><i class="bi bi-check-circle"></i>POR ULTIMO DEBEN TENER PRUEVAS DE LAS COMPRAS QUE RELICEN POR SI TENEMOS INCONVENIETES, PARA QUE HAGN UN REENVOLZO  </li>
            </ul>
            <p>
              ESPERO QUE TODO ALLA SIDO CLARO, AHORA SI DISFRUTEN DE NUESTRA PAGINA Y MIREN TODOS LOS SERVICIOS QUE LES PODREMOS BRINDAR. LOS MEJORES VIDEOJUEGOS, FIGURAS DE ANIMES, CONSOLAS Y UN JUEGO GRATIS QUE PUEDES DISFRUTAR, TODO ESTA A TU DISPOSICION.
            </p>
          </div>
        </div>

      </div>
    </section>
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>TOP VIDEOJUEGOS</h2>
          <p>ESTOS SON LOS 3 JUEGOS MAS POPULARES </p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>01</span>
              <h4>FORNITE</h4>
              <p>es un juego online de disparos lo que se conoce como un shooteren tercera persona es decir; que ves a tu personaje según se mueve. Tiene dos modos de juego: Salvar al mundo y Battle Royale. Salvar al mundo es un mundo abierto que puede jugarse solo u online con amigos para salir adelante</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <span>02</span>
              <h4>GRAND THEFT AUTO V</h4>
              <p>es una saga con más de 15 títulos ambientados en diferentes escenarios. En todos los casos, un criminal realiza distintas misiones a cambio de dinero. Sus encargos suelen ser asesinar personas, secuestrar hombres adinerados, robar coches, asaltar bancos, y mucho mas.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span>03</span>
              <h4>MINECRAFT</h4>
              <p>es una combinación entre ir creando minas y picando en ellas para conseguir los elementos necesarios para mejorar tu equipo y posibilidades. El modo creativo es radicalmente diferente, si bien la base del juego sigue siendo la misma, con el fin de derrotar a un dragon para ganar el juego y ver su final.</p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>FIGURAS</h2>
          <p>MIRA NUESTRAS FIGURAS</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">TODAS</li>
              <li data-filter=".filter-starters">MAS CARAS </li>
              <li data-filter=".filter-salads">PRECIOS MEDIOS </li>
              <li data-filter=".filter-specialty">PRECIOS BAJOS</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/ov.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">OVERLORD</a><span>$99.900</span>
            </div>
            <div class="menu-ingredients">
               FIGURA DE AINZ OOAL GOWN.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/l.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">BLACK CLOVER</a><span>70.900</span>
            </div>
            <div class="menu-ingredients">
              FIGURA DE ASTA.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/ñ.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">SPY FAMELY</a><span>$124.000</span>
            </div>
            <div class="menu-ingredients">
              SPY FAMELY.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/on.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">ONE PUCH MAN </a><span>$70.000</span>
            </div>
            <div class="menu-ingredients">
              FIGURA DEL CALVO FAVORITO SAITAMA.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/na.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">NARUTO SHIPPUDEN</a><span>$60.000</span>
            </div>
            <div class="menu-ingredients">
              FIGURA DE ITACHI UCHIHA.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/ne.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="https://listado.mercadolibre.com.co/figuras-demon-slayer#D[A:figuras%20demon%20slayer]">DEMON SLAYER</a><span>$225.000</span>
            </div>
            <div class="menu-ingredients">
               KIMETSU NO YAIBA / NEZUKO.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/de.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">MI HERO ACADEMIA</a><span>$80.500</span>
            </div>
            <div class="menu-ingredients">
              FIGURA DE DEKU / MIDORIYA.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/ka.jpeg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">TOKYO GHOUL</a><span>$80.900</span>
            </div>
            <div class="menu-ingredients">
              FIGURA DE KANEKI.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/go.jpeg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">DRAGON BALL</a><span>$50.800</span>
            </div>
            <div class="menu-ingredients">
             FIGURA DE GOKU / KAKAROTO.
            </div>
          </div>

             <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/CH.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">CHAIN SAW MAN</a><span>$124.000</span>
            </div>
            <div class="menu-ingredients">
              FUIGURAS DE LOS CAZA DEMONIOS FAVORITOA DE TODOS.
            </div>
          </div>


        </div>

      </div>
    </section>
    <section id="specials" class="specials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>CONSOLAS. </h2>
          <p>LAS CONSOLAS 5 CONSOLAS MAS VENDIDAS DE LA HISTORIA</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">ATARI 2600</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">XBOX ONE </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">MEGA DRIVE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">NINTENDO 64</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">SUPER NINTENDO </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>ATARI 2600</h3>
                    <p class="fst-italic">es una videoconsola lanzada al mercado en 1977 bajo el nombre de Atari VCS, convirtiéndose en el primer sistema de videojuegos en tener gran éxito, e hizo popular los cartuchos intercambiables. </p>
                    <p>poseía un procesador MOS Technology que funcionaba a 1,19MHz, una memoria RAM de 128 bytes, en VLSI y los cartuchos tenían una memoria ROM de 4KB por juego. En total existieron 3 modelo desde 1977 hasta 1983.</p>
                    <p>PUEDES OBTENERLA AQUI.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/ati.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>XBOX ONE</h3>
                    <p class="fst-italic">La nueva consola de Microsoft es actualmente el reproductor de Blu-ray 4K más barato del mercado, compatible ahora también con discos grabables y regrabables. Por supuesto también puede reproducir vídeo en streaming a 4K a través de aplicaciones como, por ejemplo, Netflix.</p>
                    <p>puedes disfrutar de los juegos, aplicaciones, películas HD y programas de TV más populares en la consola. También puedes acceder a los juegos multijugador en línea para más de 50 juegos gratuitos, chat de grupo y Buscar un grupo, todo sin necesidad de una suscripción a Xbox.</p>
                    <p>PUEDES OBTENERLA AQUI.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/xbox.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>MEGA DRIVE</h3>
                    <p class="fst-italic"> fue la tercera consola de Sega y la sucesora de la Master System. Compitió contra la SNES de Nintendo, como parte de las videoconsolas de cuarta generación. La primera versión fue lanzada en Japón en 1988, sucedida por el lanzamiento en Norteamérica bajo el renombramiento de Sega Genesis en 1989.</p>
                    <p>PUEDES OBTENERLA AQUI.</p>
                    
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/drive.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>NINTENDO 64</h3>
                    <p class="fst-italic">es la cuarta videoconsola de sobremesa producida por Nintendo, desarrollada para suceder a la Super Nintendo. Fue la primera consola concebida para dar el salto del 2D al 3D.</p>
                    <p>PUEDES OBTENERLA AQUI</p>
                    
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/n6.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>SUPER NINTENDO</h3>
                    <p class="fst-italic">la consola que lideró la industria de los 16 bits, cumple 30 años. Lanzada en 1990 en Japón, la sucesora de la Nintendo NES, logró vender 49,1 millones de unidades. Super Mario World o Donkey Kong Country fueron sus juegos estelares.</p>
                    <p>PUEDES OBTENERLA AQUI.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/super.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>EVENTOS</h2>
          <p>JUEGA ESTOS JUEGOS EN ESTE EVENTO Y GANA RECOMPENZAS </p>
        </div>

        <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/call.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>CALL OF DUTY</h3>
                  <div class="price">
                    <p><span>DISPAROS</span></p>
                  </div>
                  <p class="fst-italic">
                    PREMIOS: UN PLAYSTATION 4, UN HUAWEI MATE PAD 10 NEW EDITION,UNAS OCULUS QUEST 2 Y UN CELULAR IPHONE 11, ESTOS 4 PREMIOS SRAN PARA LOS 4 PRIMEROS PUESTOS ANIMO A TODOS.

                  </p>
                  <p>LOS REQUISITOS EN ESTE JUEGO QUE ES CALL OF DUTY SON MANDAR UN VIDEO CON SU NOMBRE Y CORREO CUANDO LOGRES LLEGAR AL NIVEL 60 EN CUALQUIER MAPA DE ZOMBIES, LA EVIDENCIA SE DEBE MANDAR EN EL CORREO DE LA EMPRESA O AL NUMERO.</p>
                  <ul>
                    <li><i class="bi bi-check-circled"></i>RETO REALIZADO POR FIRE OF GAMES </li>
                   
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/full.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>FALL GUYS</h3>
                  <div class="price">
                    <p><span>MULTIJUGADOR </span></p>
                  </div>
                  <p class="fst-italic">
                  PREMIOS: UN PLAYSTATION 4, UN HUAWEI MATE PAD 10 NEW EDITION,UNAS OCULUS QUEST 2 Y UN CELULAR IPHONE 11, ESTOS 4 PREMIOS SRAN PARA LOS 4 PRIMEROS PUESTOS ANIMO A TODOS.

                  </p>
                 
                   
                  <p>

                    PARA ESTE JUEGO ES NECESARIO QUE LA PERSONA TENGA 2000 COPAS Y 1000 CORONAS LAS EVIDENCIAS SE MANDAN AL CORREO O NUMERO DE LA EMPRESA.
                  
                  </p> 
                  <ul>
                    <li><i class="bi bi-check-circled"></i>RETO REALIZADO POR FIRE OF GAMES</li>
                </div> </ul>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/clas.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>CLASH ROYALE</h3>
                  <div class="price">
                    <p><span>CARTAS</span></p>
                  </div>
                  <p class="fst-italic">
                    PREMIOS: UN PLAYSTATION 4, UN HUAWEI MATE PAD 10 NEW EDITION,UNAS OCULUS QUEST 2 Y UN CELULAR IPHONE 11, ESTOS 4 PREMIOS SRAN PARA LOS 4 PRIMEROS PUESTOS ANIMO A TODOS.
                  </p>
                  
                  <p>
                    PARA ESTE RETO DEBES TENER 2000 COPAS Y TODAS TUS CARTAS AL NIVEL 11.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circled"></i>RETO REALIZADO POR FIRE OF GAMES</li>
                    
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>YOUTUBERS MAFOSOS</h2>
          <p>LOS YOUTUBERS MAS QUERIDOS, QUE CAMBIARON EL INTERNET</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                 Fue el primer youtuber en recibir dos botones de diamante, reconocimientos otorgados por alcanzar diez millones de suscriptores en sus dos canales. Asimismo, es el chileno con más seguidores en Facebook,[cita requerida] y el vigesimocuarto youtuber con más suscriptores del mundo y el segundo como persona de habla hispana.

                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/ger.jpg" class="testimonial-img" alt="">
                <h3>JUEGA GERMAN</h3>
                <h4>&amp;GERMAN GARMENDIA</h4>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Inició su carrera en YouTube a los 18 años, teniendo alrededor de 8 años en la plataforma. Cuenta con un total de 9.930.000.000 de visitas totales en su canal y 45.1 millones de suscriptores, también es el youtuber con más suscriptores de su país, El Salvador y el vigésimo noveno canal más suscrito mundialmente.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/k.jpg" class="testimonial-img" alt="">
                <h3>FERNANFLOO</h3>
                <h4>&amp;LUIS FERNANDO</h4>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                 Comenzó su andadura en Youtube en 2008. Se dedicaba sobre todo a grabar vídeos de contenido humorístico sobre diversos temas sociales y de actualidad. Al principio, en sus vídeos aparecía con la cara tapada, ya que le costó decidirse a mostrar su identidad, dada su temática.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/oo.jpg" class="testimonial-img" alt="">
                <h3>AURONPLAY</h3>
                <h4>&amp;RAUL ALVAREZ</h4>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Para octubre de 2013, debido a su interés en lo paranormal, Revilla decidió empezar a subir contenido de terror y relacionado con conspiraciones, siendo este el contenido que se quedaría en su canal desde entonces.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/ko.jpg" class="testimonial-img" alt="">
                <h3>DROSS ROTZANK</h3>
                <h4>&amp;ANGEL DAVID REVILLA</h4>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Se conoce que antiguamente se encontraba en un canal colaborativo llamado VlogsFuckYea, en el cual subían videos junto a Ale Moreno y otros cuantos, en este canal tenía una sección llamada "Lunes de Missa". Algunos vídeos se resubieron a MissaSinfonia.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/misa.jpg" class="testimonial-img" alt="">
                <h3>MISSASINFONIA</h3>
                <h4>&amp;ANGEL MISSAEL</h4>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>

    
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>GALERIA</h2>
          <p>AQUI PODRAS ENCONTRAR ALGUNAS IMAGENES DE JUEGOS </p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/ass.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/ass.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/rv.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/rv.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/th.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/th.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/s.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/s.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/mi.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/mi.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/rd.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/rd.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gof.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gof.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/h.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/h.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section>
    <section id="chefs" class="chefs">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>CREADORES DE LA PAGINA</h2>
          <p>LOS RESPONSABLES DE HABER CREADO LA PAGINA</p>
        </div>

        <div class="row">

        <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <img src="assets/img/chefs/mio.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>ERIC SEBASTIAN ACEVEDO</h4>
                  <span>RESPONSABLE: HTML,CSS,JS</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <img src="assets/img/bedoya.jpeg " class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>JUAN MANUEL BEDOYA MAZO</h4>
                  <span>RESPONSABLE: HTML,CSS,JS</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <img src="assets/img/chefs/im.jpeg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>JUAN DAVID RODRIGUEZ</h4>
                  <span>RESPONSABLE: HTML,CSS,JS</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>          
          
          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <img src="assets/img/danny.jpeg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>DANIELA RESPTREPO CANO</h4>
                  <span>RESPONSABLE: HTML,CSS,JS</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
     
    </section>
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>MAPA</h2>
          <p>BUSCA NUESTRO LOCAL</p>
        </div>
      </div>

      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>UBICACION</h4>
                <p>COLOMBIA, MEDELLIN, CAMPOVALDES</p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>HORARIO</h4>
                <p>
                  ESTA HABIERTA TODOS LOS DIAS<br>
                  24H
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>CORREO</h4>
                <p>fireofgame6644@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>NUMERO</h4>
                <p>+57 300 7567923</p>
              </div>

            </div>

          </div>

        </div>

      </div>
    </section>

  </main>

  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h1 class="logo me-auto me-lg-0"><a href="index.html"><a href="inner-page.html">FIRE</a> OF GAMES</a></h1>
              <p>
                 ERIC SEBASTIAN ACEVEDO<br>
                JUAN DAVID RODRIGUES<br>
                JUAN MANUEL BEDOYA MAZO<br><br>
                <strong>NUMERO:</strong>+57 300 7567923<br>
                <strong>CORREO:</strong> fireofgame6644@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>LINKS</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">INICIO</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">REGLAS</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#menu">FIGURAS</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#specials">CONSOLAS</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#events">EVENTOS</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#chefs">CREADORES</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#gallery">GALERIA</a></li>
            </ul>
          </div>


        </div>
      </div>
    </div>

    
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  
  <script src="assets/js/main.js"></script>

  <script>
    // Tiempo de inactividad deseado en milisegundos (15 minutos).
    var tiempoInactividad = 1 * 60 * 1000; // 15 minutos en milisegundos
    var contadorInactividad = 0;

    function restablecerContador() {
        contadorInactividad = 0;
    }

    function verificarInactividad() {
        contadorInactividad += 1000; // Añadir 1 segundo al contador cada segundo.

        // Si el contador de inactividad supera el tiempo de inactividad deseado, mostrar un mensaje y cerrar la sesión.
        if (contadorInactividad >= tiempoInactividad) {
            alert("Se ha detectado inactividad. Su sesión se cerrará automáticamente.");
            window.location.href = "formulario.html"; // Redirigir a la página de cierre de sesión.
        }
    }

    // Restablecer el contador de inactividad cuando el usuario realice una acción.
    document.addEventListener("mousemove", restablecerContador);
    document.addEventListener("keypress", restablecerContador);

    // Verificar la inactividad cada segundo.
    setInterval(verificarInactividad, 1000);
</script>

</body>

</html>