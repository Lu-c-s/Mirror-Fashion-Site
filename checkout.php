<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title> Checkout Mirror Fashion </title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/bootstrap.css">

	
	<style>
		.navbar{
			margin: 0;
		}
		body{
			padding-top:70px;
		}
	</style>

</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-id">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>	
			<a class="navbar-brand" href="index.php"> <img src="img/logo-rodape.png" alt="Mirror Fashion" height="27" > </a>

		</div>
		<div class="collapse navbar-collapse" id="navbar-collapse-id">
			<ul class="nav navbar-nav">
				<li class="active"><a href="sobre.php"><span class="glyphicon glyphicon-home"></span> Sobre</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-question-sign"></span> Ajuda</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span> Perguntas frequentes</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-bullhorn"></span> Entre em contato</a></li>
			</ul>
		</div>
	</nav>
	<div class="jumbotron">
		<div class="container">
			<h1>Otima escolha! </h1>
			<p>Obrigado por comprar na Mirror Fashion!
			Preencha seus dados para efetivar a compra.</p>
		</div>	
	</div>
	<div class="container">	
		<div class="row">
			<div class="col-sm-4 col-lg-3">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h2> Sua compra </h2>
					</div><!-- fim .panel-heading -->
					<div class="panel-body">
						<img src="img/produtos/foto2-<?= $_POST['cor']?>.png" class="img-thumbnail img-responsive" >
						<dl>
							<dt>Produto</dt>
							<dd><?= $_POST['nome'] ?></dd>

							<dt>Valor</dt>
							<dd id="valor"><?= $_POST['valor'] ?></dd>

							<dt>Cor</dt>
							<dd><?= $_POST['cor'] ?></dd>

							<dt> Tamanho </dt>
							<dd><?= $_POST['tamanhos'] ?></dd>
						</dl>

						<div class="form-group">
							<label for="qt"> Quantidade </label>
							<input id="qt" class="form-control" type="number" min="0" max="99" value="1">
						</div>
						<div class="form-group">
							<label for="total">Total </label>
							<output for="qt valor" id="total" class="form-control">
								<?= $_POST["valor"] ?>
							</output>
						</div>
					</div>
				</div>	
			</div>	
			<form class="col-sm-8 col-lg-9">
				<fieldset class="col-md-6">
					<legend> Dados Pessoais </legend>
						<div class="form-group">
							<label for="nome"> Nome completo </label>
							<input type="text" class="form-control" id="nome" name="nome" autofocus required>
						</div>
						<div class="form-group">
							<label for="email"> Email </label>
							<div class="input-group">
								<span class="input-group-addon">@</span>
								<input type="email" class="form-control" id="email" name="email" placeholder="example@mail.com" required>
							</div>
						</div>
							<div class="form-group">
								<label for="cpf"> CPF </label>
								<input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00">
							</div>

							<div class="checkbox">
								<label>
									<input type="checkbox" value="sim" name="spam" checked>
									Quero receber spam da Mirror Fashion
								</label>
							</div>
					</fieldset>
					<fieldset class="col-md-6">
						<legend> Catão de crédito </legend>

						<div class="form-group">
							<label for="numero-cartao"> Número - CVV</label>
							<input type="text" class="form-control" id="numero-cartao" name="numero-cartao">
						</div>

						<div class="form-group">
							<label for="bandeira-cartao"> Bandeira </label>
							<select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
								<option value="master"> MasterCard </option>
								<option value="visa">VISA </option>
								<option value="amex"> American Express </option>
							</select>
						</div>

						<div class="form-group">
							<label for="validade-cartao"> Validade </label>
							<input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
						</div>
					</fieldset>
					<button type="submit" class="btn btn-primary btn-lg pull-right">
						<span class="glyphicon glyphicon-thumbs-up"></span>
						Confirmar Pedido
					</button>
			</form>	
		</div>	
	</div>	
 <script src="js/jquery-3.3.1.min.js"></script>
 <script src="js/bootstrap.js"></script>
 <script src="js/total.js"></script>	
</body>
</html>