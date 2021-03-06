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
								<li><a class="dropdown-item color" href="{{route('vision')}}">Vision</a></li>

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
			 <p>El antiguo edificio ubicado en las calles Ambato y Garc??a Moreno de la ciudad de Quito, recluy?? a
				cientos de personas privadas de la libertad en el pasado. Durante d??cadas, este inmueble tuvo ese uso y
				se lo conoci?? como la C??rcel #2. Sin embargo, el lunes 25 de marzo de 2013, se marc?? un giro definitivo
				en el destino de esta edificaci??n, ya que el Ministerio Coordinador de Patrimonio, el Municipio del
				Distrito Metropolitano de Quito y la Secretar??a Nacional de Educaci??n Superior, Ciencia y Tecnolog??a e
				Innovaci??n (Senescyt), firmaron un convenio tripartito de cooperaci??n interinstitucional, donde se
				establece la creaci??n del primer Instituto Tecnol??gico Superior, Sectorial, de Turismo y Patrimonio de
				la naci??n.</p>
		</div>
		<div class="row my-4">
			<div class="col"><p>En paralelo, desde el 2012, el Proyecto Emblem??tico de Reconversi??n de la Educaci??n T??cnica y Tecnol??gica Superior P??blica del pa??s, busca fortalecer este sistema de educaci??n superior, repotenciando f??sica y acad??micamente a su estructura. Por tanto, la edificaci??n, que antes fue una c??rcel municipal y que se incendi?? en el 2006, fue restaurada y recuperada para ponerse al servicio de la educaci??n superior del Ecuador con una inversi??n aproximada a los 9 millones de d??lares de parte de Senescyt.</p></div>
			<div class="col"><p>El ??rea total de construcci??n del instituto abarca 5177,59 m2, donde, 4200,93 m2 est??n, actualmente, ocupados por la comunidad acad??mica. La primera etapa de este instituto contempla 19 aulas, 4 laboratorios (dos de computaci??n y dos de idiomas), 13 oficinas,  3 espacios de bienestar, 10 ba??os administrativos y 16 ba??os para estudiantes.</p></div>
		</div>
		<div class="row my-4 text-center">
			<div class="col"><img src="https://yavirac.edu.ec/wp-content/uploads/2020/01/ANTES.png" alt="img1"></div>
			<div class="col"><img src="https://yavirac.edu.ec/wp-content/uploads/2020/01/despues-1.png" alt="img2"></div>
		</div>
		<div class="row my-4">
			<div class="col"><p>Para el 01 de junio de 2015, el Instituto Superior Tecnol??gico de Turismo y Patrimonio Yavirac, antes conocido como  Instituto Tecnol??gico Superior Aloas??, empieza sus actividades acad??micas en sus instalaciones remodeladas, ofertando tres carreras tecnol??gicas (Electr??nica, Electricidad y An??lisis de Sistemas) y una carrera t??cnica (Guianza Tur??stica) con un total de 127 estudiantes repartidos en las jornadas matutina, vespertina y nocturna.</p></div>
			<div class="col"><p>Para finales del 2016, la Secretar??a de Educaci??n Superior Ciencia Tecnolog??a e Innovaci??n asigna como Rector al MSc. Iv??n Oscar Borja Carrera y como Vicerrector al MSc. H??ctor Fabi??n Ar??valo Mosquera. De la misma manera, esta secretar??a de estado, para octubre del mismo a??o encarga a las autoridades la administraci??n del Instituto Tecnol??gico Superior 24 de Mayo, con la Carrera de Marketing. La poblaci??n estudiantil asciende a 224 alumnos con una planta docente conformada por 23 profesores.</p></div>
		</div>
		<div class="row pb-3">
			<p>Para mediados de 2017, se designa al MSc. Iv??n Borja como Rector de los Institutos Tecnol??gicos Superiores Gran Colombia y Benito Ju??rez, con las carreras de Desarrollo de Software y Dise??o de Modas, respectivamente. La poblaci??n estudiantil, supera las 900 personas, con una planta docentes de 83 profesores. Durante el mismo a??o se aprobaron los proyectos de carrera de  Dise??o de Modas, Desarrollo de Software y Marketing. Para 2018, se aprobaron las carreras de Arte Culinario y Gu??a Nacional de Turismo. La poblaci??n estudiantil prevista para este a??o superar?? las 1200 personas.Grandes retos aguardan al Yavirac, debido a que tiene planificado: la expansi??n de su infraestructura, el aumento de su comunidad acad??mica, tener una mayor influencia territorial en un sector hist??ricamente marginado, una oferta acad??mica pertinente y relacionada al Plan Nacional de Desarrollo ??Todo una Vida?? y ser uno de los Institutos Universitarios Superiores, cuya creaci??n est?? superditada en las reformas a la Ley Org??nica de Educaci??n Superior (LOES). Grandes retos aguardan al Yavirac y sin duda los alcanzar??.</p>
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