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
			<div id = "login">
				<h5><a href="login.php">Log in</a> / <a href="signup.php">Sign up</a></h5>
			</div>
			
			<!-- Header -->
			<div class="tab" id="header">
				<tabButton class="tablinks" onclick="openTab(event, 'accueil')" id="defaultOpen">Accueil</tabButton>
				<tabButton class="tablinks" onclick="openTab(event, 'a_laffiche')">A l'Affiche</tabButton>
				<tabButton class="tablinks" onclick="openTab(event, 'reserver')">Reserver</tabButton>
				<tabButton class="tablinks" onclick="openTab(event, 'cinema')">Cinema</tabButton>
				<!--<a href="cinema.php">Cinema</a>-->
				<tabButton class="tablinks" onclick="openTab(event, 'salle')">Salle</tabButton>
				<a href="films.php">Films</a>
				<tabButton class="tablinks" onclick="openTab(event, 'about')">About</tabButton>
				<div class="search-container">
					<form action="search.php">
						<input type="text" placeholder="Search..." name="keyword">
						<button type="submit"><i class="fa fa-search"></i></button>
					</form>
				</div>
			</div>

			<!-- Tab content -->
			<div id="accueil" class="tabcontent"><br>
				<?php
				?>
			</div>

			<div id="a_laffiche" class="tabcontent"><br>
				<?php
					$sql = "SELECT *
							FROM fmoment";
					$result = $mysqli->query($sql);

					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							echo "<b>" . $row["Film du moment"] . "</b><br><br>";
						}
					}
					else {
						echo "0 results";
					}
				?>
			</div>

			<div id="reserver" class="tabcontent"><br>
				<?php
				?>
			</div>
			
			<div id="cinema" class="tabcontent"><br>
				<!-- le centre de la page -->
				<div class="box">
					<div class="leftbox">
						<h1>
							Cin&eacute;ma Cyrano
						</h1>
						<p>
							Ville: Versailles
						</p>
						<p>
							Adresse: 7 Rue Rameau
						</p>
					</div>
					<div class="rightbox">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5898.800152998624!2d2.1285653317382964!3d48.80829351243358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xae5292dba566b769!2sUGC%20Cyrano!5e0!3m2!1sen!2sfr!4v1575996674914!5m2!1sen!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
					<br>
					<br>
					<div class="leftbox">
						<h1>
							Cin&eacute; Cit&eacute; La D&eacute;fense
						</h1>
						<p>
							Ville: Puteaux
						</p>
						<p>
							Adresse: Parvis de la d&eacute;fense, 92800 Puteaux
						</p>
					</div>

					<div class="rightbox">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.2556781982667!2d2.232739550809271!3d48.89146430623055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66502f6012a89%3A0x31d9bac0d2b5f5!2zVUdDIENpbsOpIENpdMOpIExhIETDqWZlbnNl!5e0!3m2!1sen!2sfr!4v1576611216527!5m2!1sen!2sfr" width="300" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
					<br>
					<br>
					<div class="leftbox">
						<h1>
							Cin&eacute;ma Montparnasse
						</h1>
						<p>
							Ville: Paris
						</p>
						<p>
							Adresse: 83 Boulevard du Montparnasse, 75006 Paris
						</p>
					</div>
					<div class="rightbox">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.7709942248734!2d2.3235664508073968!3d48.84350670960766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671cc377ee289%3A0x4f58b7db6e5d529a!2sUGC%20Montparnasse!5e0!3m2!1sen!2sfr!4v1576611481977!5m2!1sen!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
					<br>
					<br>
					<div class="leftbox">
						<h1>
							Cin&eacute; Cit&eacute; les Halles
						</h1>
						<p>
							Ville: Paris
						</p>
						<p>
							Adresse: 101 Rue Berger, 75001 Paris
						</p>
					</div>
					<div class="rightbox">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.7719241324066!2d2.341617050808149!3d48.86255940826616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66dccd2aaf385%3A0xdf8385a3509aca34!2sUGC%20Cine%20Cite%20les%20Halles!5e0!3m2!1sen!2sfr!4v1576611676219!5m2!1sen!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
					<br>
					<br>
					<div class="leftbox">
						<h1>
							Path&eacute; Boulogne
						</h1>
						<p>
							Ville: Boulogne
						</p>
						<p>
							Adresse: 26 Rue le Corbusier, 92100 Boulogne-Billancourt
						</p>
					</div>
					<div class="rightbox">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2626.0678848310904!2d2.2371215508071853!3d48.837843810006326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67ae78fed3317%3A0xf9d538009e9c421c!2sPath%C3%A9%20Boulogne!5e0!3m2!1sen!2sfr!4v1576612604866!5m2!1sen!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
					<br>
					<br>
					<div class="leftbox">
						<h1>
							Path&eacute; Beaugrenelle Movie Theatre
						</h1>
						<p>
							Ville: Paris
						</p>
						<p>
							Adresse: centre commercial, 7 Rue Linois, 75015 Paris
						</p>
					</div>
					<div class="rightbox">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.4731551282116!2d2.2801277508076083!3d48.84918720920774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67005d9ca376d%3A0x27dc7730f1e7ad4c!2sPath%C3%A9%20Beaugrenelle%20Movie%20Theatre!5e0!3m2!1sen!2sfr!4v1576612804469!5m2!1sen!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
					<br>
					<br>
					<div class="leftbox">
						<h1>
							Cin&eacute; Cit&eacute; V&eacute;lizy
						</h1>
						<p>
							Ville: V&eacute;lizy
						</p>
						<p>
							Adresse: 2 avenue De L'Europe Centre Commercial R&eacute;gional Velizy 2, 78140 V&eacute;lizy-Villacoublay
						</p>
					</div>
					<div class="rightbox">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2629.002694399217!2d2.219442450805002!3d48.781838813946756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67bd422ac5f0d%3A0x892b79b684ba7af1!2zVUdDIENpbsOpIENpdMOpIFbDqWxpenk!5e0!3m2!1sen!2sfr!4v1576613014743!5m2!1sen!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
					<br>
					<br>
					<div class="leftbox">
						<h1>
							Cin&eacute;ma CGR Montauban le Paris
						</h1>
						<p>
							Ville: Paris
						</p>
						<p>
							Adresse: 21 Boulevard Gustave Garrisson, 82000 Montauban
						</p>
					</div>
					<div class="rightbox">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22949.596605732964!2d1.3563745708646184!3d44.02760236309215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ac0df955f4b205%3A0xa9044b938c63badf!2sCin%C3%A9ma%20CGR%20Montauban%20le%20Paris!5e0!3m2!1sen!2sfr!4v1576613542050!5m2!1sen!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
					<br>
					<br>
					<div class="leftbox">
						<h1>
							Cin&eacute;ma L'Archipel
						</h1>
						<p>
							Ville: Paris
						</p>
						<p>
							Adresse: 17 Boulevard de Strasbourg, 75010 Paris
						</p>
					</div>
					<div class="rightbox">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22949.596605732964!2d1.3563745708646184!3d44.02760236309215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ac0df955f4b205%3A0xa9044b938c63badf!2sCin%C3%A9ma%20CGR%20Montauban%20le%20Paris!5e0!3m2!1sen!2sfr!4v1576613542050!5m2!1sen!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
					<br>
					<br>
					<div class="leftbox">
						<h1>
							Theatre of the Vesinet
						</h1>
						<p>
							Ville: V&eacute;sinet
						</p>
						<p>
							Adresse: 59 Boulevard Carnot, 78110 Le V&eacute;sinet
						</p>
					</div>
					<div class="rightbox">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.125539572586!2d2.1322528508093512!3d48.89394460605575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e662f54c9ab4e9%3A0x50c3380c10303cf0!2sTheatre%20of%20the%20Vesinet!5e0!3m2!1sen!2sfr!4v1576613751532!5m2!1sen!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
				</div>
			</div>
			
			<div id="salle" class="tabcontent"><br>
				<?php
				?>
			</div>
			
			
			
			<div id="about" class="tabcontent">
				<?php
					echo "<b>Projet de IN507 - Bases de Donn&eacute;es r&eacute;alis&eacute; par GOODMAN David et HAMMAD Amir</b>";
				?>
			</div>
			
			<!-- Footer -->
			<div class="footer">
				<h5><a href="#container">Retour en haut de page</a><br></h5>
				<h6>Copyright &copy; 2019 David Goodman and Amir Hammad. All Rights Reserved.</h6>
			</div>
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
