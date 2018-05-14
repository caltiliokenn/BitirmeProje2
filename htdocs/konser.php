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
</div>	
	
	<div class="main">
		<div class="wrap">
			<div class="content_top">
				<div class="events">
					<h2>Yaklaşan Konser Etkinlikleri</h2>
					<h5><a href="konser_all.php">Tümünü Gör</h5>
					
					<div class="section_group">
						<div class="event_list">
							<div class="event_time">
								<h4>
									<span>	
											<?php 	
													error_reporting(E_ALL^E_NOTICE);
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
													$konser_resim = ara('<img itemprop="image" src=',' />',$icerik);
													
													echo $konser_adi[0];
													
											?>		
									</span>	
								</h4>
								<h4>
										
										<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo $konser_yeri[1];
										?>			
								</h4>
								<h3>
									<span>
										<?php 	
													error_reporting(E_ALL^E_NOTICE);
													$tarih1 = explode(",",$konser_tarihi[0][0]);
													echo strip_tags($tarih1[0]." ".$tarih1[1]);
											?>
									</span>		
								</h3>
								<h4>
										
										<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo strip_tags($konser_turu[0][0]);
										?>			
								</h4>
							</div>
							
							<div class="event_img">
									<img src=
												<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo $konser_resim[0];
												?> 
											 alt="">
							</div>
						</div>						
						
						<div class="event_list">
							<div class="event_time">
								<h4>
									<span>	
											<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo $konser_adi[2];
											?>		
									</span>
								</h4>
								<h4>
											<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo $konser_yeri[3];
											?>
								</h4>
								<h3>
									<span>
											<?php 	
													error_reporting(E_ALL^E_NOTICE);
													$tarih2 = explode(",",$konser_tarihi[0][1]);
													echo $tarih2[0]." ".$tarih2[1];
											?>
									</span>		
								</h3>
								<h4>
										
										<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo strip_tags($konser_turu[0][1]);
										?>			
								</h4>
							</div>
							<div class="event_img">
									<img src=
												<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo $konser_resim[1];
												?> 
											 alt= "">
							</div>
						</div>
						<div class="event_list">
							<div class="event_time">
								<h4>
									<span>	
											<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo $konser_adi[4];
											?>		
									</span>
								</h4>
								<h4>
											<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo $konser_yeri[5];
											?>
								</h4>
								<h3>
									<span>
											<?php 	
													error_reporting(E_ALL^E_NOTICE);
													$tarih3 = explode(",",$konser_tarihi[0][2]);
													echo $tarih3[0]." ".$tarih3[1];
											?>
									</span>		
								</h3>
								<h4>
										
										<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo strip_tags($konser_turu[0][2]);
										?>			
								</h4>
							</div>
							<div class="event_img">
									<img src=
												<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo $konser_resim[2];
												?> 
											 alt="">
							</div>
						</div>
					</div>
					
					<div class="section_group">
						<div class="event_list">
							<div class="event_time">
								<h4>
									<span>	
											<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo $konser_adi[6];
											?>		
									</span>
								</h4>
								<h4>
											<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo $konser_yeri[7];
											?>
								</h4>
								<h3>
									<span>
											<?php 	
													error_reporting(E_ALL^E_NOTICE);
													$tarih4 = explode(",",$konser_tarihi[0][3]);
													echo $tarih4[0]." ".$tarih4[1];
											?>
									</span>		
								</h3>
								<h4>
										
										<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo strip_tags($konser_turu[0][3]);
										?>			
								</h4>
							</div>
							<div class="event_img">
									<img src=
												<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo $konser_resim[3];
												?> 
											 alt="">
							</div>
						</div>
						  
						<div class="event_list">
							<div class="event_time">
								<h4>
									<span>	
											<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo $konser_adi[8];
											?>		
									</span>
								</h4>
								<h4>
											<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo $konser_yeri[9];
											?>
								</h4>
								<h3>
									<span>
											<?php 	
													error_reporting(E_ALL^E_NOTICE);
													$tarih5 = explode(",",$konser_tarihi[0][4]);
													echo $tarih5[0]." ".$tarih5[1];
											?>
									</span>		
								</h3>
								<h4>
										
										<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo strip_tags($konser_turu[0][4]);
										?>			
								</h4>
							</div>
							<div class="event_img">
									<img src=
												<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo $konser_resim[4];
												?> 
											 alt="">
							</div>
						</div>
						
						<div class="event_list">
							<div class="event_time">
								<h4>
									<span>	
											<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo $konser_adi[10];
											?>		
									</span>
								</h4>
								<h4>
											<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo $konser_yeri[11];
											?>
								</h4>
								<h3>
									<span>
											<?php 	
													error_reporting(E_ALL^E_NOTICE);
													$tarih6 = explode(",",$konser_tarihi[0][5]);
													echo $tarih6[0]." ".$tarih6[1];
											?>
									</span>		
								</h3>
								<h4>
										
										<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo strip_tags($konser_turu[0][5]);
										?>			
								</h4>
							</div>
							<div class="event_img">
									<img src=
												<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo $konser_resim[5];
												?> 
											 alt="">
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
		
</body>

</html>