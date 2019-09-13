<section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="section-subheading text-muted">
            Contáctanos
          </h1>
          <h2 class="section-heading text-uppercase">
              <img src="<?= base_url()?>img/sos.png">
          </h2>
            <h3 class="section-subheading text-muted">
            Siguenos en nuestras redes sociales
          </h3>
        </div>
      </div>
      <div class="row centered text-center">
        <div class="col-2 text-center offset-2">
            <img class="minthumb" src="<?= base_url()?>img/faceweb.png" >          
        </div>
        <div class="col-2">
            <img class="minthumb" src="<?= base_url()?>img/twitterweb.png" >
        </div>
          <div class="col-2">
            <img class="minthumb" src="<?= base_url()?>img/instagramweb.png" >
        </div>
          <div class="col-2">
            <img class="minthumb" src="<?= base_url()?>img/youtubeweb.png" >
        </div>
      </div>
        <div class="row">
            <div class="col-12 text-center">
                <br>
            <h3 class="section-subheading text-muted text-center">
            Déjanos un mensaje
          </h3>

                <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" type="text" placeholder="Nombre" required="required" data-validation-required-message="Ingresa tu nombre.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="Correo" required="required" data-validation-required-message="Ingresa tu contraseña.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" type="tel" placeholder="Teléfono">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" placeholder="Mensaje" required="required" data-validation-required-message="Ingresa tu mensaje."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar</button>
              </div>
            </div>
          </form>
            </div>
        </div>
        <!--div class="row text-center mt-3">
            <div class="col-12">
                <br>
                <p>
                    2019 S.O.S ciclista
                </p>
            </div>
        </div-->
    </div>
  </section>