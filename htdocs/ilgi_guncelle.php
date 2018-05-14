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
				$email=$_SESSION['email'];
				$kfav=$_SESSION['userinfo']['kfav'];
				$sfav=$_SESSION['userinfo']['sfav'];
				
				

				echo	"<form action=main.php method=get>
							
							<select name=kfav onchange='showselected(this.value);'>
								<option value='{$kfav}'>{$kfav}</option>
								<option value='Klasik Müzik'>Klasik Müzik</option>
								<option value='Pop Müzik'>Pop Müzik</option>
								<option value='Rap Müzik'>Rap Müzik</option>
								<option value='Caz Müzik'>Caz Müzik</option>
								<option value='Rock Müzik'>Rock Müzik</option>
								<option value='Türk Sanat - Halk Müziği'>Türk Sanat - Halk Müziği</option>
								<option value='Alternatif Müzik'>Alternatif Müzik</option>
								<option value='Dünya Müzik'>Dünya Müzik</option>
								<option value='Parti & Canlı Müzik'>Parti & Canlı Müzik</option></select>
								
								<select name=sfav onchange='showselected(this.value);'>
								<option value='{$sfav}'>{$sfav}</option>
								<option value=Macera>Macera</option>
								<option value=Komedi>Komedi</option>
								<option value=Dram>Dram</option>
								<option value=Gerilim>Gerilim</option>
								<option value=Korku>Korku</option>
								<option value=Bilim-Kurgu>Bilim-Kurgu</option>
								<option value=Aksiyon>Aksiyon</option>
								<option value=Polisiye>Polisiye</option></select>			
							
							<div class=butonlar2>
								<input type=submit value= 'Değiştir ve Kaydet'>
								<input type=hidden name=email value='{$email}'>
								<input type=hidden name=islem value=ilgiguncelle></input>
							</div>
				
						</form>";
		?>	
				
		</div>
	</div>	
</body>

</html>