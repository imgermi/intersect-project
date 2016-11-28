<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Intersect Project</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  </head>
  <body>
    <?php include 'header.php'; ?>

    <!-- BANNER -->
    <div class="banner">
      <div class="container">
        <h1>Creamos intersecciones digitales entre vos y tus clientes</h1>
        <p>Para superar la competencia tu sitio necesita un  diseño
          único, un desarrollo detallado y un posicionamiento
          excepcional.  Somos una agencia creativa que puede
          ayudarte a generar un producto distinto.</p>
          <img src="img/play-icon.png" alt="">
          <p>Ver Presentación</p>
      </div>
    </div>

    <!-- TRABAJOS -->
    <section class="trabajos">
      <div class="container">
        <h2>TRABAJOS</h2>

        <article class="nota primer">

        </article>
        <article class="nota">

        </article>

        <article class="nota primer">

        </article>

        <article class="nota">

        </article>


        <!-- CLEANER -->
        <div class="cleaner"></div>

        <a class="proceso-cta" href="#">VER PROCESO</a>

      </div>
    </section>

    <!-- SERVICIOS -->

    <section class="servicios">
      <div class="container">
        <h2>SERVICIOS</h2>

        <article class="service-note service-margin">

        </article>

        <article class="service-note service-margin">

        </article>

        <article class="service-note">

        </article>
      </div>
    </section>

    <!-- TEAM -->

    <section class="team">
      <div class="container">
        <h2>TEAM</h2>
        
        <!-- FIRST FILA -->
        <article class="team-note team-margin">

        </article>

        <article class="team-note team-margin">

        </article>

        <article class="team-note">

        </article>


        <!-- SECOND FILA -->
        <article class="team-note team-margin">

        </article>

        <article class="team-note team-margin">

        </article>

        <article class="team-note">

        </article>


        <!-- THIRD FILA -->
        <article class="team-note team-margin">

        </article>

        <article class="team-note team-margin">

        </article>

        <article class="team-note">

        </article>
      </div>
    </section>

    <!-- CONTACTO -->

    <section class="contacto">
      <div class="container">
        <h2>Contanos sobre tu proyecto</h2>

        <form class="contact-form">
          <input class="campos campos-margin"type="text" name="" value="" placeholder="Nombre">
          <input class="campos campos-margin"type="email" name="" value="" placeholder="Mail">
          <input class="campos"type="text" name="" value="" placeholder="Asunto">
          <textarea placeholder="Escriba su consulta" name="name" rows="8" cols="80"></textarea>
          <input class="boton" type="submit" name="" value="Enviar">
        </form>
      </div>
    </section>

    <!-- FOOTER -->
    <footer>
      <div class="container">

      </div>
    </footer>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <script type="text/javascript">

    $(document).ready(function (){
      $("#menu-1").click(function (){
          $('html, body').animate({
              scrollTop: $(".trabajos").offset().top
          }, 500);
      });
    });

    $(document).ready(function (){
      $("#menu-2").click(function (){
          $('html, body').animate({
              scrollTop: $(".servicios").offset().top
          }, 500);
      });
    });

    $(document).ready(function (){
      $("#menu-3").click(function (){
          $('html, body').animate({
              scrollTop: $(".team").offset().top
          }, 500);
      });
    });

    $(document).ready(function (){
      $("#menu-4").click(function (){
          $('html, body').animate({
              scrollTop: $(".contacto").offset().top
          }, 500);
      });
    });

    $(document).ready(function (){
      $("#logo-click").click(function (){
          $('html, body').animate({
              scrollTop: $(".banner").offset().top
          }, 500);
      });
    });

    </script>

  </body>
</html>
