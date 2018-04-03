<html><head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Birpin · conectando personas con su futuro</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">


	<meta property="og:url" content="http://www.birpin.net/empresas" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Birpin · Conectando personas con su futuro" />
	<meta property="og:description" content="Plataforma de búsqueda laboral y relacionamiento profesional" />
	<meta property="og:image" content="http://www.birpin.net/empresas/imagenes/facebook.jpg" /> 



	<link rel="shortcut icon" type="image/png" href="favicon/favicon-32x32.png">
	<link rel="icon" href="favicon/favicon.ico" type="image/x-icon">
</head>

<body>
	<header>
		<video poster="imagenes/back.jpg'" id="bgvid" playsinline="" autoplay="" muted="" loop="">
			<source src="video/video3.mp4" type="video/webm">
			<source src="video/video3.mp4" type="video/mp4">
			</video>
			<div id="header">
				<div class="container">
					<div class="row marca">
						<div class="col-md-2"><img src="imagenes/birpin-white.png" class="birpin"></div>
					</div>
					<div class="row">

						<div class="col-sm-10 col-sm-offset-1 text-center">

							<h1>Participá del lanzamiento de la <strong>primer plataforma inteligente de búsqueda laboral y relacionamiento</strong></h1>

						</div>
					</div>
				</div>
			</div>
		</header>


		<section id="form">
			<div class="absolute">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 form">					
						<form method="post" action="enviar.php">
							<input type="hidden" name="recipient" value="javiera@birpin.com.ar">
							<input type="hidden" name="redirect">
							<input type="hidden" name="subject" value="Preinscripción de empresa">
							<legend>Preinscribite para obtener el beneficio de <strong>acceso sin costo</strong></legend>

							<div class="form-group input">
								<label for="nombre">Nombre</label>
								<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $_GET['nombre']?>">
							</div>

							<div class="form-group input">
								<label for="empresa">Empresa</label>
								<input type="text" class="form-control" id="empresa" name="empresa" value="<?php echo $_GET['empresa']?>">
							</div>

							<div class="form-group input">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email" name="email" value="<?php echo $_GET['email']?>">
							</div>
							<input type="submit" placeholder="ingresá tu email" class="btn btn-primary btn-block btn-lg" value="¡Quiero participar gratis!">
						</form>


						<div id="ok" class="text-center" style="height: 0px; overflow: hidden;">
							<img src="imagenes/logo-birpin.png" style="max-width: 140px; margin: 40px 0;">
							<h4>Gracias por tu apoyo.</h4>
							<p>Estaremos envíandote las novedades.</p>
						</div>					
					</div>
				</div>
			</div>
			</div>
		</section>

		<section id="empresas">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<h4>¡Estas son algunas de las empresas que ya se sumaron!</h4>

						<ul class="empresas">
							<li><img src="imagenes/ausa.png" class="img-responsive"></li>
							<li><img src="imagenes/casinos.jpeg" class="img-responsive"></li>
							<li><img src="imagenes/hipodromo.png" class="img-responsive"></li>
							<li><img src="imagenes/garbarino.jpg" class="img-responsive"></li>
							<li><img src="imagenes/megatone.png" class="img-responsive"></li>
							<li><img src="imagenes/provincia.png" class="img-responsive"></li>
							<li><img src="imagenes/universal.png" class="img-responsive"></li>
							<li><img src="imagenes/musimundo.jpeg" class="img-responsive"></li>
							<li><img src="imagenes/guemes.jpg" class="img-responsive"></li>
						</ul>
					</div> 
				</div>
			</div>
		</section>

			<section class="s1">
				<div class="mask">
					<div class="container">
						<div class="row">


							<div class="col-md-8">
								<h3>Match inteligente entre postulantes y anuncios</h3>
								<p class="big">
									Gracias al algoritmo de birpin, <strong>tus anuncios llegarán a postulantes con perfiles compatibles con tus necesidades. Además, el sistema te recomendará candidatos ideales según sus habilidades, educación y experiencia.</strong>
								</p>
								<p class="big">
									Nuestro sistema de machine learning aprende de las acciones de la comunidad de birpin, de esta manera perfecciona el match entre anuncios y postulantes, optimizando tiempos y costos en los procesos de selección de tus búsquedas.
								</p>

							</div>

						</div>
					</div>
				</div>
			</section>


			<section>
				<div class="container">
					<div class="row">

						<div class="col-lg-6 col-md-5 col-sm-4">
							<img src="imagenes/timeline.png" class="img-responsive">
						</div> 
						<div class="col-lg-6 col-md-7 col-sm-8">
							<h3>Proceso de selección integral <span class="flag">SIN COSTO</span></h3> 
							<p class="big">
								Birpin incluye una poderosa herramienta para llevar a cabo el proceso de selección. Nuestro sistema es muy versatil y 100% configurable según la necesidad de cada búsqueda.
							</p>
							<p class="big">
								<strong>El Timeline de Birpin te permitirá guardar toda la información del proceso de selección de cada postulante</strong>, pudiendo consultarlo en cualquier momento y reutilizarlo para distintas búsquedas.
							</p>
						</div>



					</div>
				</div>
			</section>


			<section class="s3">
				<div class="mask">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<h3>Posicionamiento</h3>
						</div>

						<div class="col-sm-6">

							<p class="big">
								Birpin se posicionará en el corto plazo, entre los 3 primeros portales de todo LATAM, la invitación exclusiva y el beneficio de sumarse sin costo, generada por nuestros ejecutivos corresponde a la etapa de prelanzamiento.
							</p>	
							<p>
								Más de 300 empresas de distintos rubros y de primera línea nos acompañarán durante el lanzamiento.
							</p>				
						</div>

						<div class="col-sm-6">

						</div> 
					</div>
				</div>
				</div>
			</section>

			<footer>
				<ul class="social">
					<li><a href="https://www.linkedin.com/company/birpin/" target="_blank"><span class="ion-social-linkedin"></span></a></li>
					<li><a href="https://www.facebook.com/Birpin/" target="_blank"><span class="ion-social-facebook"></span></a></li>
					<li><a href="https://www.instagram.com/birpinapp/" target="_blank"><span class="ion-social-instagram"></span></a></li>
				</ul>

				<ul class="tyc">
					<li><a href="">Términos y condiciones</a></li>
					<li> · </li>
					<li>® derechos reservados</li>
				</ul>
			</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script type="text/javascript">
	$(document).on("ready", function(){
		

		if($("#nombre").val()==""){
			$(this).parent().addClass("no");
		}

		if($("#email").val()==""){
			$(this).parent().addClass("no");
		}

		if($("#empresa").val()==""){
			$(this).parent().addClass("no");
		}


		$("input.form-control").on("focusin",function(){
			$(this).parent().removeClass("no");
		})

		$("input.form-control").on("focusout",function(){
			if($(this).val()==""){
				$(this).parent().addClass("no");
			}
		})

		alto=$("form").css("height");
		$("#ok").css({
			"height":"0",
			"overflow":"hidden"
			});
		$("form").submit(function(){
        	//$("form").css("height","0");
 			var url = "enviar.php";
    		$.ajax({
           		type: "POST",
           		url: url,
           		data: $("form").serialize(),
           		success: function(data){  		
              		$("#ok").css("height", alto);
              		$("form").css({
						"height":"0",
						"overflow":"hidden"
					});
           		}
         	});
    		return false; // Evitar ejecutar el submit del formulario.
 		});
	})


</script>
		
</html>