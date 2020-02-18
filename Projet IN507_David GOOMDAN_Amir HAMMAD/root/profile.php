<!DOCTYPE html>
<html>
	<head>
		<title>O'Cin&#233; d'AzyGood</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="style.css">

		<!-- Script pour gèrer les tabs -->
		<script>
			function openTab(evt, tabName) {
				//Déclaration des variables
				var i, tabcontent, tablinks;
				//Cache le contenu des éléments marqués avec class="tabcontent"
				tabcontent = document.getElementsByClassName("tabcontent");
				for (i = 0; i < tabcontent.length; i++) {
					tabcontent[i].style.display = "none";
				}
				//Attrape tous les éléments avec la class="tablinks" et enlève la classe "active"
				tablinks = document.getElementsByClassName("tablinks");
				for (i = 0; i < tablinks.length; i++) {
					tablinks[i].className = tablinks[i].className.replace(" active", "");
				}
				//Affiche le tab courrant, et ajoute une classe "active" au boutton qui a ouvert le tab
				document.getElementById(tabName).style.display = "block";
				evt.currentTarget.className += " active";
			}
		</script>

	</head>

	<body>
		<?php
			include "db_connect.php";
		?>
		<!-- le haut de la page -->
		<div id="container">
			<!-- Logo -->
			<div id="logo">
				<img class="resize" src="../images/logo.png" alt="O'Cin&#233; d'AzyGood">
			</div>
			
			<!-- Titre -->
			<div id="title">
				<h1>O'Cin&#233; d'AzyGood: Billets de Cin&#233;ma</h1>
			</div>
			
			<!-- Login/Signup -->
			<div id="login">
				<h5><a href="login.php">Log in</a> / <a href="signup.php">Sign up</a></h5>
			</div>
			
			<!-- Header -->
			<div class="tab" id="header">
				<a href="index.php"><i class="fas fa-backward"></i> Retour &agrave; l'Accueil</a>
				<div class="search-container">
					<form action="search.php">
						<input type="text" placeholder="Search..." name="keyword">
						<button type="submit"><i class="fa fa-search"></i></button>
					</form>
				</div>
			</div>

			<!-- Tab content -->
			<?php
				error_reporting(0);
				
				$formkeyword = $_GET["username"];
				
				$sql = "SELECT *
						FROM client
						WHERE client.nom LIKE username";
						
				/*$nom = $_GET["nom"];
				$prenom = $_GET["prenom"];
				$age = $_GET["jour"];
				$sexe = $_GET["sexe"];*/

				$result = $mysqli->query($sql) or die(mysqli_error($mysqli));
				
				$row = $result->fetch_assoc()
				
				echo	"<h2>Informations de compte:</h2><b>Nom:</b>" . ["nom"] . "<br><b>Prenom:</b>" . ["prenom"] . "<br><b>Age:</b>" . ["age"] . "<br><b>Sexe:</b>" . ["sexe"] . "<br>";
			?>
			
			<form action="account_deletion_confirmation.php">
				<h3>Supprimer votre compte:</h3>
				Nom: <input type="text" name="nom"><br><br>
				Prenom: <input type="text" name="prenom"><br><br>
				Age: <input type="text" name="age"><br><br>
				Sexe: <input type="text" name="sexe"><br><br>
				<input type="submit" value="Submit">
			</form>
		</div>
		
		<!-- Footer -->
		<div class="footer">
			<h5><a href="#container">Retour en haut de page</a><br></h5>
			<h6>Copyright &copy; 2019 David Goodman and Amir Hammad. All Rights Reserved.</h6>
		</div>
		
		<!-- Script pour faire en sorte que le header s'accroche en haut de la page -->
		<script>
			window.onscroll = function() {makeSticky()}; //Quand l'utilisateur fait dérouler la page, execute makeSticky
			var header = document.getElementById("header"); //Obtient le header
			var sticky = header.offsetTop; //Obtien la position
			function makeSticky() {
				if (window.pageYOffset > sticky) {
					header.classList.add("sticky");
				}
				else {
				header.classList.remove("sticky");
				}
			}
		</script>
	</body>
	<?php
	$mysqli->close();
	?>
</html>
