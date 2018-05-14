<!DOCTYPE HTML>
<html>

<head>
	<title>Profil</title>
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
						
						<li>
							<a href="gidilen.php">GİTTİKLERİM</a>
						</li>
						
						<li>
							<a href="önerilen.php">ÖNERİLENLER</a>
						</li>
						
						<li class="active">
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
	
	
	<div class="profil_liste">		
					
			<?php	
				
				error_reporting(E_ALL^E_NOTICE);
				session_start();
				$email=$_SESSION['email'];	
				$mysqli = new mysqli("localhost","root","","followart");
				mysqli_query($mysqli,"SET NAMES UTF8");
				$rowSet1 = mysqli_query($mysqli, $sql1 = "SELECT * FROM user WHERE email='$email';"); 
					
					echo    "<table>";
						while($kayit = mysqli_fetch_assoc($rowSet1)){
								echo "<tr><th>Adınız</th><td>{$kayit['name']}</td></tr> 
									  <tr><th>Soyadınız</th><td>{$kayit['surname']}</td></tr> 	
									  <tr><th>Yaşınız</th><td>{$kayit['age']}</td></tr>
									  <tr><th>E-mail Adresiniz</th><td>{$kayit['email']}</td></tr>
		                              <tr><th>Müzik İlgi Alanınız</th><td>{$kayit['kfav']}</td></tr>
		                              <tr><th>Film İlgi Alanınız</th><td>{$kayit['sfav']}</td></tr>";
						}
			
				echo	"</table>";

			?>
		
		<div class=butonlar>
			<input type=button value='Hesap Ayarları' onclick="window.location.href='hesap_ayarlari.php'";/>
			<input type=button value='Bilgilerimi Güncelle' onclick="window.location.href='bilgi_guncelle.php'";/>
			<input type=button value='İlgi Alanlarımı Değiştir' onclick="window.location.href='ilgi_guncelle.php'";/>
		</div>	
		
	</div>
</body>

</html>