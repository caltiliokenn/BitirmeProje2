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
						
						<li>
							<a href="konser.php">KONSER</a>
						</li>
						
						<li>
							<a href="sinema.php">SİNEMA</a>
						</li>
						
						<li class="active">
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
																					
						$site='https://www.istanbul.net.tr/etkinlik/tiyatro/14/4';
						$icerik=file_get_contents($site);
						preg_match_all('@<item itemprop="name">(.*?)</item>@si',$icerik,$tiyatro_adi);
						preg_match_all('@<item itemprop="name">(.*?)</item>@si',$icerik,$tiyatro_yeri);
					    preg_match_all('@<item itemprop="startDate"(.*?)</item>@si',$icerik,$tiyatro_tarihi);
						
						$i=0;
						$j=1;
						$k=0;
				
				echo    "<table><thead><th>Tiyatro Adı</th><th>Tiyatro Yeri</th><th>Gösteri Tarihi</th></thead>";
						
					while($i<54 && $j<55 && $k<18){
							$tiyatro_adi[0][$i] = strip_tags($tiyatro_adi[0][$i]);
							$tiyatro_yeri[0][$j] = strip_tags($tiyatro_yeri[0][$j]);
							$tiyatro_tarihi[0][$k] = strip_tags($tiyatro_tarihi[0][$k]);
							$tarih1 = explode(",",$tiyatro_tarihi[0][$k]);
							$tarih2 = explode(" ",$tarih1[0]);
						    $tarih2[0] = str_replace("Nis","Nisan",$tarih2[0]);
							$tarih3 = $tarih2[1]." ".$tarih2[0]." ".$tarih1[1];
						echo "<tr><td width=550px>{$tiyatro_adi[0][$i]}</td><td>{$tiyatro_yeri[0][$j]}</td><td>$tarih3</td><td><a href='main.php?&email={$email}&tiyatroadi={$tiyatro_adi[0][$i]}&tiyatroyeri={$tiyatro_yeri[0][$j]}&tiyatrotarihi={$tarih3}&islem=tiyatroekle'>Listeme Ekle</a></td></tr>";
							$i+=3;
							$j+=3;
							$k++;
					}
			
				echo	"</table>";

			?>
	
	</div>	
	
	
		
</body>

</html>