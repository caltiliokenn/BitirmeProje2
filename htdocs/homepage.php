<!DOCTYPE HTML>
<html>
<head>
	<title>Followart Anasayfa</title>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/slider.css" rel="stylesheet" type="text/css" media="all" />
	<link href="//fonts.googleapis.com/css?family=Bellefair&amp;subset=hebrew,latin-ext" rel="stylesheet">
	
	<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
	<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
	<script type="text/javascript">
		$(window).load(function () {
			$('#slider').nivoSlider();
		});
	</script>
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
		
		<!------ Slider ------------>
		<div class="wrap">
			<div class="slider">
				<div class="theme-default">
					<div id="slider" class="nivoSlider">
						<img src="images/konser1.jpg" data-thumb="images/konser1" alt="" />
						<img src="images/konser2.jpg" data-thumb="images/konser2" alt="" />
						<img src="images/sinema1.jpg" data-thumb="images/sinema1" alt="" />
						<img src="images/sinema2.jpg" data-thumb="images/sinema2" alt="" />
						<img src="images/tiyatro1.jpg" data-thumb="images/tiyatro1" alt="" />
						<img src="images/tiyatro2.jpg" data-thumb="images/tiyatro2" alt="" />
					</div>
				</div>
			</div>
		</div>
		<!------End Slider ------------>
	</div>
	
	<?php 	
			error_reporting(E_ALL^E_NOTICE);
			session_start();
						$email=$_SESSION['email'];
						$yas = $_SESSION['info']['age'];		
						$fav = $_SESSION['info']['kfav'];
			function ara($bas, $son, $yazi){
			@preg_match_all('/' . preg_quote($bas, '/') . '(.*?)'. preg_quote($son, '/').'/i', $yazi, $m);
			return @$m[1];
			}
				
			$site='https://etkinlik.io/istanbul/konser';
			$site2='http://www.beyazperde.com/filmler/vizyondakiler/sinema-sayisi/';
			$site3='https://www.istanbul.net.tr/etkinlik/tiyatro/14/4';
			$icerik=file_get_contents($site);	
			$icerik2=file_get_contents($site2);	
			$icerik3=file_get_contents($site3);	
			$konser_resim = ara('<img itemprop="image" src=',' />',$icerik);
			$sinema_resim = ara('<img class="thumbnail-img" src="data:image/gif;base64,R0lGODlhAwAEAIAAAAAAAAAAACH5BAEAAAAALAAAAAADAAQAAAIDhI9WADs=" data-src=',' />',$icerik2);
			$tiyatro_resim = ara('<img itemprop="image" src=','class=',$icerik3);
			preg_match_all('@<div class="meta">(.*?)</div>@si',$icerik,$konser_tarihi);										
			preg_match_all('@<span class="date">(.*?)</span>@si',$icerik2,$sinema_tarihi);										
			preg_match_all('@<item itemprop="startDate"(.*?)</item>@si',$icerik3,$tiyatro_tarihi);									
	?> 
	
	<div class="main">
		<div class="wrap">
			<div class="section_group">
				<div class="uclu_liste">
					<a href="konser.php">
						<div class="event_resim">
							<img src=
									<?php 	
											error_reporting(E_ALL^E_NOTICE);
											echo $konser_resim[0];
									?>			
								alt="" />
						</div>
						<div class="event_yazi">
							<div class="date">
								<figure>
									<span><?php 	
											error_reporting(E_ALL^E_NOTICE);
											$tarih1_1 = explode(",",$konser_tarihi[0][0]);
											$tarih1_2 = explode(" ",$tarih1_1[0]);
											echo $tarih1_2[13];
									?>
									</span>
									<?php 	
											error_reporting(E_ALL^E_NOTICE);
											echo $tarih1_2[14];
									?>
									</figure>
							</div>
						</div>
					</a>
				</div>
				
				<div class="uclu_liste">
					<a href="sinema.php">
						<div class="event_resim">
							<img src=
									<?php 	
											error_reporting(E_ALL^E_NOTICE);
											echo $sinema_resim[0];
									?>	
								alt="" />
						</div>
						<div class="event_yazi">
							<div class="date">
								<figure>
									<span><?php 	
											error_reporting(E_ALL^E_NOTICE);
											$sinema_tarihi[0][0] = strip_tags($sinema_tarihi[0][0]);
											$starih = explode(" ",$sinema_tarihi[0][0]);
											echo $starih[0];
									?>
									</span>
									<?php 	
											error_reporting(E_ALL^E_NOTICE);
											echo $starih[1];
									?>
									</figure>
							</div>
						</div>
					</a>
				</div>
				
				<div class="uclu_liste">
					<a href="tiyatro.php">
						<div class="event_resim">
							<img src=
									<?php 	
											error_reporting(E_ALL^E_NOTICE);
											echo $tiyatro_resim[0];
									?>	
								alt="" />
						</div>
						<div class="event_yazi">
							<div class="date">
								<figure>
									<span><?php 	
											error_reporting(E_ALL^E_NOTICE);
											$tiyatro_tarihi[0][0] = strip_tags($tiyatro_tarihi[0][0]);
											$ttarih = explode(",",$tiyatro_tarihi[0][0]);
											$ttarih1 = explode(" ",$ttarih[0]);
											$ttarih1[0] = str_replace("Nis","Nisan",$ttarih1[0]);
											echo $ttarih1[1];	
									?>
									</span>
									<?php 	
											error_reporting(E_ALL^E_NOTICE);
											echo $ttarih1[0];
									?>
									</figure>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</body>

</html>