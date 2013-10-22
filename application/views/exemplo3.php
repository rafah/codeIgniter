<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Exemplo 3</title>
	<meta charset="utf8" />
</head>
<body>
	<div>
		<header>
			<h1>Exemplo 3</h1>
		</header>
		<h1><?php echo $titulo; ?></h1>
		<nav>
			<ul>
				<?php foreach ($menu as $item): ?>
				<li><?php echo $item; ?></li>
				<?php endforeach; ?>
			</ul>
		</nav>
		<div><p><?php echo $texto; ?></p></div>
			<p><?php echo $segmento; ?></p>
		<footer>
			<p>
				&copy; CopyRight by Rafael
			</p>
		</footer>
	</div>
</body>
</html>