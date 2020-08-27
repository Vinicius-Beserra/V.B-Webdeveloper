<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>V.B Web Developer</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
	<meta charset="utf-8"> 

	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 

	<!---Metatag Boostrap Mobile First-->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<!--Links Bootsrapp-->
	<link href="Plugins/Bootstrap/css/bootstrap.css" rel="stylesheet"/>
	<link href="Plugins/Bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	<link href="Plugins/Bootstrap/css/bootstrap-reboot.css" rel="stylesheet"/>
	<link href="Plugins/Bootstrap/css/bootstrap-grid.css" rel="stylesheet"/>
	<link href="Plugins/Bootstrap/css/bootstrap-grid.min.css" rel="stylesheet"/>
	<link href="Plugins/Bootstrap/css/bootstrap-grid.css.map" rel="stylesheet"/>

	<!--Links efeito CircleHover-->
	<link href="Plugins/CircleHoverEffect/css/demo.css" rel="stylesheet" />
	<link href="Plugins/CircleHoverEffect/css/common.css" rel="stylesheet" />
	<!--Link para o efeito nos circulos (Para trocar, basta trocar o link dos stylo)-->
	<link rel="stylesheet" type="text/css" href="Plugins/CircleHoverEffect/css/style2.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />
	<script src="Plugins/CircleHoverEffect/js/modernizr.custom.79639.js"></script> 


	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<script src="Plugins/Bootstrap/js/bootstrap.js"></script>
	<script src="Plugins/Bootstrap/js/bootstrap.bundle.js"></script> 
	<script src="Plugins/Bootstrap/js/bootstrap.bundle.min.js"></script> 
	<script src="Plugins/Bootstrap/js/bootstrap.min.js"></script>


	<link href="css/style.css" rel="stylesheet"/>

	<!---Meta para uso de caracteres especiais-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!--JQuery-->  
	<script type="text/javascript" src="JQuery/JQuery.js"></script>  
	<!--Floating WhatsApp css-->  
	<link rel="stylesheet" href="Plugins/JQuery/floating-whatsapp/floating-wpp.min.css">  
	<!--Floating WhatsApp javascript-->  
	<script type="text/javascript" src="Plugins/JQuery/floating-whatsapp/floating-wpp.min.js"></script>
	
</head>



<script type="text/javascript">


	window.onload = function(){
		var txtTitulo = 'Está precisando de um website?';
		var txtTexto = 'Temos a solução para seu negocio ou para a sua idéia!'
		var txt1 = document.getElementById("titulo");

		var speed = 250;
		var cont = 0;

		function typeWriter() {
			if(cont < txtTitulo.length){
				txt1.innerHTML += "<u style='text-decoration: none; color: white;'>" + txtTitulo.charAt(cont) + "</u>";
				cont++;
				setTimeout(typeWriter, speed);
			}else{
				cont = 0;
			}
		}

		typeWriter();
	};

</script>

<script type="text/javascript">
	scrollTo = (element) => {
		window.scroll({
			behavior: 'smooth',
			left: 0,
			top: element.offsetTop
		});
		console
	}

	document.getElementById("1").addEventListener('click', () => {
		scrollTo(document.getElementById("Home"));
	});

	document.getElementById("2").addEventListener('click', () => {
		scrollTo(document.getElementById("Servicos"));
	});

	document.getElementById("3").addEventListener('click', () => {
		scrollTo(document.getElementById("Portifolio"));
	});
	document.getElementById("4").addEventListener('click', () => {
		scrollTo(document.getElementById("Contato"));
	});

</script>


<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: 
	#217584 !important" id="home">
	<p style="text-align: center;"><img src="img/VB-logomarca.png" class="img-fluid" alt="Responsive image" width="200px" style="margin: 0 auto;"></p>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
		<div class="navbar-nav" id="header">
			<a class="nav-item nav-link active" href="" id="1">Home</a>
			<a class="nav-item nav-link" href="" id="2">Serviços</a>
			<a class="nav-item nav-link" href="" id="3">Portifólio</a>
			<a class="nav-item nav-link" href="" id="4">Contato</a>
		</div>
	</div>
