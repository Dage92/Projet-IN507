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
			
			<form action="account_creation_confirmation.php">
				<h3>Cr&eacute;ation d'un nouveau compte:</h3>
				Nom: <input type="text" required name="nom"><br><br>
				Prenom: <input type="text" required name="prenom"><br><br>
				Date de naissance:
					<select name="jour">
						<option value="jour">Jour</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
					</select>
					<select name="mois">
						<option value='mois'>Mois</option>
						<option value='janvier'>Janvier</option>
						<option value='fevrier'>F&eacute;vrier</option>
						<option value='mars'>Mars</option>
						<option value='avril'>Avril</option>
						<option value='mai'>Mai</option>
						<option value='juin'>Juin</option>
						<option value='juillet'>Juillet</option>
						<option value='aout'>Ao&#251;t</option>
						<option value='septembre'>Septembre</option>
						<option value='octobre'>Octobre</option>
						<option value='novembre'>Novembre</option>
						<option value='decembre'>D&#233;cembre</option>
					</select>
					<select name='annee'>
						<option value='annee'>Ann&#233;e</option>
						<option value='1947'>1947</option>
						<option value='1948'>1948</option>
						<option value='1949'>1949</option>
						<option value='1950'>1950</option>
						<option value='1951'>1951</option>
						<option value='1952'>1952</option>
						<option value='1953'>1953</option>
						<option value='1954'>1954</option>
						<option value='1955'>1955</option>
						<option value='1956'>1956</option>
						<option value='1957'>1957</option>
						<option value='1958'>1958</option>
						<option value='1959'>1959</option>
						<option value='1960'>1960</option>
						<option value='1961'>1961</option>
						<option value='1962'>1962</option>
						<option value='1963'>1963</option>
						<option value='1964'>1964</option>
						<option value='1965'>1965</option>
						<option value='1966'>1966</option>
						<option value='1967'>1967</option>
						<option value='1968'>1968</option>
						<option value='1969'>1969</option>
						<option value='1970'>1970</option>
						<option value='1971'>1971</option>
						<option value='1972'>1972</option>
						<option value='1973'>1973</option>
						<option value='1974'>1974</option>
						<option value='1975'>1975</option>
						<option value='1976'>1976</option>
						<option value='1977'>1977</option>
						<option value='1978'>1978</option>
						<option value='1979'>1979</option>
						<option value='1980'>1980</option>
						<option value='1981'>1981</option>
						<option value='1982'>1982</option>
						<option value='1983'>1983</option>
						<option value='1984'>1984</option>
						<option value='1985'>1985</option>
						<option value='1986'>1986</option>
						<option value='1987'>1987</option>
						<option value='1988'>1988</option>
						<option value='1989'>1989</option>
						<option value='1990'>1990</option>
						<option value='1991'>1991</option>
						<option value='1992'>1992</option>
						<option value='1993'>1993</option>
						<option value='1994'>1994</option>
						<option value='1995'>1995</option>
						<option value='1996'>1996</option>
						<option value='1997'>1997</option>
						<option value='1998'>1998</option>
						<option value='1999'>1999</option>
						<option value='2000'>2000</option>
						<option value='2001'>2001</option>
					</select><br><br>
				Sexe:<br>
					<input type="radio" name="sexe" value="Homme"> Homme<br>
					<input type="radio" name="sexe" value="Femme"> Femme<br>
					<input type="radio" name="sexe" value="Autre"> Autre<br><br>
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
