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

  <?php
    if($_POST["message"]) {

    mail("biocenter.contactanos@email.address", "Here is the subject line",

    $_POST["insert your message here"]. "From: biocenter.contactanos@email.address");
  }
  ?>

  <div class="form-contac">
    <form method="post" action="mailto:biocenter.contactanos@gmail.com">
      <label for="nombre"><b>Nombre:</b></label>
      <input type="text" id="nombre" name="nombre" required><br><br>

      <label for="apellido"><b>Apellido:</b></label>
      <input type="text" id="apellido" name="apellido" required><br><br>

      <label for="email"><b>Email:</b></label>
      <input type="email" id="email" name="email" required><br><br>

      <label for="telefono"><b>Teléfono:</b></label>
      <input type="tel" id="telefono" name="telefono" required><br><br>

        <label for="edificio"><b>Elije tu Terreno:</b></label>
            <select id="edificio" name="edificio">
                <option value="Altamar, Lagunilla S/N, Matanza, Latitud Sur">Altamar, Lagunilla S/N, Matanza, Latitud Sur</option>
                <option value="La Campana, Cerro La Campana S/N, Navidad, Latitud Sur">La Campana, Cerro La Campana S/N, Navidad, Latitud Sur</option>
                <option value="Palo Negro, Pupuya Alto S/N, Navidad, Latitud Sur">Palo Negro, Pupuya Alto S/N, Navidad, Latitud Sur</option>
                <option value="Propiedad Agroindustrial, San Ignacio">Propiedad Agroindustrial, San Ignacio</option>
                <option value="Terreno Agrícola, San Ignacio">Terreno Agrícola, San Ignacio</option>
                <option value="Campo de 320 hectáreas, Aguas de Río Nevado">Campo de 320 hectáreas, Aguas de Río Nevado</option>
                <option value="Terreno 1.286 m2, Florida USA">Terreno 1.286 m2, Florida USA</option>
                <option value="Terreno 942 m2, Florida USA">Terreno 942 m2, Florida USA</option>
                <option value="Terreno 932 m2, Florida USA">Terreno 932 m2, Florida USA</option>
                <option value="Terreno 929 m2, Florida USA">Terreno 929 m2, Florida USA</option>
                <option value="Terreno 935 m2, Florida USA">Terreno 935 m2, Florida USA</option>
                <option value="Terreno 924 m2, Florida USA">Terreno 924 m2, Florida USA</option>
                
                
                <!-- Podemos elegir Edificios, Proyecto, Inmobiliarias, etc.según la necesidad del momento -->
            </select>
          <br>
          <br>
          <section class="btn-enviar">
          <div class="g-recaptcha" data-sitekey="6LfXR3IpAAAAABB_5LolXp_C_xKrw90JHapKmj_q"></div>
          <br>
          <input type="submit" value="Enviar">
          </section>
      </form>
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