</nav>


<header>

	<div class="container">

		<div class="row row d-flex justify-content-center">
			<div class="titulo col-sm-12">
				<h1 id="titulo"></h1>
				<p>Aqui temos a solução  para o seu negócio ou para sua ideia!</p>
				<div class="row d-flex justify-content-center">
					<div class="icones" align="center">

						<ul class="nav">
							<li class="nav-item">
								<a href="https://www.facebook.com/vinicius.bezerra.148" target="_blank"><img class="rede-social" src="img/facebook-icon.png"></a>
							</li>
							<li class="nav-item">
								<a href="https://www.linkedin.com/in/vinicius-beserra-araujo/"  target="_blank"><img class="rede-social" src="img/linkedin-icon.png" ></a>
							</li>
							<li class="nav-item">
								<a href="" target="_blank"><img class="rede-social" src="img/twitter-icon.png"></a>
							</li>
							<li class="nav-item">
								<a href="https://www.instagram.com/viniciusb1341/?hl=pt-br" target="_blank"><img class="rede-social" src="img/instagram-icon.png"></a>
							</li>
						</ul>
					</div>  
				</div>  
			</div>
		</div>
	</div>

</header>

<br>

<section class="main">

	<h1 id="servicos">Serviços</h1>
	<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
		when an unknown printer took a galley 
		of type and scrambled it to make a type specimen book. It has survived not only five centuries, 
		but also 
	the leap into electronic typesetting, remaining essentially unchanged.</p>

	<ul class="ch-grid">
		<li>
			<div class="ch-item ch-img-1">
				<div class="ch-info">
					<h3>Sua idéia</h3>
					<p>Lorem ipsum dolor asqumeut haushauhs</p>
				</div>
			</div>
		</li>
		<li>
			<div class="ch-item ch-img-2">
				<div class="ch-info">
					<h3>SEO</h3>
					<p>Lorem ipsum dolor asqumeut haushauhs</p>
				</div>
			</div>
		</li>
		<li>
			<div class="ch-item ch-img-3">
				<div class="ch-info">
					<h3>Responsivo</h3>
					<p>Lorem ipsum dolor asqumeut haushauhs</p>
				</div>
			</div>
		</li>
	</ul>

</section>	

<br>

<section class="main">

	<div id="portifolio">
		<h1>Portifólio</h1>
		<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
			when an unknown printer took a galley 
			of type and scrambled it to make a type specimen book. It has survived not only five centuries, 
			but also 
		the leap into electronic typesetting, remaining essentially unchanged.</p>
	</div>
</section>

<br>

<section class="main">

	<div class="container-fluid">


		<div class="portifolio row">
			<div class="col-lg-4 col-sm-6">
				<div class="nav-item-portifolio shadow p-3 mb-5 bg-white rounded">
					<img src="img/icone-portifolio.png" style="width: 100%; height: 100%;">
					<div class="titulo-portifolio"><a href="#"><h2>Titulo do Site</h2></a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="nav-item-portifolio shadow p-3 mb-5 bg-white rounded">
					<img src="img/icone-portifolio.png" style="width: 100%; height: 100%;">
					<div class="titulo-portifolio"><a href="#"><h2>Titulo do Site</h2></a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="nav-item-portifolio shadow p-3 mb-5 bg-white rounded">
					<img src="img/icone-portifolio.png" style="width: 100%; height: 100%;">
					<div class="titulo-portifolio"><a href="#"><h2>Titulo do Site</h2></a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="nav-item-portifolio shadow p-3 mb-5 bg-white rounded">
					<img src="img/icone-portifolio.png" style="width: 100%; height: 100%;">
					<div class="titulo-portifolio"><a href="#"><h2>Titulo do Site</h2></a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="nav-item-portifolio shadow p-3 mb-5 bg-white rounded">
					<img src="img/icone-portifolio.png" style="width: 100%; height: 100%;">
					<div class="titulo-portifolio"><a href="#"><h2>Titulo do Site</h2></a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="nav-item-portifolio shadow p-3 mb-5 bg-white rounded">
					<img src="img/icone-portifolio.png" style="width: 100%; height: 100%;">
					<div class="titulo-portifolio"><a href="#"><h2>Titulo do Site</h2></a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="nav-item-portifolio shadow p-3 mb-5 bg-white rounded">
					<img src="img/icone-portifolio.png" style="width: 100%; height: 100%;">
					<div class="titulo-portifolio"><a href="#"><h2>Titulo do Site</h2></a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="nav-item-portifolio shadow p-3 mb-5 bg-white rounded">
					<img src="img/icone-portifolio.png" style="width: 100%; height: 100%;">
					<div class="titulo-portifolio"><a href="#"><h2>Titulo do Site</h2></a>
					</div>
				</div>
			</div>
			
		</div>

	</div>
