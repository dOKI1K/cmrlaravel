<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="robots" content="index">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Centro Medico Roca | SMA">
    <meta name="keywords" content="Centro Medico, Roca, San Martin de los Andes, CMR, Autogestion">
<!--<meta http-equiv="refresh" content="240">-->
    <meta name="Lahuen Milla" content="https://doki1k.github.io/Portfolio./">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="icon" href="img/img-cmr/logo-roca.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://kit.fontawesome.com/ff1de4e06d.js" crossorigin="anonymous"></script>
    <title>Centro Médico Roca</title>
</head>

<body>
    <header class="header">
        <div>
            <nav class="nav-main">
                <a href="{{ '/' }}"><img id="logoroca" src="/img/img-cmr/logo.png" alt="LOGO ROCA" /></a>
                <ul class="nav-menu">
                    <li>
                        <a href="{{ '/' }}" id="inicio-site" class="btn">Inicio</a>
                    </li>
                    <li class="turnos-celular">
                        <a href="turnos.html" class="btn2">Turnos</a>
                    </li>
                    <li>
                        <a href="{{ 'servicios' }}" id="servicios-site" class="btn">Servicios</a>
                    </li>
                    <li>
                        <a href="{{ 'novedades' }}" id="novedades-site"
                            class="btn">Novedades</a>
                    </li>
                    <li>
                        <a href="{{ 'contacto' }}" id="contacto-site"
                            class="btn">Contacto</a>
                    </li>
                    <li class="turnos-pc">
                        <a href="{{ 'turnos' }}" class="btn2">Turnos</a>
                    </li>
                </ul>
                <span class="responsive-menu">
                    <i class="fas fa-bars"></i>
                </span>
            </nav>
        </div>
        <div>
            <div class="main2">
                <div class="main2__ubication">
                    <a href="https://www.google.com/maps/place/San+Martin+de+los+Andes,+Neuqu%C3%A9n/data=!4m2!3m1!1s0x96110e743605d0c7:0x71c43ffb1c66bc3a?sa=X&ved=2ahUKEwjezM_KvLbyAhUNrJUCHUkoAAoQ8gEwL3oECHkQAQ"
                        target="blank"><i class="fas fa-map-marker-alt" style="color: #fff"></i></a>
                    <p id="loc">San Martín de los Andes</p>
                </div>
                <div class="main2__socialmedia">
                    <a id="fb" href="https://www.facebook.com/centromedicoroca/" target="_blank"><i class="fab fa-facebook" style="color: #fff"></i></a>
                    <a id="ig" href="https://www.instagram.com/centromedicoroca/" target="_blank"><i class="fab fa-instagram" style="color: #fff"></i></a>
                </div>
            </div>
        </div>
    </header>


    {{ $slot }}


    <script src="/js/app.js"></script>

    <footer>
        <div class="footer-main">
            <div>
                © 2021
                <a href="https://github.com/dOKI1K?tab=repositories">Lahuen Millañanco</a>, esta página no utiliza
                cookies ni ejecuta ningún otro proceso
                diferente a lo que muestra. Grupo Roca S.R.L. CUIT:3070866498 Grupo
                Roca Quirúrgico S.A. CUIT 30711593272
            </div>
        </div>
    </footer>
</body>

</html>

<script type="text/javascript">
    window.onload = mostrarInicio();
</script>