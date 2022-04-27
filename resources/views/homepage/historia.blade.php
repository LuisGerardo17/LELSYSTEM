<!doctype html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="{{ asset('static/css/estilos2.css') }}"/>
	<title>LELSYSTEM</title>
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
								<li><a class="dropdown-item color" href="#">Historia</a></li>
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
					<img src="../../img/logo.jpeg" width="150px" alt="">
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
				<li class="breadcrumb-item active" aria-current="page">Historia</li>
			</ol>
		</nav>
		<div class="row">
			<center>
				<h2>HISTORIA</h2>
			</center>
		</div>
		<div class="row my-3">
			 <p>El antiguo edificio ubicado en las calles Ambato y García Moreno de la ciudad de Quito, recluyó a
				cientos de personas privadas de la libertad en el pasado. Durante décadas, este inmueble tuvo ese uso y
				se lo conoció como la Cárcel #2. Sin embargo, el lunes 25 de marzo de 2013, se marcó un giro definitivo
				en el destino de esta edificación, ya que el Ministerio Coordinador de Patrimonio, el Municipio del
				Distrito Metropolitano de Quito y la Secretaría Nacional de Educación Superior, Ciencia y Tecnología e
				Innovación (Senescyt), firmaron un convenio tripartito de cooperación interinstitucional, donde se
				establece la creación del primer Instituto Tecnológico Superior, Sectorial, de Turismo y Patrimonio de
				la nación.</p>
		</div>
		<div class="row my-4">
			<div class="col"><p>En paralelo, desde el 2012, el Proyecto Emblemático de Reconversión de la Educación Técnica y Tecnológica Superior Pública del país, busca fortalecer este sistema de educación superior, repotenciando física y académicamente a su estructura. Por tanto, la edificación, que antes fue una cárcel municipal y que se incendió en el 2006, fue restaurada y recuperada para ponerse al servicio de la educación superior del Ecuador con una inversión aproximada a los 9 millones de dólares de parte de Senescyt.</p></div>
			<div class="col"><p>El área total de construcción del instituto abarca 5177,59 m2, donde, 4200,93 m2 están, actualmente, ocupados por la comunidad académica. La primera etapa de este instituto contempla 19 aulas, 4 laboratorios (dos de computación y dos de idiomas), 13 oficinas,  3 espacios de bienestar, 10 baños administrativos y 16 baños para estudiantes.</p></div>
		</div>
		<div class="row my-4 text-center">
			<div class="col"><img src="https://yavirac.edu.ec/wp-content/uploads/2020/01/ANTES.png" alt="img1"></div>
			<div class="col"><img src="https://yavirac.edu.ec/wp-content/uploads/2020/01/despues-1.png" alt="img2"></div>
		</div>
		<div class="row my-4">
			<div class="col"><p>Para el 01 de junio de 2015, el Instituto Superior Tecnológico de Turismo y Patrimonio Yavirac, antes conocido como  Instituto Tecnológico Superior Aloasí, empieza sus actividades académicas en sus instalaciones remodeladas, ofertando tres carreras tecnológicas (Electrónica, Electricidad y Análisis de Sistemas) y una carrera técnica (Guianza Turística) con un total de 127 estudiantes repartidos en las jornadas matutina, vespertina y nocturna.</p></div>
			<div class="col"><p>Para finales del 2016, la Secretaría de Educación Superior Ciencia Tecnología e Innovación asigna como Rector al MSc. Iván Oscar Borja Carrera y como Vicerrector al MSc. Héctor Fabián Arévalo Mosquera. De la misma manera, esta secretaría de estado, para octubre del mismo año encarga a las autoridades la administración del Instituto Tecnológico Superior 24 de Mayo, con la Carrera de Marketing. La población estudiantil asciende a 224 alumnos con una planta docente conformada por 23 profesores.</p></div>
		</div>
		<div class="row pb-3">
			<p>Para mediados de 2017, se designa al MSc. Iván Borja como Rector de los Institutos Tecnológicos Superiores Gran Colombia y Benito Juárez, con las carreras de Desarrollo de Software y Diseño de Modas, respectivamente. La población estudiantil, supera las 900 personas, con una planta docentes de 83 profesores. Durante el mismo año se aprobaron los proyectos de carrera de  Diseño de Modas, Desarrollo de Software y Marketing. Para 2018, se aprobaron las carreras de Arte Culinario y Guía Nacional de Turismo. La población estudiantil prevista para este año superará las 1200 personas.Grandes retos aguardan al Yavirac, debido a que tiene planificado: la expansión de su infraestructura, el aumento de su comunidad académica, tener una mayor influencia territorial en un sector históricamente marginado, una oferta académica pertinente y relacionada al Plan Nacional de Desarrollo «Todo una Vida» y ser uno de los Institutos Universitarios Superiores, cuya creación está superditada en las reformas a la Ley Orgánica de Educación Superior (LOES). Grandes retos aguardan al Yavirac y sin duda los alcanzará.</p>
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
								Copyright &copy; 2022. Designed by @LEL.SYSTEM
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