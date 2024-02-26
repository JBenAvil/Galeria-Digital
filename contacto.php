<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link href="/style.css" rel="stylesheet" type="text/css"/>
  <!-- icono barra de navegación internet -->
  <link rel="icon" href="/static/icon/icon_galería.png">
  <!-- titulo barra de navegación internet -->
  <title>Galeria Digital</title>
  <!-- link icon de google -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <!-- link boostrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- script boostrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <!-- script proyecto -->
  <script src="script.js"></script>
  <!-- script recaptcha apii de Google -->
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
  <!-- Script para Google analitycs -->
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-WV909YDDBB"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-WV909YDDBB');
  </script>
  <header>
    <!-- barra de navegación -->
    <nav class="navbar navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="/index.html">
          <img style="height: 30px; width: 30px;" src="/static/icon/icon_galería.png"> Galería Digital</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header">
            <a class="navbar-brand" href="galeriaDigital.html">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"> 
              <img style="height: 30px; width: 30px;" src="/static/icon/icon_galería.png"> 
              Galería Digital</h5></a>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/nosotros.html">Nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/nuestrosServicios.html">Nuestros Sevicios</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Categorías
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item" href="/departamentos.html">
                    <span class="material-symbols-outlined">
                     apartment
                    </span> Departamentos</a></li>
                  <li><a class="dropdown-item" href="/casas.html">
                    <span class="material-symbols-outlined">
                    home
                    </span> Casas</a></li>
                  <li><a class="dropdown-item" href="/casasPrefabricadas.html">
                    <span class="material-symbols-outlined">
                    home_app_logo
                    </span> Casas Prefabricadas</a></li>
                  <li><a class="dropdown-item" href="/hospedaje.html">
                    <span class="material-symbols-outlined">
                    night_shelter
                    </span> Hospedaje</a></li>
                  <li><a class="dropdown-item" href="/oficinas.html">
                    <span class="material-symbols-outlined">
                    location_home
                    </span> Oficinas</a></li>
                  <li><a class="dropdown-item" href="/terrenos.html">
                    <span class="material-symbols-outlined">
                    home_pin
                    </span> Terrenos</a></li>
                  <li><a class="dropdown-item" href="/bodegas.html">
                    <span class="material-symbols-outlined">
                    deployed_code_alert
                    </span> Bodegas</a></li>
                  <li><a class="dropdown-item" href="/vehiculos.html">
                    <span class="material-symbols-outlined">
                    airport_shuttle
                    </span> Vehículos</a></li>
                  <li><a class="dropdown-item" href="/servicios.html">
                    <span class="material-symbols-outlined">
                    person_search
                    </span> Servicios</a></li>
                </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <!-- body -->
<body>
  <br>
  <br>
  <br>