</div>

</section>

<footer id="contato">

	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<h2>Realizamos os seguintes Serviços:</h2>
				<ul class="footer-links">

					<li><a href="http://scanfcode.com/category/front-end-development/">Desenvolvimento de Sites e Landing Pages</a></li>
					<li><a href="http://scanfcode.com/category/back-end-development/">Aplicativos</a></li>
					<li><a href="http://scanfcode.com/category/java-programming-language/">E-commerce</a></li>
					<li><a href="http://scanfcode.com/category/android/"> Sistemas para web</a></li>
					<li><a href="http://scanfcode.com/category/templates/">Manutenção e Otimização de Sites</a></li>
				</ul>
			</div>
			<div class="col-sm-3">
				<h2>Siga-me nas redes sociais:</h2>
				<ul class="footer-links">
					<li><a href="http://scanfcode.com/category/c-language/">Facebook</a></li>
					<li><a href="http://scanfcode.com/category/front-end-development/">Instagram</a></li>
					<li><a href="http://scanfcode.com/category/back-end-development/">Git</a></li>
					<li><a href="http://scanfcode.com/category/java-programming-language/">Linkedin</a></li>
					<li><a href="http://scanfcode.com/category/android/">Twitter</a></li>
				</ul>
			</div>

			<div class="col-sm-6">
				<div class="formulario">
					<form method="POST">
						<h2>Entre em contato Conosco</h2>
						<div class="form-group col-sm-12">
							<input name="nome" type="text" class="form-control" id="inputAddress" placeholder="Digite Seu nome" required="">
						</div>
						<div class="form-group col-sm-12">
							<input name="email" type="text" class="form-control" id="inputAddress2" placeholder="Digite seu email">
						</div>
						<div class="form-group col-sm-12">
							<input name="telefone" type="text" class="form-control" id="inputAddress2" placeholder="Telefone">
						</div>
						<div class="form-group col-sm-12">
							<input name="assunto" type="text" class="form-control" id="inputAddress2" placeholder="Assunto">
						</div>
						<div class="form-group col-sm-12">
							<textarea name="mensagem"class="form-control" placeholder="Digite sua mensagem"></textarea>
						</div>
						<div class="form-group col-sm-12" align="center">
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Enviar Formuláro</button>
						</div>
					</div>

					<!-- Modal -->
					<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">Mensagem</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									Formulário em construção.
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<hr>
		<div class="row">
			<span class="copyright">© V.B Web Developer - Todos os direitos reservados</span>
		</div>


	</div>

</footer>

<!--Div where the WhatsApp will be rendered-->  
<div id="WAButton"></div>  

<script type="text/javascript">
	$(function() {
		$('#WAButton').floatingWhatsApp({
    phone: '5585985378772', //WhatsApp Business phone number International format-
    //Get it with Toky at https://toky.co/en/features/whatsapp.
    headerTitle: 'Entre em Contato Via WhatsApp!', //Popup Title
    popupMessage: 'Olá, Em que podemos ajudar?', //Popup Message
    showPopup: true, //Enables popup display
    buttonImage: '<img src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/whatsapp.svg" />', //Button Image
    //headerColor: 'crimson', //Custom header color
    //backgroundColor: 'crimson', //Custom background button color
    position: "right"    
});
	});
</script>
</body>
