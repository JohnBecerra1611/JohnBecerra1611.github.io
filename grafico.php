<?php

include_once 'conexion.php';

?>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <br>
  <br>
  <br>
  <br>
  <br>
  <link rel="stylesheet" href="css/registro.css">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {
      'packages': ['bar']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Participantes', 'Puntuacion'],
        <?php
        $SQL = "SELECT * FROM participantes";
        $consulta = mysqli_query($conn, $SQL);
        while ($resultado = mysqli_fetch_assoc($consulta)) {
          echo "['" . $resultado['nombre_coche'] . "', " . $resultado['puntuacion'] . "],";
        }
        ?>
      ]);

      var options = {
        chart: {
          title: 'Participantes de la carrera de coches',

        }
      };

      var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

      chart.draw(data, google.charts.Bar.convertOptions(options));
    }
  </script>

  <link href="css/banner.css" rel="stylesheet" />
  <link href="css/barraizq.css" rel="stylesheet" />
  <link href="css/calendar.css" rel="stylesheet" />
  <link href="css/menudenavegacion.css" rel="stylesheet" />
  <link href="css/listadeeventos.css" rel="stylesheet" />
  <link href="css/listadeeventosquitarlink.css" rel="stylesheet" />

  <title>Document</title>
  <!--export para el footer-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.utcalvillo.edu.mx/css/default/swiper-bundle.min.css" />
  <link rel="stylesheet" type="text/css" href="https://www.utcalvillo.edu.mx/css/default/styles.css" />
  <link rel="stylesheet" type="text/css" href="https://www.utcalvillo.edu.mx/css/default/m-styles.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans:ital,wght@1,300&display=swap" rel="stylesheet">

</head>

<header>
  <nav class="fixed-top" id="mainNav">
    <div id="padre" class="container">
      <div class="logo">


        <input id="rasgadura1" type="image" src="img/rasgadura2.png" />
        <input id="newutcchido" type="image" src="img/newutcchido.png" />


        <p id="redes">
          <a href="https://www.facebook.com/UTCalvillo/" target="_blank"><img id="iconoderedes" src="https://www.utcalvillo.edu.mx/img/logos_redes/facebook.png" alt="facebook" class="imagen-redessociales" /></a>
          <a href="https://twitter.com/UtCalvillo?lang=es" target="_blank"><img id="iconoderedes" src="https://www.utcalvillo.edu.mx/img/logos_redes/twitter.png" alt="twitter" class="imagen-redessociales" /></a>
          <a href="https://www.instagram.com/ut.calvillo/" target="_blank"><img id="iconoderedes" src="https://www.utcalvillo.edu.mx/img/logos_redes/instagram.png" alt="instagram" class="imagen-redessociales" /></a>
          <a href="https://www.youtube.com/channel/UCopo_s1NMNZyd3s5N2W8Wwg" target="_blank"><img id="iconoderedes" src="https://www.utcalvillo.edu.mx/img/logos_redes/youtube.png" alt="youtube" class="imagen-redessociales" /></a>
        </p>
      </div>

    </div>

  </nav>
</header>

<div>
  <ul id="menu">
    <li><a href="home.html">Inicio</a></li>
    <li><a href="https://www.utcalvillo.edu.mx/">UTCalvillo</a></li>
    <li><a href="http://miescuela.utcalvillo.edu.mx/">Mi Escuela</a></li>
    <li><a href="http://moodle.utcalvillo.edu.mx/">Moodle</a></li>
    <li><a href="https://app.saeko.io/">Saeko</a></li>
    <li><a href="https://www.utcalvillo.edu.mx/inicio/menu/normateca">Normateca</a></li>
    <li><a href="https://www.utcalvillo.edu.mx/inicio/menu/contacto">Contacto</a></li>
    <li><a href="https://www.utcalvillo.edu.mx/documentacion/index/becas">Becas</a></li>
    <li><a href="organigrama.html">Organigrama</a></li>
    <li><a href="oferta_educativa.html">Oferta educativa</a></li>
  </ul>
</div>
<br>

<body>
  <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
  <li><a href="registrarparticipantes.html">Hacer un nuevo registro</a></li>
  <a class="link" id="inicioboton" href="evento_carrito.html">« regresar</a></p>
  <br>
