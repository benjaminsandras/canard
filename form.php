<!DOCTYPE html>
<html>
<head>
	<title>Commissaire Magret</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<!-- <nav class="navbar navbar-light bg-light">
		<form class="form-inline">
			<button class="btn btn-outline-success" type="button">Main button</button>
			<button class="btn btn-sm btn-outline-secondary" type="button">Smaller button</button>
		</form>
	</nav> -->

	<div class="container">
		<div class="row">
			<div class="col-sm-2"><h3>Rapport du comissaire Magret : </h3></div>
			<div class="col-sm-6 center"><h1>Témoignages</h1></div>
			<div class="col-sm-4"></div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-2">

			</div>
			<div class="col-sm-6">

				<form method="post">
					<div class="form-group row">
						<label class="col-sm col-form-label" for="duck" >Nombre de Canards : </label>
						<div class="col-sm">
							<input name="ducknumber" id="duck" class="form-control " type="number" >
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm col-form-label" for="Year">Année de la rencontre : </label>
						<div class="col-sm">
							<select name="year" id="Year" class="form-control custom-select" type="number" >
								<option value="2015">2015</option>
								<option value="2016">2016</option>
								<option value="2017">2017</option>
								<option value="2018">2018</option>
								<option value="2019">2019</option>
								<option value="2020">2020</option>
								<option value="2021">2021</option>
								<option value="2022">2022</option>
								<option value="2023">2023</option>
								<option value="2024">2024</option>
								<option value="2025">2025</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm col-form-label" for="Mounth" >Mois de la rencontre : </label>
						<div class="col-sm">
							<select name="mounth" id="Mounth" class="form-control custom-select" type="number" >
								<option value="janvier">janvier</option>
								<option value="février">février</option>
								<option value="mars">mars</option>
								<option value="avril">avril</option>
								<option value="mai">mai</option>
								<option value="juin">juin</option>
								<option value="juillet">juillet</option>
								<option value="août">août</option>
								<option value="septembre">septembre</option>
								<option value="octobre">octobre</option>
								<option value="novembre">novembre</option>
								<option value="décembre">décembre</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm col-form-label" for="Day">Jour de la rencontre : </label>
						<div class="col-sm">
							<input name="day" id="Day" class="form-control " type="number" >
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm col-form-label" for="State">Département : </label>
						<div class="col-sm">
							<input name="state" id="State" class="form-control" type="text" >
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm col-form-label" for="City">Ville : </label>
						<div class="col-sm">
							<input name="city" id="City" class="form-control" type="text" >
						</div>
					</div>
					<button type="submit" class="btn btn-primary btn-lg btn-block">Envoyer les preuves</button>
				</form>
			</div>
			<div class="col-sm-4">

			</div>
		</div>

	</div>
	
	<?php 

	try{

		$bdd = new PDO('mysql:host=localhost;dbname=L_affaire_canardo;charset=utf8', 'benji', 'aqwsedcft7777');
	}

	catch (Exception $e){
		die('Erreur : ' . $e->getMessage());
	}
	?>

	<?php  
	if (empty($_POST['ducknumber']) && empty($_POST['year']) && empty($_POST['mounth']) && empty($_POST['day']) && empty($_POST['state']) && empty($_POST['city'])) {



	}

	else{

		
		$ducknumber = $_POST['ducknumber'];
		$year = $_POST['year'];
		$mounth = $_POST['mounth'];
		$day = $_POST['day'];
		$state = $_POST['state'];
		$city = $_POST['city'];
		
		
		$bdd->query("INSERT INTO pieces_a_conviction(Nombre_de_Canards, Année, Mois, Jour, Département, Ville)
			VALUES ('$ducknumber', '$year', '$mounth', '$day', '$state', '$city')") ;

		var_dump($ducknumber);
		var_dump($year);
		var_dump($mounth);
		var_dump($day);
		var_dump($state);
		var_dump($city);

		unset($ducknumber);
		unset($year);
		unset($mounth);
		unset($day);
		unset($state);
		unset($city);
		header("location:table.php");
	}
	
	?>



	<script type="text/javascript" src="bootstrap.min.js"></script>
	<script type="text/javascript" src="jquery.min.js"></script>
</body>
</html>