<!DOCTYPE HTML>
<html>
<head>
	<title>Etkinlikler</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="//fonts.googleapis.com/css?family=Bellefair&amp;subset=hebrew,latin-ext" rel="stylesheet">
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
						
						<li class="active">
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
						
						<li>
							<a href="profil.php">PROFİLİM</a>
						</li>
						
						<li>
							<a href="main.php?islem=cikis">ÇIKIŞ YAP</a>
						</li>
					</ul>	
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<br><br><br>
</div>	

	<div class="tum_liste">		
			<?php
		
						error_reporting(E_ALL^E_NOTICE);
						session_start();
						$email=$_SESSION['email'];
						function ara($bas, $son, $yazi){
						@preg_match_all('/' . preg_quote($bas, '/') . '(.*?)'. preg_quote($son, '/').'/i', $yazi, $m);
						return @$m[1];
					    }
																					
						$site='https://etkinlik.io/istanbul/konser';
						$icerik=file_get_contents($site);
						$konser_adi = ara('<span itemprop="name">','</span>',$icerik); //ad çift sayı
						$konser_yeri = ara('<span itemprop="name">','</span>',$icerik); //yer tek sayı
						preg_match_all('@<i class="plus icon"></i>(.*?)</div\>@si',$icerik,$konser_turu);
						preg_match_all('@<div class="meta">(.*?)</div>@si',$icerik,$konser_tarihi);
						
						$i=0;
						$j=1;
						$k=0;
				
				echo    "<table><thead><th>Konser Adı</th><th>Konser Yeri</th><th>Konser Tarihi</th><th>Konser Türü</th></thead>";
						
					while($i<52 && $j<53 && $k<27){
							$tarih1 = explode(",",$konser_tarihi[0][$k]);
							$tarih2 = strip_tags($tarih1[0]." ".$tarih1[1]);
							$tur = strip_tags($konser_turu[0][$k]);
						echo "<tr><td width=550px>$konser_adi[$i]</td><td>$konser_yeri[$j]</td><td>$tarih2</td><td>$tur</td><td><a href='main.php?&email={$email}&konseradi={$konser_adi[$i]}&konseryeri={$konser_yeri[$j]}&konsertarihi={$tarih2}&konserturu={$tur}&islem=konserekle'>Listeme Ekle</a></td></tr>";
							$i+=2;
							$j+=2;
							$k++;
					}
			
				echo	"</table>";

			?>
	
	</div>	
</body>

</html>