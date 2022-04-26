<!doctype html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="{{ asset('static/css/contactanos.css') }}"/>
	<title>CONTACTANOS</title>
</head>

<body>
	<header>
		<div id="fondo">
			<a href="../index.html">
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
								<li><a class="dropdown-item color"
										href="{{route('historia')}}">Historia</a></li>
								<li><a class="dropdown-item color" href="{{route('vision')}}">Visión</a>
								</li>

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
					<a href="../index.html">
						<img src="../img/logo.jpeg" width="150px" alt="">
					</a>
					<!--<p class="bajologo">@LEL.SYSTEM</p>-->
					<button class="navbar-toggler boton" type="button" data-bs-toggle="offcanvas"
						data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
						<img src="../img/menu.png" class="posicionq" alt="">
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
											<li><a class="dropdown-item colorbajo" href="{{route('vision')}}">vision</a></li>

										</ul>
									</div>
								</li>
								<li class="nav-item">
									<a href="{{route('contactos')}}" class="blancoo">Oferta academica</a>
								</li>
								<li class="nav-item">
									<a class="blanco" href="#">Contactos</a>
								</li>
								<li class="nav-item">
									<a class="blancooo" href="{{route('admisiones')}}">Admisiones</a>
								</li>
								<li class="nav-item ">
									<center><a class="blanco sesionesbajos" href="{{route('login')}}">Dashboard</a></center>
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
				<li class="breadcrumb-item active" aria-current="page">Contactanos</li>
			</ol>
		</nav>
		<div class="container">
			<div class="row py-3 text-center">
				<h2>CONTACTANOS</h2>
			</div>
			<div class="row">
				<div class="col frame">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7875347594754!2d-78.51888238567923!3d-0.22507903545148264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d59a28366b3d81%3A0xc6029256689ed873!2sInstituto%20Superior%20Tecnol%C3%B3gico%20Yavirac!5e0!3m2!1ses-419!2sec!4v1648407363016!5m2!1ses-419!2sec"
						width="500" height="350" allowfullscreen="" loading="lazy"
						referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				<div class="col direccion">
					<h4>
						<b>Dirección:</b> García Moreno S4-35 y Ambato <br>

						<b>Teléfono:</b> 02 394 1080 <br>

						<b>Ext.:</b> 1000 Secretaría Rectorado
						&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 1002 Coordinación Administrativa
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp1004 Secretaría General
						<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 1005 Centro de Educación Continua
						<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 1006 Recepción

						<br><b>Correo electrónico:</b> atayupanta@yavirac.edu.ec

						<br> <b>Horario de atención:</b> 
						<br>
						De lunes a viernes, de 08H00 a 17H00
					</h4>
				</div>
			</div>
		</div>
		<br>
	</main>
	
	<footer id="footer" class="top-space">
		<div class="footer1">
			<div class="container padin">
				<div class="row">
					<div class="col-md widget">
						<h3 class="widget-title">Contactanos</h3>
						<div class="widget-body">
							<p>+593 999999999<br>
								<a href="mailto:esy.mera@yavirac.edu.ec"><i
										class='bx bxl-gmail border-icon'></i></a><br>

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
						<center>
							<p class="text-right">
								Copyright &copy; 2022. Designed by @LELSYSTEM
							</p>
						</center>
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