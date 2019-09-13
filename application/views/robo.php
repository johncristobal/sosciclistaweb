<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>En caso de robo...</title>

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url() ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?= base_url() ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=helvetica:400,700" rel="stylesheet" type="text/css">
  <!--link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'-->

  <!-- Custom styles for this template -->
  <link href="<?= base_url() ?>css/agency.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
   <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand <?= base_url() ?>js-scroll-trigger" href="#page-top">
            <img class="logo" src="<?= base_url()?>img/icono.png">
        </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <!--li class="nav-item">
            <a class="nav-link <?= base_url() ?>js-scroll-trigger" href="#services">Inicio</a>
          </li-->
          <li class="nav-item">
            <a class="nav-link <?= base_url() ?>js-scroll-trigger" href="<?= base_url()?>">Acerca de</a>
          </li>
          <li class="nav-item">
              <a class="nav-link <?= base_url() ?>js-scroll-trigger" href="<?= base_url()?>principal/robo">¿Cómo usar la APP en caso de robo?</a>
          </li>
          <li class="nav-item">
              <a class="nav-link <?= base_url() ?>js-scroll-trigger" href="<?= base_url()?>principal/nosotros">¿Quiénes somos?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= base_url() ?>js-scroll-trigger" href="#contact">Contacto</a>
          </li>
          <li class="nav-item">
              <a class="nav-link <?= base_url() ?>js-scroll-trigger" href="<?= base_url()?>">
                  <img class="buttonApp" src="<?= base_url()?>img/downloadapp.png">
              </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead" id="home" style="background-image: url('../img/banner44.png');">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in text-center customText">¿Cómo usar la APP en caso de robo?</div>
        <!--div class="intro-heading text-uppercase">It's Nice To Meet You</div-->
        <a class="btn btn-xl text-uppercase <?= base_url() ?>js-scroll-trigger" href="#services">
            <!--img class="store" src="<?= base_url()?>img/appstore.png"-->
        </a>
        <a class="btn btn-xl text-uppercase <?= base_url() ?>js-scroll-trigger" href="#services">
            <!--img class="store" src="<?= base_url()?>img/androidstore.png"-->
        </a>
      </div>
    </div>
  </header>

  
  <!--about it -->
  <section class="custom" id="services">
    <div class="">
      <!--div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Services</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
      </div-->
      <div class="row section1 mt-1">
        <div class="col-12 col-sm-3 text-center customtab ml-auto">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-reporte-tab" data-toggle="pill" href="#v-pills-reporte" role="tab" aria-controls="v-pills-reporte" aria-selected="true">Reportes de robo</a>
            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Me robaron la bici</a>
            <a class="nav-link" id="v-pills-serie-tab" data-toggle="pill" href="#v-pills-serie" role="tab" aria-controls="v-pills-serie" aria-selected="false">Número de serie</a>
            <a class="nav-link" id="v-pills-talleres-tab" data-toggle="pill" href="#v-pills-talleres" role="tab" aria-controls="v-pills-talleres" aria-selected="false">Talleres</a>
            <a class="nav-link" id="v-pills-acciones-tab" data-toggle="pill" href="#v-pills-acciones" role="tab" aria-controls="v-pills-acciones" aria-selected="false">Acciones S.O.S.</a>
            <a class="nav-link" id="v-pills-tips-tab" data-toggle="pill" href="#v-pills-tips" role="tab" aria-controls="v-pills-tips" aria-selected="false">Tips</a>
            </div>            
        </div>
        <div class="col-12 col-sm-8 ml-auto">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-reporte" role="tabpanel" aria-labelledby="v-pills-reporte-tab">
                    <div class="row ml-auto">
                        <div class="col-12 col-sm-8 mt-5">
                            <h2>
                                Reportes de robo
                            </h2>
                            <br>
                            <p class="probo">
                                Una de las 3 funciones principales de la aplicación es reportar el robo en tiempo real, si eres 
                                víctima del robo de tu bicicleta en algún estacionamiento, establecimiento o en tu casa, puedes
                                reportarlo directamente en la app, ésta generará un reporte y lo archivará en la base de datos,
                                donde cualquier ciclista podrá checarlo posteriormente, a la vez generará una alerta en tiempo
                                real y un registro en el mapa de localización que ayudará a alertar a todos los ciclistas que tengan
                                la app, mandándoles un aviso en un rango de 10 km, esto con la finalidad de ubicar al ladrón y
                                avisar a la víctima, para así tener altas probabilidades de recuperar la bicicleta, haciendo el
                                proceso de denuncia y recuperación correspondiente. 
                            </p>                            
                        </div>
                        <div class="col-4 mt-2 text-center d-none d-sm-block">
                            <img class="imgrobo" src="<?= base_url() ?>img/reportesscreen.png" />
                        </div>
                    </div>
                </div>
                
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="row ml-auto">
                        <div class="col-12 mt-5">
                            <h2>
                                Me robaron la bici ¿Qué hago?
                            </h2>
                            <p class="probo">
                                Si te han robado la bicicleta, deberás seguir los siguientes pasos para tener la base legal cuando quieras recuperarla:
                            </p>                            
                            <p>
                                DENUNCIAR ANTE EL MINISTERIO PÚBLICO
                            </p>
                            <p class="probo">
                                Para la denuncia...<br><br>
                                -Es importante que presentes # de serie, factura, fotos y testigos para acreditar la propiedad de tu bici.<br>
                                -Al presentar denuncia pide como evidencia las grabaciones de cámaras de vigilancia de la ciudad siempre y cuando hubiera una al momento del robo de tu bici.<br>
                                -También puedes presentar denuncia por internet en la siguiente dirección: www.pgjdf.gob.mx <br>
                                • Llenar formato único<br>
                                • Imprimir código de 32 dígitos <br>
                                • Copia de identificación<br>
                                • Presentarse en fecha y hora indicados<br>
                            </p>
                        </div>
                        
                    </div>
                </div>
                
                <div class="tab-pane fade" id="v-pills-serie" role="tabpanel" aria-labelledby="v-pills-serie-tab">
                    <div class="row ml-auto">
                        <div class="col-12 mt-5">
                            <h2>
                                Número de serie
                            </h2>
                            <br>
                            <p class="probo">
                                En la app podrás registrar el número de serie de tu bicicleta en la base de datos y así poder generar un registro único 
                                la cual nos ayudará de diferentes formas:<br><br>
                                1.- Podrás reportar el número de serie de tu bicicleta como robada directamente.<br>
                                2.- Al reportar tu número de serie como robado esto ayudará a disminuir la compra/venta de bicicletas robadas.<br>
                                3.- Seguridad dentro de la app; al registrarte tendrás que proporcionar datos verídicos al momento de pedir apoyo vial 
                                en tiempo real.<br>
                                4.- Si vas a comprar una bicicleta usada, podrás buscar en la base de datos el número de serie y saber si ya fue
                                reportada como robada.  <br>
                            </p>
                        </div>
                        
                    </div>
                </div>
                
                <div class="tab-pane fade" id="v-pills-talleres" role="tabpanel" aria-labelledby="v-pills-talleres-tab">
                    <div class="row ml-auto">
                        <div class="col-12 col-sm-8 mt-5">
                            <h2>
                                Mapa de talleres bici-mecánicos
                            </h2>
                            <br>
                            <p class="probo">
                                En el mapa GPS o de geolocalización podrás observar, en la mayor parte de la ciudad,
                                el registro de talleres mecánicos para bicicleta. Si tienes algún desperfecto o urgencia mecánica
                                en una zona que no conoces, puedes accesar al mapa y ubicar el taller mas cercano. También si
                                necesitas alguna pieza o accesorio algunos talleres cuentan con tienda o si  quires un punto para
                                descansar mientras reparan tu bici y tomar o comer algo algunos también son cafeterías.  Y para
                                más comodidad algunos bici-mecánicos son ambulantes o trabajan a domicilio, así que no tienes
                                pretexto para dejar de rodar. 
                            </p>                            
                        </div>
                        <div class="col-4 mt-2 text-center d-none d-sm-block">
                            <img class="imgrobo" src="<?= base_url() ?>img/talleresmecanicos.png" />
                        </div>
                    </div>
                </div>
                
                <div class="tab-pane fade" id="v-pills-acciones" role="tabpanel" aria-labelledby="v-pills-acciones-tab">
                    <div class="row ml-auto">
                        <div class="col-12 col-sm-8 mt-5">
                            <h2>
                                Acciones S.O.S.
                            </h2>
                            <br>
                            <p class="probo scrollp">
                               Dentro de la pantalla principal hay otros servicios y botones de ayuda, como son; avería, apoyo,
                               911, ciclovía y reporte     <br><br>
                               AVERÍA: Si tienes algún desperfecto y no hay talleres cerca de donde estás, podrás mandar
                                mensaje a los ciclistas que anden por la zona. Solo deja un mensaje anclado en el mapa o si es
                                urgente manda mensaje directamente al ciclista más cercano el cual podrá apoyarte si su
                                disposición lo permite.<br><br>

                                APOYO: Si tienes un percance con algún automovilista o problema en la ciclovía y requieres
                                apoyo de la comunidad ciclista, solo presiona el botón de alerta, éste mandará mensaje a 5 km
                                a la redonda a todos los ciclistas que anden cerca e irán apoyarte para tomar evidencia o siendo
                                testigos si el caso llega al ministerio público. También contará con convocatorias para vallas
                                ciclistas, se anclará el reporte en el mapa GPS y se informará a los ciclistas de dónde se llevará
                                a cabo dicha valla. <br><br>
                                
                                9.1.1: Si el probelma es con respecto a algún accidente víal, podrás llamar directamente a
                                emergencias al 9.1.1 y pedir el apoyo correspondiente. También se agregan las redes sociales
                                para un contacto y atención mas directo.   <br><br>

                                REPORTE DE ROBO: Como lo explicamos anteriormente, con este botón podrás reportar
                                tu bici robada en tiempo real, mandar alerta a los ciclistas que anden por la zona en un rango de
                                10 km y juntos poder evitar el robo. <br><br>

                                CICLOVÍA: Aquí podrás reportar problemas con la ciclovía a la comunidad ciclista, dejar anclados
                                al mapa GPS tu reporte y así prevenir a la comunidad ciclista de cualquier desperfecto sobre ésta
                            </p>                            
                        </div>
                        <div class="col-4 mt-2 text-center d-none d-sm-block">
                            <img class="imgrobo" src="<?= base_url() ?>img/accionesimage.png" />
                        </div>
                    </div>
                </div>
                
                <div class="tab-pane fade" id="v-pills-tips" role="tabpanel" aria-labelledby="v-pills-tips-tab">
                    <div class="row ml-auto">
                        <div class="col-12 col-sm-8 mt-5">
                            <h2>
                                Tips
                            </h2>
                            <br>
                            <p class="probo">
                                Dentro de tips, se incluyen las diferentes recomendaciones al momento de rodar en esta ciudad,
                                las recomendaciones de prevención para saber cómo encadenar tu bici y así evitar el robo, el
                                reglamento de tránsito donde señalamos los artículos que nos competen, los tipos de candados
                                que la comunidad ciclista ha recomendado y que nos pueden ayudar a mejorar nuestros
                                aditamentos de seguridad y mucho más tips, que con el tiempo se irán agregando.
                            </p>                            
                        </div>
                        <div class="col-4 mt-2 text-center d-none d-sm-block">
                            <img class="imgrobo" src="<?= base_url() ?>img/tipsimage.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--div class="col-md-6 no-padding">
            <img class="sectionImage" src="<?= base_url()?>img/banner1.png" >
        </div-->
      </div>
    </div>
  </section>
  
  <!--todo en una app -->
  <!-- Services -->
 

    <!-- Contact -->
  <?php $this->load->view("contacto"); ?>

  <!-- Footer -->
    <?php $this->load->view("footer"); ?>

  <!-- Portfolio Modals -->

  <!-- Modal 1 -->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Threads</li>
                  <li>Category: Illustration</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/02-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Explore</li>
                  <li>Category: Graphic Design</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 3 -->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/03-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Finish</li>
                  <li>Category: Identity</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 4 -->
  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Lines</li>
                  <li>Category: Branding</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 5 -->
  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Southwest</li>
                  <li>Category: Website Design</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 6 -->
  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Window</li>
                  <li>Category: Photography</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url() ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?= base_url() ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="<?= base_url() ?>js/jqBootstrapValidation.js"></script>
  <script src="<?= base_url() ?>js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?= base_url() ?>js/agency.min.js"></script>

</body>

</html>