<footer>
        <div class="row justify-content-center "
            style="border-bottom: 1px gray solid; border-top: 1px gray solid; padding-top: 20px;">
            <div class="col-lg-8">
                <div class="row justify-content-center ">
                    <div class="col-lg text-center p-3">
                        <a href="http://sistemas.utcalvillo.edu.mx/ContraloriaSocial/" target="_blank"> <img
                                src="https://www.utcalvillo.edu.mx/img/logos_externos/contraloria_social.png"
                                height="70px"></a>
                    </div>
                    <div class="col-lg text-center p-3">
                        <a href="https://drive.google.com/drive/folders/1cCweLYcwjSSoaE9dV8XGWTv8m_ICflyl"
                            target="_blank"> <img src="https://www.utcalvillo.edu.mx/img/logos_externos/sgc.png"></a>
                    </div>
                    <!-- <div class="col-lg text-center p-3">
                        <a href="https://redinags.org.mx/revista.php" target="_blank"> <img src="https://www.utcalvillo.edu.mx/img/logos_externos/redinags.png"></a>
                   </div>-->
                    <div class="col-lg text-center p-3">
                        <a href="http://sistemas.utcalvillo.edu.mx/SisBuzonDigital/" target="_blank"> <img
                                src="https://www.utcalvillo.edu.mx/img/logos_externos/buzon.png"></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center p-4 infoextra">
            <div class="col-lg-10">
                <div class="row justify-content-center ">
                    <div class="col-lg ">
                        <p class="add">CARRETERA AL TEPETATE, NO.102 COL. EL SALITRE, C.P. 20860,<br>
                            CALVILLO, AGUASCALIENTES</p>
                        <p class="tels"> <img src="img/phone-alt-solid.svg" style="width:20px;">&nbsp;
                            <a href="tel:4959565063">4959565063</a>
                            /
                            <a href="tel:4959565064">4959565064</a>
                            /
                            <a href="tel:4959565359">4959565359</a>
                        </p>
                        <br>
                        <h6>¡Síguenos en nuestras Redes¡</h6>
                        <p id="message">
                            <a href="https://www.facebook.com/UTCalvillo/" target="_blank"><img
                                    src="https://www.utcalvillo.edu.mx/img/logos_redes/facebook.png" alt="facebook"
                                    width="60px;" class="imagen-redessociales" /></a>
                            <a href="https://twitter.com/UtCalvillo?lang=es" target="_blank"><img
                                    src="https://www.utcalvillo.edu.mx/img/logos_redes/twitter.png" alt="twitter"
                                    width="60px;" class="imagen-redessociales" /></a>
                            <a href="https://www.instagram.com/ut.calvillo/" target="_blank"><img
                                    src="https://www.utcalvillo.edu.mx/img/logos_redes/instagram.png" alt="instagram"
                                    width="60px;" class="imagen-redessociales" /></a>
                            <a href="https://www.youtube.com/channel/UCopo_s1NMNZyd3s5N2W8Wwg" target="_blank"><img
                                    src="https://www.utcalvillo.edu.mx/img/logos_redes/youtube.png" alt="youtube"
                                    width="60px;" class="imagen-redessociales" /></a>
                        </p>
                    </div>
                    <div class="col-lg-auto text-left ">
                        <h6 style="border-bottom: 1px solid #ffffff;">Avisos de Privacidad:</h6>
                        <ul>
                            <li><a href="/usermedia/avisos_privacidad/aviso_privacidad_integral_general.pdf" title=""
                                    target="_blank">Integral General</a></li>
                            <li><a href="/usermedia/avisos_privacidad/aviso_privacidad_recursos_humanos.pdf" title=""
                                    target="_blank">Integral para Recursos Humanos</a></li>
                            <li><a href="/usermedia/avisos_privacidad/aviso_privacidad_servicios_proveedores.pdf"
                                    title="" target="_blank">Integral para Servicios y Provedores</a></li>
                        </ul>
                        <br>
                        <a href="/usermedia/otros/PROTOCOLO Y MEDIDAS DE PREVENCION_UT CALVILLO.pdf" target="_blank"
                            class="float-right">
                            <img src="img/head-side-mask-solid.svg" style="color:#ffffff; width:30px;">
                            <h6>Medidas COVID-19</h6>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    </div>
    <div class="modal_" id="modal_">

    </div>
    <script src="https://www.utcalvillo.edu.mx/js/jquery-3.5.1.min.js"></script>
    <script src="https://www.utcalvillo.edu.mx/js/swiper-bundle.min.js"></script>
    <script src="https://www.utcalvillo.edu.mx/js/local.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $.get("/inicio/banner/", function (html) {
                $("#modal_").empty();
                $(html).appendTo('#modal_').modal();
            });
        });
    </script>
</body>
<br>
<br>


