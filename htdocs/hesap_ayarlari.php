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
				
				
				echo  "<form action=main.php method=get>
							<input  placeholder='Mevcut Şifreniz' name=eskisifre class=pass type=password required=''>
							<input  placeholder='Yeni Şifreniz' name=yenisifre class=pass type=password required=''>
							<input  placeholder='Yeni Şifrenizi Tekrarlayın' name=onaysifre class=pass type=password required=''>
							
					<div class=butonlar2>
						<input type=submit value= 'Şifremi Değiştir'>
						<input type=hidden name=email value='{$email}'></input>
						<input type=hidden name=islem value=sifreguncelle></input>
					</div>";
			?>				
						
						</form>
				
		</div>
		<div class=butonlar3>
			<input type=button value= 'Hesabı Sil' onclick='hesapsil()'>
		</div>
		<script>
			function hesapsil() {
									
				if (confirm("Hesabı silmek istediğinize emin misiniz?")) {
					<?php echo "window.location.href='main.php?islem=hesapsil&email={$email}'"; ?>
				} else {
					window.location.href='hesap_ayarlari.php';
				} 
			}
		</script>
	</div>	
</body>

</html>