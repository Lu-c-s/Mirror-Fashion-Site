<!DOCTYPE html>
<html>
	<head>
		<title>Mirror Fashion</title>
		<meta charset ="utf-8">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/estilos.css">
		<link rel="stylesheet" href="css/mobile.css" media="(max-width: 320px)">
		<link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)" >
   		<link href='http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script' 
     	rel='stylesheet'>


	</head>
	<body>
	<!-- Cabeçalho -->
		<?php include("cabecalho.php"); ?>
	<!--  Fim do cabeçalho     -->
	<div class="container destaque">
		<section class="busca">
			<h2>Busca</h2>
				<form>
					<input type="search">
					<input type="image" src="img/busca.png">
				</form>
		</section> <!-- Fim .busca -->
		<section class="menu-departamentos">
			<h2>Departamentos</h2>
			<nav>
				<ul>
					<li>
						<a href="#">Blusas e Camisas</a>
						<ul>
							<li><a href="#">Manga curta</a></li>
							<li><a href="#">manga comprida</a></li>
							<li><a href="#">Camisa social</a></li>
							<li><a href="#">Camisa casual</a></li>
						</ul>
					</li>
					<li><a href="#">Calças</a></li>
					<li><a href="#">Saias</a></li>
					<li><a href="#">Vestidos</a></li>
					<li><a href="#">Sapatos</a></li>
					<li><a href="#">Bolsas e Carteiras</a></li>
					<li><a href="#">Acessórios</a></li>
				</ul>
			</nav>
		</section> <!-- fim .menu-departamento -->
		<img src="img/destaque-home.png" alt="Promoção : Big city Night">
	</div><!-- Fim .container .destaque-->
	<div class="container paineis">
		<section class="painel novidades">
			<h2>Novidades</h2>
			<ol>
				<!--  painel Produtos -->
				<li>
					<a href="produto.html">
						<figure>
							<img src="img/produtos/miniatura1.png">
							<figcaption> Fuzz Cardigan por R$ 129,90 </figcaption>
						</figure>
					</a>
				</li>
				<!-- Segundo produto -->
				<li>
					<a href="produto.html">
						<figure>
							<img src="img/produtos/miniatura8.png">
							<figcaption> Blusa por R$ 129,90 </figcaption>
						</figure>
					</a>
				</li>
				<!-- Terceiro produto -->
				<li>
					<a href="produto.html">
						<figure>
							<img src="img/produtos/miniatura9.png">
							<figcaption> Camisa Xadrez por R$ 29,90 </figcaption>
						</figure>
					</a>
				</li>
				<!-- Quarto produto -->
				<li>
					<a href="produto.html">
						<figure>
							<img src="img/produtos/miniatura2.png">
							<figcaption> Blusa caveira por R$ 39,90 </figcaption>
						</figure>
					</a>
				</li>
				<!-- Quinto produto -->
				<li>
					<a href="produto.html">
						<figure>
							<img src="img/produtos/miniatura1.png">
							<figcaption> Blazer com flores por R$ 99,90 </figcaption>
						</figure>
					</a>
				</li>
				<!-- Sexto produto -->
				<li>
					<a href="produto.html">
						<figure>
							<img src="img/produtos/miniatura15.png">
							<figcaption> Vestido azul por R$ 79,90 </figcaption>
						</figure>
					</a>
				</li>
			</ol>
			<button type="button"> Mostra mais</button>
		</section> <!-- fim painel novidades -->
		<section class="painel mais-vendidos">
			<h2>Mais Vendidos </h2>
			<ol>
				<li>
					<a href="produto.html">
						<figure>
							<img src="img/produtos/miniatura1.png">
							<figcaption> Fuzz Cardigan por R$ 129,90 </figcaption>
						</figure>
					</a>
				</li>
				<!-- Segundo produto -->
				<li>
					<a href="produto.html">
						<figure>
							<img src="img/produtos/miniatura8.png">
							<figcaption> Blusa por R$ 129,90 </figcaption>
						</figure>
					</a>
				</li>
				<!-- Terceiro produto -->
				<li>
					<a href="produto.html">
						<figure>
							<img src="img/produtos/miniatura9.png">
							<figcaption> Camisa Xadrez por R$ 29,90 </figcaption>
						</figure>
					</a>
				</li>
				<!-- Quarto produto -->
				<li>
					<a href="produto.html">
						<figure>
							<img src="img/produtos/miniatura2.png">
							<figcaption> Blusa caveira por R$ 39,90 </figcaption>
						</figure>
					</a>
				</li>
				<!-- Quinto produto -->
				<li>
					<a href="produto.html">
						<figure>
							<img src="img/produtos/miniatura1.png">
							<figcaption> Blazer com flores por R$ 99,90 </figcaption>
						</figure>
					</a>
				</li>
				<!-- Sexto produto -->
				<li>
					<a href="produto.html">
						<figure>
							<img src="img/produtos/miniatura15.png">
							<figcaption> Vestido azul por R$ 79,90 </figcaption>
						</figure>
					</a>
				</li>
			</ol>
			<button type="button"> Mostra mais </button>
		</section><!-- fim painel mais-vendidos -->
	</div><!-- fim .paineis -->
	<?php include("rodape.php"); ?>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/home.js"></script>
	<script src="js/index.js"></script>
	</body>
</html>