<?php

try

{
   // Se connecte à MySQL
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=immo;charset=utf8','root','admin');
}

catch(Exception $e)

{

    // En cas d'erreur, on affiche un message et on arrête tout

	die('Erreur : '. $e->getMessage());

}



// Récupèrer tout le contenu de la table jeux_video

// $reponse = $bdd->query('SELECT * FROM immo.users'); ----------------


// Afficher chaque entrée une à une

$users = $bdd->query('SELECT * FROM users');

$data=$users->fetchAll();
// var_dump($data);
// die();


	?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>recupération BDD</title>
	</head>
	<body>

		<div class="container">

			<div class="row">

				<div class="col-md-12">

					<h1>Nos rubriques</h1>
					
					<div class="col-md-6">
						
						<h2>Maison</h2>

					</div>

					<div class="col-md-6">
						
						<h2>Cabanes</h2>

					</div>

				</div>
				

			</div>
			
		</div>

		<div>

		<?php 

		foreach ($data as $value):

		?>

			<strong>Utilisateurs</strong> : <?= $value['last_name']; ?><br />

		<?php endforeach ?>

		</div>



		<script src="node_modules/jquery/dist/jquery.js"></script>
		<script src="app.js"></script>


</body>
</html>

