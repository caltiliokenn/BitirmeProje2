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
						
						<li class="active">
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
																					
						$site='http://www.beyazperde.com/filmler/vizyondakiler/sinema-sayisi/';
						$icerik=file_get_contents($site);
						preg_match_all('@<h2 class="meta-title">(.*?)</h2>@si',$icerik,$sinema_adi);
						preg_match_all('@<span class="date">(.*?)</span>@si',$icerik,$sinema_tarihi);
						preg_match_all('@<span class="ACrL2ZACrpbG1sZXIvdHVtLWZpbG1sZXJpL2t1bGxhbmljaS1wdWFuaS90dXItMTMwM(.*?)</span>@si',$icerik,$sinema_turu);
						$sinema_resim = ara('<img class="thumbnail-img" src="data:image/gif;base64,R0lGODlhAwAEAIAAAAAAAAAAACH5BAEAAAAALAAAAAADAAQAAAIDhI9WADs=" data-src=',' />',$icerik);
						
						$i=0;
						$j=0;
						$k=0;
				
				echo    "<table><thead><th>Film Adı</th><th>Vizyon Tarihi</th><th>Film Türü</th></thead>";
						
					while($i<12 && $j<12 && $k<12){
							$ad = strip_tags($sinema_adi[0][$i]);
							$tarih = strip_tags($sinema_tarihi[0][$j]);
							$tur = strip_tags($sinema_turu[0][$k]);
							
						echo "<tr><td width=550px>$ad</td><td>$tarih</td><td>$tur</td><td><a href='main.php?&email={$email}&sinemaadi={$ad}&sinematarihi={$tarih}&sinematuru={$tur}&islem=sinemaekle'>Listeme Ekle</a></td></tr>";
							$i++;
							$j++;
							$k++;
					}
			
				echo	"</table>";

			?>
	
	</div>	
	
	
		
</body>

</html>