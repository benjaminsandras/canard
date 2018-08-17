<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<?php 

	try{

		$bdd = new PDO('mysql:host=localhost;dbname=L_affaire_canardo;charset=utf8', 'benji', 'aqwsedcft7777');
	}

	catch (Exception $e){
		die('Erreur : ' . $e->getMessage());
	}
	?>

	

	<div>
		<h1>Pièces à Conviction</h1>
	</div>
	<div>

		<div>

		</div>
		<div>

			<table class="table table-dark">

				<tr>
					<th><h3>Nombre de Canards</h3></th>
					<th><h3>Année</h3></th>
					<th><h3>Mois</h3></th>
					<th><h3>Jour</h3></th>
					<th><h3>Département</h3></th>
					<th><h3>Ville</h3></th>
				</tr>

				<?php

				$reponse = $bdd->query('SELECT * FROM pieces_a_conviction') ;

				while($donnees=$reponse->fetch()){

					echo 

					'<tr class="countain">' .
					'<td class="article">' . $donnees['Nombre_de_Canards'] . '</td>' .
					'<td class="article">' . $donnees['Année'] . '</td>' . 
					'<td class="article">' . $donnees['Mois'] . '</td>' . 
					'<td class="article">' . $donnees['Jour'] . '</td>' . 
					'<td class="article">' . $donnees['Département'] . '</td>' . 
					'<td class="article">' . $donnees['Ville'] . '</td>' . 

					'</tr>' ;


				}

				?>
			</table>
		</div>
	</div>


	<script type="text/javascript" src="bootstrap.min.js"></script>
	<script type="text/javascript" src="jquery.min.js"></script>
</body>
</html>

