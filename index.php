
<?php get_header(); ?>

<body>

  <section class="waiting">
    <video id="mivideo" autoplay loop muted>
      <source src="<?php echo get_template_directory_uri(); ?>/assets/video/landing.mp4" type="video/mp4"></source>
    </video>
    <div class="boton-center">
      <button type="button" class="btn btn-primary btn-block btn-large" data-toggle="modal" data-target="#exampleModalCenter">
        Más
      </button>
    </div>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="title-modal">
              <h5 class="modal-title" id="exampleModalLongTitle">Contáctanos</h5>
            </div>
        

            <!-- <div class="form">
              <form method="post" action="sendmail.php">
                <input class="effect-1" type="text" name="nombre" placeholder="Nombre" required="required" />
                <input class="effect-1" type="number" name="telefono" placeholder="Teléfono" required="required" />
                <input class="effect-1" type="email" name="correo" placeholder="Correo" required="required" />
              </form> -->
            </div>
            <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 1, 'title' => false, 'description' => false ) ); ?>
        
            <div class="modal-footer">
              <!-- <div class="re-flex">
              <div class="g-recaptcha" data-sitekey="clave-del-sitio">
        </div>
        <div class="flex">
              <button type="submit"  name="submit" class="btn btn-primary btn-block btn-large ">
             
                  Enviar
              </button>
</div>
</div> -->
            </div>
          </div>
        </div>
      </div>
      <div class="weight">
    <p>Info@entreverde.com.co</p>
  </div>
    </div>

  </section>



  <div class="weight d-none d-sm-block">
    <p>Info@entreverde.com.co</p>
  </div>

  <div class="icons">
    <p>

      <a href="https://www.facebook.com/entreverdeantioquia/?ref=br_rs" target="_blank">
        <i class="fa fa-facebook" aria-hidden="true"></i>
      </a>
      <a href="https://www.instagram.com/entreverde_/" target="_blank">
        <i class="fa fa-instagram" aria-hidden="true"></i>
      </a>
      <a href="https://api.whatsapp.com/send?phone=573008684986" target="_blank">
        <i class="fa fa-whatsapp" aria-hidden="true"></i>
      </a>
    </p>
  </div>
   <?php get_footer(); ?>
