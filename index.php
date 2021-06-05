<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/paper.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Zahira Abdala CV</title>
    <?php 
    error_reporting(0);

      if($_POST['boton'] == 1){
        $name = $_POST['nombre'];
        $email = $_POST['correo'];
        $mensaje = $_POST['mensaje'];

        $pop = "👉Gracias $name por dejar tu mensaje, en breve enviamos una respuesta a $email";  
  
      } 
      ?> 
  </head>
  <body>
    <header>
      <nav class="border fixed split-nav">
        <div class="nav-brand">
          <h3><a href="#">José Sandino</a></h3>
        </div>
        <div class="collapsible">
          <input id="collapsible1" type="checkbox" name="collapsible1" />
          <label for="collapsible1">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
          </label>
          <div class="collapsible-body">
            <ul class="inline">
              <li><a href="#project">Proyectos</a></li>
              <li><a href="#contact">Contacto</a></li>
              <li>
                <a href="https://github.com/josesandino" target="_blank"
                  >Github</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div class="to-top">
      <a href="#" class="paper-btn margin">^</a>
    </div>
    <div id="hero">
      <img
        src="https://pbs.twimg.com/profile_images/1359854762729082891/908G_xj-_400x400.jpg"
        class="float-left"
      />
      <p class="text-lead">
        Hola! Soy José Sandino. <strong>Desarrollador PHP FullStack</strong>.
        <br />
        Si necesitas digitalizar tus ideas, llegaste al perfil adecuado.
      </p>
    </div>
    <div id="resultado" class="text-center">
          <p><?php error_reporting(0); echo $pop; ?></p>
        </div>
    <!-- Contenedor hero -->
    <div id="project">
      <h2>Proyectos</h2>

      <div class="row flex-spaces tabs">
        <input id="tab1" type="radio" name="tabs" checked />
        <label for="tab1">Proyecto 1</label>

        <input id="tab2" type="radio" name="tabs" />
        <label for="tab2">Proyecto 2</label>

        <input id="tab3" type="radio" name="tabs" />
        <label for="tab3">Proyecto 3</label>

        <div class="content" id="content1">
          <div class="card" style="width: 100%">
            <div class="card-body text-center">
              <h4 class="card-title">Tienda Web</h4>
              <h5 class="card-subtitle">Pañalera Web</h5>
              <p class="card-text">Tienda Web de pañales. Ecommerce.</p>
              <a
                class="projectLink"
                href="http://tubebefeliz.com/"
                target="_blank"
                ><button popover-top="Tubebefeliz">Proyecto</button></a
              >
            </div>
            <img
              class="image-bottom"
              src="imagenes\tubebefeliz.com_.png"
              alt="Card example image"
              popover-top="Popover on top"
            />
          </div>
        </div>
        <div class="content" id="content2">
          <div class="card" style="width: 100%">
            <div class="card-body text-center">
              <h4 class="card-title">Pagina Web</h4>
              <h5 class="card-subtitle">Web de Emprendedores</h5>
              <p class="card-text">Pagina web sobre emprendedores.</p>
              <a
                class="projectLink"
                href="http://isdedigital.com/"
                target="_blank"
                ><button popover-top="ISDE Digital">Proyecto</button></a
              >
            </div>
            <img
              class="image-bottom"
              src="imagenes\www.isdedigital.com_.png"
              alt="Card example image"
              popover-top="Popover on top"
            />
          </div>
        </div>
        <div class="content" id="content3">
          <div class="card" style="width: 100%">
            <div class="card-body text-center">
              <h4 class="card-title">Pagina Web</h4>
              <h5 class="card-subtitle">Web de Talento Humano</h5>
              <p class="card-text">Pagina web sobre talento humano.</p>
              <a
                class="projectLink"
                href="http://palancazo.com/"
                target="_blank"
                ><button popover-top="Palancazo">Proyecto</button></a
              >
            </div>
            <img
              class="image-bottom"
              src="imagenes\palancazo.com_.png"
              alt="Card example image"
              popover-top="Popover on top"
            />
          </div>
        </div>
      </div>
    </div>
    <div id="contact">
      <div id="info">
        <h2>Contactame</h2>
        <p>
          Puedes contactarme en las redes sociales o puedes dejar tu mensaje en
          el formulario
        </p>
        <h4>Estas son mis redes sociales</h4>
        <div id="social">
          <a href="https://twitter.com/joansamo01" target="_blank"
            ><i class="fab fa-twitter"></i
          ></a>
          <a href="https://www.instagram.com/joansamo01/" target="_blank"
            ><i class="fab fa-instagram"></i
          ></a>
          <a href="https://www.linkedin.com/in/josesandino/" target="_blank"
            ><i class="fab fa-linkedin-in"></i
          ></a>
          <a href="https://github.com/josesandino" target="_blank"
            ><i class="fab fa-github"></i
          ></a>
          <a href="https://gitlab.com/josesandino" target="_blank"
            ><i class="fab fa-gitlab"></i
          ></a>
        </div>
       
      </div>
      <div id="formulario">
        <h2>Contacto</h2>
        <form action="index.php" method="POST" id="form2">
          <div class="form-group">
            <div class="form-group">
              <label for="name">Nombre</label>
              <input type="text" placeholder="Nombre" name="nombre" id="name" />
            </div>
            <div class="form-group">
              <label for="email">Correo</label>
              <input type="email" placeholder="Correo electronico" name="correo" id="email" />
            </div>
            <div class="form-group">
              <label for="mensaje">Mensaje</label>
              <textarea
                name="mensaje" id="mensaje"
                placeholder="Escribe tu mensaje"
              ></textarea>
            </div>
            <div class="row">
              <div class="col-11">
                <button class="btn-block" id="enviar" name="boton" value=1>Enviar</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div id="page">
    
   
    </div>

    <footer class="nav-brand border text-center">
      <p>Todos los derechos reservados.</p>
    </footer>
  </body>
</html>
