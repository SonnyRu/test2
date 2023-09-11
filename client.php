<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="../css/creditsio.css">
	<title>Gestion des clients - Home</title>
</head>
<body>
<header>
	<h1>Les clients</h1>
</header>
<?php
	try{
		$bdd = new PDO('mysql:host=127.0.0.1;dbname=creditsio;charset=utf8','root','root');
		}
		catch (Exception $e)
		{
		die('Erreur:'.$e->getMessage());
		}
		$lesClients=$bdd->query('select clientnum,clientnom,clientprenom,clientrue,clientcp,clientville
		from CLIENT order by clientnum asc');
		foreach($lesClients as $leClient):?>
		<client>
		<h2><?php echo $leClient['clientnom']; ?></h2>
		<p><?php echo $leClient['clientprenom']?></p>
		<p><?php echo $leClient ['clientrue']?></p>
		<p><?php echo $leClient['clientcp']?></p>
		<p><?php echo $leClient ['clientville']?></p>
		</client>
		<?php endforeach?>
		
<footer>
	<a href="./">Credit SIO est un petit site web construit comme exemple.</a>
</footer>
</body>
</html>
