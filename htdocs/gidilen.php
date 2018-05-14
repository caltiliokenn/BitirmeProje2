<!DOCTYPE HTML>
<html>

<head>
	<title>Gidilecekler</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
	<link href="//fonts.googleapis.com/css?family=Bellefair&amp;subset=hebrew,latin-ext" rel="stylesheet">
	<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
</head>

<body>
	<div class="header">
		<div class="header_top">
			<div class="wrap">
				<div class="logo">
					<h1><a href="homepage.php" title="Followart Anasayfa">FOLLOWART</a></h1>
				</div>
				<div class="menu">
					<ul>
						
						<li>
							<a href="konser.php">KONSER</a>
						</li>
						
						<li>
							<a href="sinema.php">SİNEMA</a>
						</li>
						
						<li>
							<a href="tiyatro.php">TİYATRO</a>
						</li>
						
						<li class="active">
							<a href="gidilen.php">GİTTİKLERİM</a>
						</li>
						
						<li>
							<a href="önerilen.php">ÖNERİLENLER</a>
						</li>
						
						<li>
							<a href="profil.php">PROFİLİM</a>
						</li>
						
						<li>
							<a href="main.php?islem=cikis">ÇIKIŞ YAP</a>
						</li>
						<div class="clear"></div>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	
	<div class="secenek">
		
			<?php
				
				error_reporting(E_ALL^E_NOTICE);
				session_start();
				$email=$_SESSION['email'];
				
				echo "<ul>
						<li class=active><a href='gidilen_konser.php'>Konser</li>	
						<li><a href='gidilen_sinema.php'>Sinema</li>	
						<li><a href='gidilen_tiyatro.php'>Tiyatro</li>
						</ul>";	
			?>	
		
	</div>
	
	<div class="tum_liste">		
					
			<?php	
					
				$mysqli = new mysqli("localhost","root","","followart");
				mysqli_query($mysqli,"SET NAMES UTF8");
				$rowSet1 = mysqli_query($mysqli, $sql1 = "SELECT * FROM gidilen_konser WHERE email='$email';"); 
					
					echo    "<table><thead><th>Konser Adı</th><th>Konser Yeri</th><th>Konser Tarihi</th><th>Konser Türü</th></thead>";
						while($kayit = mysqli_fetch_assoc($rowSet1)){
								echo "<tr><td>{$kayit['name']}</td> 
									  <td>{$kayit['place']}</td> 	
									  <td>{$kayit['date']}</td>
		                              <td>{$kayit['kind']}</td>
		                              <td><a href='main.php?&email={$email}&konseradi={$kayit['name']}&konsertarihi={$kayit['date']}&islem=konsersil'>Listeden Sil</a></td></tr>";
						}
			
				echo	"</table>";

			?>
	
	</div>	
</body>

</html>