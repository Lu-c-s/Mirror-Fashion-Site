<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title> Checkout Mirror Fashion </title>
	<meta name="viewport" content="width=device-width">
</head>
<body>

	<h1>Otima escolha! </h1>
	<p>Obrigado por comprar na Mirror Fashion!
	Preencha seus dados para efetivar a compra.</p>

	<h2> Sua compra </h2>
	<dl>
		<dt>Produto</dt>
		<dd><?= $_POST['nome'] ?></dd>

		<dt>Valor</dt>
		<dd><?= $_POST['valor'] ?></dd>

		<dt>Cor</dt>
		<dd><?= $_POST['cor'] ?></dd>

		<dt> Tamanho </dt>
		<dd><?= $_POST['tamanhos'] ?></dd>
	</dl>
</body>
</html>