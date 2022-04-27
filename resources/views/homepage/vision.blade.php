<!doctype html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="{{ asset('static/css/estilos3.css') }}"/>
	<title>LELSISTEM</title>
</head>

<body>
	<header>
		<div id="fondo">
			<a href="../../index.html">
				<img src="static/img/logo5.png" class="logo" width="135px" alt="">
			</a>
			<nav class="menu">
				<ul class="nav lista">
					<li class="nav-item">
						<div class="dropdown desplegable">
							<button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
								aria-expanded="false">
								Quienes somos
							</button>
							<ul class="dropdown-menu menua" aria-labelledby="dropdownMenuButton1">
								<li><a class="dropdown-item color" href="{{route('historia')}}">Historia</a></li>
								<li><a class="dropdown-item color" href="{{route('vision')}}">Visió
									
									
									n</a></li>

							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a href="{{route('oferta')}}" class="nav-link marign">Oferta academica</a>
					</li>
					<li class="nav-item">
						<a class="nav-link marign" href="{{route('contactos')}}">Contactos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link marign" href="{{route('admisiones')}}">Admisiones</a>
					</li>
					<li class="nav-item sesiones">
						<a class="nav-link marign colorq" href="{{route('login')}}">Dashboard</a>
					</li>
				</ul>
			</nav>
			<br><br><br><br>
		</div>

		<div class="bajo">
			<nav class="navbar navbar-light bg-light">
				<div class="container-fluid fondobajo">
					<img src="../../img/logo.jpeg"  width="150px" alt="">
					<!--<p class="bajologo">@LELSYSTEM</p>-->
					<button class="navbar-toggler boton" type="button" data-bs-toggle="offcanvas"
						data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
						<img src="../../img/menu.png" class="posicionq" alt="">
					</button>
					<div class="offcanvas offcanvas-end cuadro" tabindex="-1" id="offcanvasNavbar"
						aria-labelledby="offcanvasNavbarLabel">
						<div class="offcanvas-header">
							<h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
							<button type="button" class="btn-close text-reset X" data-bs-dismiss="offcanvas"
								aria-label="Close"></button>
						</div>
						<div class="offcanvas-body">
							<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
								<li class="nav-item">
									<div class="dropdown desplegablebajo">
										<button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
											aria-expanded="false">
											Quienes somos
										</button>
										<ul class="dropdown-menu menua" aria-labelledby="dropdownMenuButton1">
											<li><a class="dropdown-item colorbajo" href="{{route('historia')}}">Historia</a></li>
											<li><a class="dropdown-item colorbajo" href="{{route('vision')}}">Vision</a></li>

										</ul>
									</div>
								</li>
								<li class="nav-item">
									<a href="{{route('oferta')}}" class="blancoo">Oferta academica</a>
								</li>
								<li class="nav-item">
									<a class="blanco" href="{{route('contactos')}}">Contactos</a>
								</li>
								<li class="nav-item">
									<a class="blancooo" href="{{route('admisiones')}}">Admisiones</a>
								</li>
								
								<li class="nav-item ">
									<center><a class="blanco sesionesbajos" href="{{route('login')}}">Iniciar Sesion</a></center>
								</li>
							</ul>

						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>


	<main>
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb ">
				<li class="breadcrumb-item"><a href="/homepage">Principal</a></li>
				<li class="breadcrumb-item active" aria-current="page">Vision</li>
			</ol>
		</nav>
		<div class="row my-4">
			<center><img src="https://gcloudassets.unini.org/unini/files/styles/programas_610x272_/public/2019-06/ima-uninipr-meees.jpg?itok=gUsI5bE-" alt="" class="hola" ></center>
		</div>
		<div class="row my-4">
			<div class="col"><h2>Misión</h2><p>	
				Formar profesionales de excelencia de nivel Técnico y Tecnológico que promuevan, integren y apliquen sus conocimientos en turismo, patrimonio cultural y carreras afines para ofrecer una respuesta a las necesidades del sistema turístico a través de la conservación y restauración de bienes arquitectónicos, arqueológicos, históricos y artísticos y de esta manera fortalecer las identidades nacionales.</p></div>
			<div class="col"><center><img src="https://yavirac.edu.ec/wp-content/uploads/2020/01/mision.jpg" alt="img1"></center></div>
		</div>
		<div class="row pb-2">
			<div class="col"><center><img src="https://yavirac.edu.ec/wp-content/uploads/2019/03/vision.jpg" alt="img2"></center></div>
			<div class="col"><h2>Visión</h2><p>	Al 2020 el Instituto Superior Tecnológico de Turismo y Patrimonio Yavirac será la institución líder en la formación profesional de técnicos y tecnólogos superiores en turismo, patrimonio cultural y carreras afines con un modelo pedagógico de alto rigor académico y científico en la recuperación y proyección de la memoria histórica, basado en valores sociales y éticos universales.</p></div>
			
		</div>
	</div>
	</main>
	<footer id="footer" class="top-space">
		<div class="footer1">
			<div class="container padin">
				<div class="row">

					<div class="col-md widget">
						<h3 class="widget-title">Contactanos</h3>
						<div class="widget-body">
							<p>+593 999999999<br>
								<a href="mailto:esy.mera@yavirac.edu.ec"><i class='bx bxl-gmail border-icon'></i></a><br>
								
							</p>
						</div>
					</div>

					<div class="col-md widget">
						<center>
							<h3 class="widget-title">Visitanos en</h3>
						</center>
						<div class="widget-body">
							<p class="follow-me-icons iconos">
								<a href=""><i class="bx bxl-instagram fa-2 border-icon"></i></a>
								<a href=""><i class='bx bxl-discord-alt border-icon'></i></a>
								<a href=""><i class="bx bxl-facebook-circle border-icon"></i></a>
							</p>
						</div>
					</div>

					

				</div>
			</div>
		</div>

	<br>
		<div class="footer2">
			<div class="container padin">
				<div class="row">
						<div class="widget-body">
							<center><p class="text-right">
								Copyright &copy; 2022. Designed by @LELSYSTEM
							</p></center>
						</div>
				</div>
			</div>
		</div>
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
		crossorigin="anonymous"></script>

</body>

</html>