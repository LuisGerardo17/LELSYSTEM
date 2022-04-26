<!doctype html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="{{ asset('static/css/estilos.css') }}"/>
	
	<title>LELSISTEM</title>
</head>

<body>
	<header>
		<div id="fondo">
			<img src="static/img/logo5.png" class="logo" width="135px" alt="">
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
						<a class="nav-link marign" href="{{route('contactos')}}">Contactanos</a>
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
					<img src="static/img/logo.jpeg" width="150px" alt="">
					<!--<p class="bajologo">@LELSYSTEM</p>-->
					<button class="navbar-toggler boton" type="button" data-bs-toggle="offcanvas"
						data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
						<img src="img/menu.png" class="posicionq" alt="">
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
											<li><a class="dropdown-item colorbajo"
													href="{{route('historia')}}">Historia</a></li>
											<li><a class="dropdown-item colorbajo"
													href="{{route('vision')}}">Vision</a></li>

										</ul>
									</div>
								</li>
								<li class="nav-item">
									<a href="{{route('oferta')}}" class="blancoo">Oferta
										academica</a>
								</li>
								<li class="nav-item">
									<a class="blanco" href="{{route('contactos')}}">Contactanos</a>
								</li>
								<li class="nav-item">
									<a class="blancooo" href="{{route('admisiones')}}">Admisiones</a>
								</li>
								<li class="nav-item ">
									<center><a class="blanco sesionesbajos" href="{{route('login')}}">Dashboard</a></center>
									</center>
								</li>
                                
								</ul>

						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>

	<div class="carrucel">
		<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators botones">
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
					aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
					aria-label="Slide 2"></button>
			</div>
			<div class="carousel-inner imgPag">
				<div class="carousel-item active " data-bs-interval="3000">
					<a href="yavirac.com.ec" target="_blank">
						<img src="https://www.semana.com/resizer/YIoEQTsGCuVIrHqenP_VzaEAAq4=/1200x646/filters:format(jpg):quality(50)/cloudfront-us-east-1.images.arcpublishing.com/semana/ZMUFT2X4Y5BRTHIFIS7F7I2SIU.jpg"
							class="d-block w-100 imgSlider" alt="...">
					</a>
				</div>
				<div class="carousel-item" data-bs-interval="3000">
					<a href="google.com" target="_blank">
						<img src="https://blog.colplex.com/wp-content/uploads/2019/09/classroom-2787754_1920.jpg"
							class="d-block w-100 imgSlider" alt="...">
					</a>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
				data-bs-slide="prev">
				<span class="carousel-control-prev-icon boton" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
				data-bs-slide="next">
				<span class="carousel-control-next-icon boton" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>
	<main>
		<div class="container-xxl colorn">
			<div class="row">
				<div class="col">
					<p>La educación técnica y tecnológica no debe ser pensada como un mecanismo contemporáneo de mano de
						obra calificada, al contrario de ello, es una valiosa oportunidad para la generación de sujetos
						autónomos con tendencia exponencial de emprendedores.</p>
				</div>
				<div class="col text-center pt-3">
					<img src="https://cdn.euroinnova.edu.es/img/subidasEditor/copia%20de%20sin%20t%C3%ADtulo%20-%202021-09-04t022424-1633085835.577" width="50%" alt="">
				</div>
			</div>
		</div>
		<div class="">
			<div class="row">
				<div class="col text-center pt-5">
					<img src="https://colegionazaret.es/sites/colegionazaret.es/files/images/noticias/sofwareducativo2-830x500.jpg" width="60%" alt="">
				</div>
				<div class="col">
					<p>La educación tecnológica es una posibilidad fáctica de cambio de la economía de un país altamente
						dependiente. Esto se materializa mediante la orientación clara del modelo de educación técnica y
						tecnológica, su pedagogía, sus estructuras curriculares, sus esquemas de titulación, entre
						otros, deben apuntalar hacia la relación de la práctica, la teoría y la vida misma. </p>
				</div>
			</div>
		</div>
		<div class="colorn">
			<div class="row">
				<div class="col">
					<p>Las estructuras de micro, pequeña y mediana empresa pública o privada podrían sujetarse de la
						educación tecnológica, un acuerdo social público y consensuado entre los campos educativo y
						comunitario económico permitirían la reestructuración de los fines de la educación en sí misma.
					</p>
				</div>
				<div class="col text-center pt-4">
					<img src="https://i.ytimg.com/vi/Z2mcSu0Gats/maxresdefault.jpg" width="50%" alt="">
				</div>
			</div>
		</div>
		<div class="">
			<div class="row">
				<div class="col text-center pt-4">
					<img src="https://www.americaeconomia.com/media-library/eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpbWFnZSI6Imh0dHBzOi8vYXNzZXRzLnJibC5tcy8yNzEwNjIwMi9vcmlnaW4uanBnIiwiZXhwaXJlc19hdCI6MTY5MTM4Mjg0OH0.vgk9IcYhpCAYpCpV72llspBcBpb6O4xdQ9eiaGTa0_4/image.jpg?width=980" width="60%" alt="">
				</div>
				<div class="col">
					<p>Entre otros retos para dar cuerpo a esta quimera, nos disponemos en esta ponencia a proponer como
						uno de los aportes la metodología de investigación específica de la educación tecnológica a
						través
						del método práctico, sea para los procesos de investigación docente como para las formas de
						titulación estudiantil, entre ellas la necesidad de centralizar esfuerzos en la modalidad de
						emprendimientos.</p>
				</div>
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
								<p>0987295066<br>
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