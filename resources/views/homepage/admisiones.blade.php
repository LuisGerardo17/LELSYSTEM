<!doctype html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('static/css/admisiones.css') }}"/>
	<title>ADMISIONES</title>
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
								<li><a class="dropdown-item color" href="{{route('historia')}}">Historia</a></li>
								<li><a class="dropdown-item color" href="{{route('vision')}}">Visión</a></li>

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
					<img src="static/img/logo.jpeg" width="150px" alt="">
					</a>
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
		<div class="breakups">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href ="/homepage">Principal</a></li>
					<li class="breadcrumb-item active" aria-current="page">Admisiones</li>
				</ol>
			</nav>
		</div>
		<div class="container">
			<div class="row text-center">
				<h2>INFORMACION</h2>
			</div>
			<div class="row">
				<div class="col">
					<p> Con la mayor información posible es fundamental para tomar una adecuada
					decisión; por eso, en este suplemento encontrarás todas las carreras que las universidades, escuelas
					politécnicas e institutos técnicos y tecnológicos públicos y particulares del país ofertan en este
					periodo académico, detallando la ciudad, jornada y modalidad en las que se impartirán.

					Es importante que consideres que cada institución de educación superior define, de forma autónoma,
					cuántos cupos ofertar en cada periodo, además, no existe un puntaje mínimo para postular y puedes
					escoger hasta cinco opciones de carreras, seleccionadas en orden de prioridad, según tu preferencia.

					Recuerda: ¡tú eres el responsable de elegir adecuadamente tu futuro académico!

					Una vez que hayas postulado, el sistema, de manera automática asigna os cupos tomando en
					consideración: primero, el puntaje obtenido por los estudiantes en el examen Ser Bachiller;</p></div>
				<div class="col">
					<p>
					segundo, número de cupos ofertados por las instituciones de educación superior; y, tercero, la
					selección responsable de carreras que realiza cada aspirante durante el proceso de postulación.

					La asignación se da desde la nota, más alta hasta cubrir la totalidad de cupos disponibles.

					Para que tengas una idea más clara de a qué carrera postular, es necesario que también tengas en
					cuenta, a manera de referencia, las notas máximas y promedios con que se asignó un cupo en el
					proceso anterior, Esta información, se encuentra detallada más adelante.

					Recuerda, si esta vez no obtienes un cupo, podrás acceder a nuestros cursos gratuitos de nivelación
					y prepararte para rendir el siguiente Ser Bachiller en mejores condiciones.

					Estamos trabajando todos los días para ampliar y diversificar la oferta. En esta ocasión tendrás la
					opción de educación virtual.

					¡La decisión es tuya!</p>
				</div>
			</div>
			<div class="row">
				<img src="https://www.lemas.edu.ec/ml2/wp-content/uploads/2021/12/procesoadmisionweb.png">
			</div>
		</div>
	</main>
	<footer id="footer" class="top-space">
		<div class="footer1">
			<div class="container padin">
				<div class="row">


					<div class="col-md widget">
						<center>
							<h3 class="widget-title">Contactanos</h3>
							<div class="widget-body">
								<p>+593 999999999<br>
									<a href="mailto:esy.mera@yavirac.edu.ec"><i
											class='bx bxl-gmail border-icon'></i></a><br>

								</p>
							</div>
						</center>
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