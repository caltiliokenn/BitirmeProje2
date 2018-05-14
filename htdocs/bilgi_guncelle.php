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
	
	
	<div class="form_alani">
		<div class="form_alani2">

		<?php	
				
				error_reporting(E_ALL^E_NOTICE);
				session_start();
				$email = $_SESSION['email'];
				$name = $_SESSION['userinfo']['name'];
				$surname = $_SESSION['userinfo']['surname'];
				$age = $_SESSION['userinfo']['age'];
				
				
				echo	"<form action=main.php method=get>
							<input placeholder='E-mail Adresiniz' name=email class=user type=email value='{$email}' required=''>
							<input  placeholder='Adınız' name=ad class=ad type=text value='{$name}' required=''>
							<input  placeholder='Soyadınız' name=soyad class=surname type=text value='{$surname}' required=''>
							<input  placeholder='Yaşınız' name=yas class=age type=number value={$age} required=''>
		
								<div class=butonlar2>
									<input type=submit value= 'Kaydet'>
									<input type=hidden name=islem value=bilgiguncelle></input>
								</div>
							
						</form>";
		
		?>	
				
		</div>
	</div>	
</body>

</html>