<br>
<h1 style="color: #0FB0F6;" class="card-body">AGENDA UNA REUNIÓN CON NOSOTROS</h1>
  <br>

  <div class="form-contac">
    <form action="contacto.php" method="POST">
      <label for="nombre"><b>Nombre:</b></label>
      <input type="text" id="nombre" name="nombre" required><br><br>

      <label for="apellido"><b>Apellido:</b></label>
      <input type="text" id="apellido" name="apellido" required><br><br>

      <label for="rut"><b>RUT:</b></label>
      <input type="text" id="rut" name="rut" required><br><br>

      <label for="mail"><b>Email:</b></label>
      <input type="email" id="mail" name="mail" required><br><br>

      <label for="telefono"><b>Teléfono:</b></label>
      <input type="tel" id="telefono" name="telefono" required><br><br>

      <!--fieldset>
          <legend>Método de Financiamiento:</legend>
          <input type="checkbox" id="credito" name="metodo_financiamiento" value="credito_hipotecario">
          <label for="credito">Crédito Hipotecario</label><br>
          <input type="checkbox" id="contado" name="metodo_financiamiento" value="al_contado">
          <label for="contado">Al Contado</label><br>
      </fieldset><br> -->

      <label for="metodo"><b>Elije el Método de financiamiento:</b></label>
      <select id="metodo" name="metodo">
          <option value="credito">Crédito Hipotecario</option>
          <option value="contado">Al contado</option>
      </select>

        <label for="edificio"><b>Elije tu Departamento:</b></label>
            <select id="edificio" name="edificio">
                <option value="Edificio Ferrer, Las Condes">Edificio Ferrer, Las Condes</option>
                <option value="Edificio Magno, Las Condes">Edificio Magno, Las Condes</option>
                <option value="Edificio Milan, San Miguel">Edificio Milan, San Miguel</option>
                <option value="Edificio Los Leones, Ñuñoa">Edificio Los Leones, Ñuñoa</option>
                <option value="Edificio Los Almendros, Reñaca<">Edificio Los Almendros, Reñaca</option>
                <option value="Edificio Terralta, Las Condes">Edificio Terralta, Las Condes</option>
                <option value="Edificio Pocuro, Providencia">Edificio Pocuro, Providencia</option>
                <option value="Edifico Zañartu, Ñuñoa">Edifico Zañartu, Ñuñoa</option>
                <option value="Edificio Los Alerces, Ñuñoa">Edificio Los Alerces, Ñuñoa</option>
                <option value="Laguna de la Pirámide, Ciudad Empresarial">Laguna de la Pirámide, Ciudad Empresarial</option>
                <option value="Edificio Euclides, San Miguel">Edificio Euclides, San Miguel</option>
                <option value="Edificio El Rodeo, La Dehesa">Edificio El Rodeo, La Dehesa</option>
                <option value="Edificio Los Almendros, Huechuraba">Edificio Los Almendros, Huechuraba</option>
                <option value="Edificio Entre Sauces, La Dehesa">Edificio Entre Sauces, La Dehesa</option>
                <option value="Edificio Geo, Peñalolen">Edificio Geo, Peñalolen</option>
                <option value="Edificio Helium, Providencia">Edificio Helium, Providencia</option>
                <option value="Edificio Brigth, Vitacura">Edificio Brigth, Vitacura</option>
                <option value="Jardín Costanera, Lo Barnechea">Jardín Costanera, Lo Barnechea</option>
                <option value="Edificio Candelaría, Vitacura">Edificio Candelaría, Vitacura</option>
                <option value="Edificio Querétaro, Vitacura">Edificio Querétaro, Vitacura</option>
                <option value="Edificio Portofino, Las Condes">Edificio Portofino, Las Condes</option>
                <!-- Podemos elegir Edificios, Proyecto, Inmobiliarias, etc. según la necesidad del momento -->
            </select>
          <br>
          <br>
          <section class="btn-enviar">
          <div class="g-recaptcha" data-sitekey="6LfXR3IpAAAAABB_5LolXp_C_xKrw90JHapKmj_q"></div>
          <br>
          <input type="submit" value="Enviar">
          </section>
      </form>
      <?php
        if (issent($_POST["Enviar"])){
          $nombre=$_POST["nombre"];
          $apellido=$_POST["apellido"];
          $rut=$_POST["rut"];
          $mail=$_POST["mail"];
          $telefono=$_POST["telefono"];
          $metodo=$_POST["metodo"];
          $edificio=$_POST["edificio"];
    
          $destino="biocenter.contactanos@gmail.com";
          $asunto="solicitud de reunión"
    
          $contenido="nombre: $nombre \n";
          $contenido.="apellido: $apellido \n";
          $contenido.="rut: $rut \n";
          $contenido.="mail: $mail \n";
          $contenido.="telefono: $telefono \n";
          $contenido.="metodo: $metodo \n";
          $contenido.="edificio: $edificio;
    
          $header="From: galeria@digital.com";
          
          $mail=mail($destino, $asunto, $contenido, $header);
    
          if($mail){
            echo "<script>alert('El formulario fue enviado correctamente');</script>";
          }else{
            echo "<script>alert('El formulario no se envio');</script>";
          }
        }
    
          
          
          
          

      ?>
    
      </div>

<br>
<br>
<br>
</body>
<!-- sección de pie de página -->
<footer class="footer">
<div class="fond_galeria_digital">
  <img src="/static/img/galería.png">
</div>
<br>
<br>
<section class="contactos">
<div>
    <div class="red">
  <a href="https://www.instagram.com/galeria_digital_red/">
  <img class="img" title="ir a Instagram" src="/static/icon/instagram.png" alt="..."></a>
      <div class="red">
  <a href="https://www.facebook.com/profile.php?id=61552780670164">
  <img class="img" title="ir a Facebook" src="/static/icon/facebook.png" alt="..."></a>
        <div class="red">
  <a href="https://wa.me/56921951687">
  <img class="img" title="ir a Whattsapp" src="/static/icon/wts.png" alt="..."></a>
        </div>
      </div>
    </div>
</div>
</section>
<br> 
<div class="pie_accesos">
  <p class="pie_center">© Copyright 2020</p>
</div>
<section>
<div class="cook-pp">
  <a class="pie_right" href="politicas_de_privacidad.html">Políticas de Privacidad y uso de cookies</a>
</div>
</section>
</footer>
</html>