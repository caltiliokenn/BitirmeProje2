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
</div>	
	
	<div class="main">
		<div class="wrap">
			<div class="content_top">
				<div class="events">
					<h2>Yaklaşan Tiyatro Etkinlikleri</h2>
					<h5><a href="tiyatro_all.php">Tümünü Gör</h5>
					
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
																					
													$site='https://www.istanbul.net.tr/etkinlik/tiyatro/14/4';
													$icerik=file_get_contents($site);
													preg_match_all('@<item itemprop="name">(.*?)</item>@si',$icerik,$tiyatro_adi);
													preg_match_all('@<item itemprop="name">(.*?)</item>@si',$icerik,$tiyatro_yeri);
													preg_match_all('@<item itemprop="startDate"(.*?)</item>@si',$icerik,$tiyatro_tarihi);
													$tiyatro_resim = ara('<img itemprop="image" src=','class=',$icerik);
													
													echo $tiyatro_adi[0][0];
													
											?>		
									</span>	
								</h4>
								<h4>
										
										<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo $tiyatro_yeri[0][1];
										?>			
								</h4>
								<h3>
									<span>
										<?php 	
													error_reporting(E_ALL^E_NOTICE);
													$tiyatro_tarihi[0][0] = strip_tags($tiyatro_tarihi[0][0]);
													$tarih1 = explode(",",$tiyatro_tarihi[0][0]);
													$tarih1_1 = explode(" ",$tarih1[0]);
													$tarih1_1[0] = str_replace("Nis","Nisan",$tarih1_1[0]);
													echo $tarih1_1[1]." ".$tarih1_1[0]." ".$tarih1[1];		
											?>
									</span>		
								</h3>
							</div>
							
							<div class="event_img">
									<img src=
												<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo $tiyatro_resim[0];
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
													echo $tiyatro_adi[0][3];
											?>		
									</span>
								</h4>
								<h4>
											<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo $tiyatro_yeri[0][4];
											?>
								</h4>
								<h3>
									<span>
											<?php 	
													error_reporting(E_ALL^E_NOTICE);
													$tiyatro_tarihi[0][1] = strip_tags($tiyatro_tarihi[0][1]);
													$tarih2 = explode(",",$tiyatro_tarihi[0][1]);
													$tarih2_1 = explode(" ",$tarih2[0]);
													$tarih2_1[0] = str_replace("Nis","Nisan",$tarih2_1[0]);
													echo $tarih2_1[1]." ".$tarih2_1[0]." ".$tarih2[1];
											?>
									</span>		
								</h3>
							</div>
							<div class="event_img">
									<img src=
												<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo $tiyatro_resim[1];
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
													echo $tiyatro_adi[0][6];
											?>		
									</span>
								</h4>
								<h4>
											<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo $tiyatro_yeri[0][7];
											?>
								</h4>
								<h3>
									<span>
											<?php 	
													error_reporting(E_ALL^E_NOTICE);
													$tiyatro_tarihi[0][2] = strip_tags($tiyatro_tarihi[0][2]);
													$tarih3 = explode(",",$tiyatro_tarihi[0][2]);
													$tarih3_1 = explode(" ",$tarih3[0]);
													$tarih3_1[0] = str_replace("Nis","Nisan",$tarih3_1[0]);
													echo $tarih3_1[1]." ".$tarih3_1[0]." ".$tarih3[1];
											?>
									</span>		
								</h3>
							</div>
							<div class="event_img">
									<img src=
												<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo $tiyatro_resim[2];
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
													echo $tiyatro_adi[0][9];
											?>		
									</span>
								</h4>
								<h4>
											<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo $tiyatro_yeri[0][10];
											?>
								</h4>
								<h3>
									<span>
											<?php 	
													error_reporting(E_ALL^E_NOTICE);
													$tiyatro_tarihi[0][3] = strip_tags($tiyatro_tarihi[0][3]);
													$tarih4 = explode(",",$tiyatro_tarihi[0][3]);
													$tarih4_1 = explode(" ",$tarih4[0]);
													$tarih4_1[0] = str_replace("Nis","Nisan",$tarih4_1[0]);
													echo $tarih4_1[1]." ".$tarih4_1[0]." ".$tarih4[1];
											?>
									</span>		
								</h3>
							</div>
							<div class="event_img">
									<img src=
												<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo $tiyatro_resim[3];
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
													echo $tiyatro_adi[0][12];
											?>		
									</span>
								</h4>
								<h4>
											<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo $tiyatro_yeri[0][13];
											?>
								</h4>
								<h3>
									<span>
											<?php 	
													error_reporting(E_ALL^E_NOTICE);
													$tiyatro_tarihi[0][4] = strip_tags($tiyatro_tarihi[0][4]);
													$tarih5 = explode(",",$tiyatro_tarihi[0][4]);
													$tarih5_1 = explode(" ",$tarih5[0]);
													$tarih5_1[0] = str_replace("Nis","Nisan",$tarih5_1[0]);
													echo $tarih5_1[1]." ".$tarih5_1[0]." ".$tarih5[1];
											?>
									</span>		
								</h3>
							</div>
							<div class="event_img">
									<img src=
												<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo $tiyatro_resim[4];
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
													echo $tiyatro_adi[0][15];
											?>		
									</span>
								</h4>
								<h4>
											<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo $tiyatro_yeri[0][16];
											?>
								</h4>
								<h3>
									<span>
											<?php 	
													error_reporting(E_ALL^E_NOTICE);
													$tiyatro_tarihi[0][5] = strip_tags($tiyatro_tarihi[0][5]);
													$tarih6 = explode(",",$tiyatro_tarihi[0][5]);
													$tarih6_1 = explode(" ",$tarih6[0]);
													$tarih6_1[0] = str_replace("Nis","Nisan",$tarih6_1[0]);
													echo $tarih6_1[1]." ".$tarih6_1[0]." ".$tarih6[1];
											?>
									</span>		
								</h3>
							</div>
							<div class="event_img">
									<img src=
												<?php 	
													error_reporting(E_ALL^E_NOTICE);
													echo $tiyatro_resim[5];
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