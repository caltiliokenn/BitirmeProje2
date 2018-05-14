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
</div>	
	
	<div class="main">
		<div class="wrap">
			<div class="content_top">
				<div class="events">
					<h2>Yakınlardaki Filmler</h2>
					<h5><a href="sinema_all.php">Tümünü Gör</h5>
					
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
																					
													$site='http://www.beyazperde.com/filmler/vizyondakiler/sinema-sayisi/';
													$icerik=file_get_contents($site);
													preg_match_all('@<h2 class="meta-title">(.*?)</h2>@si',$icerik,$sinema_adi);
													preg_match_all('@<span class="date">(.*?)</span>@si',$icerik,$sinema_tarihi);
													preg_match_all('@<span class="ACrL2ZACrpbG1sZXIvdHVtLWZpbG1sZXJpL2t1bGxhbmljaS1wdWFuaS90dXItMTMwM(.*?)</span>@si',$icerik,$sinema_turu);
											        $sinema_resim = ara('<img class="thumbnail-img" src="data:image/gif;base64,R0lGODlhAwAEAIAAAAAAAAAAACH5BAEAAAAALAAAAAADAAQAAAIDhI9WADs=" data-src=',' />',$icerik);
													
											        echo strip_tags($sinema_adi[0][0]);
													
											?>		
									</span>	
								</h4>
								<h3>
									<span>
										<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo strip_tags($sinema_tarihi[0][0]);
											?>
									</span>		
								</h3>
								<h4>
										
										<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo strip_tags($sinema_turu[0][0]);
										?>			
								</h4>
							</div>
							
							<div class="event_img">
									<img src=
												<?php 	
													error_reporting(E_ALL^E_NOTICE);
													$resim1 = explode(" ",$sinema_resim[0]);
													echo $resim1[0];
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
													echo strip_tags($sinema_adi[0][1]);
											?>		
									</span>
								</h4>
								<h3>
									<span>
											<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo strip_tags($sinema_tarihi[0][1]);
											?>
									</span>		
								</h3>
								<h4>
										
										<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo strip_tags($sinema_turu[0][1]);
										?>			
								</h4>
							</div>
							<div class="event_img">
									<img src=
												<?php 	
													error_reporting(E_ALL^E_NOTICE);
													$resim2 = explode(" ",$sinema_resim[1]);
													echo $resim2[0];
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
													echo strip_tags($sinema_adi[0][2]);
											?>		
									</span>
								</h4>
								<h3>
									<span>
											<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo strip_tags($sinema_tarihi[0][2]);
											?>
									</span>		
								</h3>
								<h4>
										
										<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo strip_tags($sinema_turu[0][2]);
										?>			
								</h4>
							</div>
							<div class="event_img">
									<img src=
												<?php 	
													error_reporting(E_ALL^E_NOTICE);
													$resim3 = explode(" ",$sinema_resim[2]);
													echo $resim3[0];
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
													echo strip_tags($sinema_adi[0][3]);
											?>		
									</span>
								</h4>
								<h3>
									<span>
											<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo strip_tags($sinema_tarihi[0][3]);
											?>
									</span>		
								</h3>
								<h4>
										
										<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo strip_tags($sinema_turu[0][3]);
										?>			
								</h4>
							</div>
							<div class="event_img">
									<img src=
												<?php 	
													error_reporting(E_ALL^E_NOTICE);
													$resim4 = explode(" ",$sinema_resim[3]);
													echo $resim4[0];
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
													echo strip_tags($sinema_adi[0][4]);
											?>		
									</span>
								</h4>
								<h3>
									<span>
											<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo strip_tags($sinema_tarihi[0][4]);
											?>
									</span>		
								</h3>
								<h4>
										
										<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo strip_tags($sinema_turu[0][4]);
										?>			
								</h4>
							</div>
							<div class="event_img">
									<img src=
												<?php 	
													error_reporting(E_ALL^E_NOTICE);
													$resim5 = explode(" ",$sinema_resim[4]);
													echo $resim5[0];
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
													echo strip_tags($sinema_adi[0][5]);
											?>		
									</span>
								</h4>
								<h3>
									<span>
											<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo strip_tags($sinema_tarihi[0][5]);
											?>
									</span>		
								</h3>
								<h4>
										
										<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo strip_tags($sinema_turu[0][5]);
										?>			
								</h4>
							</div>
							<div class="event_img">
									<img src=
												<?php 	
													error_reporting(E_ALL^E_NOTICE);
													$resim6 = explode(" ",$sinema_resim[5]);
													echo $resim6[0];
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