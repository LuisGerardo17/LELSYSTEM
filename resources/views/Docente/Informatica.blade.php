<!doctype html>
<html lang="es">

<head>
    <title>LELSYSTEM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('static/css/component3.css')}}" />
        <link rel="stylesheet" href="{{ asset('static/css/index.css')}}"/>
        <link rel="stylesheet" href="{{ asset('static/css/boton.css')}}"/>
        <link rel="stylesheet" href="{{ asset('static/css/fondo.css')}}"/>
</head>

<body>
    <header class="cabecera">
        <div class="container logo-container">
            <a href="#" ><img src="static/img/logo5.png" class="logo" width="135px" alt=""></a>
            <nav class="lista">
                <ul>
                    <li class="naa"><a href="{{route('oferta')}}">
                            <h5><b>Oferta Académica</b></h5>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <ul class="home">
        <li><a href="#" class="viñeta">Index / </a></li>
        <li><a href="#" class="viñeta">&nbsp;Archivos</a></li>
    </ul>
    <main>
        <h1 align="center" class="malla"><b>CURSO DE INFORMÁTICA</b></h1>
        <section class="central">
            <div class="centro">
                <iframe
                    src="https://onedrive.live.com/embed?cid=CEF7ECDA44C549B4&amp;resid=CEF7ECDA44C549B4%214293&amp;authkey=AB7KotYED52hn38&amp;em=2"
                    width="770px" height="550px" frameborder="0">Esto es un documento de <a target="_blank"
                        href="https://office.com">Microsoft Office</a> incrustado con tecnología de <a target="_blank"
                        href="https://office.com/webapps">Office</a>.</iframe><br>
                <div id="espacio"></div>

                <img id="imagenPrevisualizacion" align="center"><br><br>

                <input type="file" id="seleccionArchivos" class="aceptar" accept="image/*" width="300px" height="300px">
                <a href="{{route('informatica')}}"><button type="button" class="aceptar">&nbsp;&nbsp;&nbsp;&nbsp;<i
                            class="recargar icon ion-md-close"></i>
                        &nbsp;&nbsp;&nbsp;</button></a>

                <input type="file" id="file" class="aceptar"  width="300px" height="300px">
                <button id="boton" class="aceptar">&nbsp;&nbsp;&nbsp;&nbsp;<i class="recargar icon ion-md-add"></i>
                    &nbsp;&nbsp;&nbsp;</button>
                
            </div>
        </section>
    </main>
    <br><br>
    <section class="">

        <footer class="text-center text-white" style="background-color: rgb(62, 65, 68)">

            <div class="container p-4 pb-0">

                <section class="">
                    <p class="d-flex justify-content-center align-items-center">
                        <span class="me-3">Pagina Oficial &nbsp;</span>
                        <button type="button" class="btn btn-outline-light btn-rounded">
                            https://lelsystem@.edu.ec
                        </button>
                    </p>
                </section>

            </div>


            <div class="text-center p-3" style="background-color: rgb(5, 5, 5);">
                © 2022 @LELSYSTEM:
                <a class="text-white" href="https://mdbootstrap.com/">@LELSYSTEM.com</a>
            </div>
        </footer>
    </section>
    <script src="../js/prueba.js"></script>
    <script src="../js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>