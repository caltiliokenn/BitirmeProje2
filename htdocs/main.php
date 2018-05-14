<html>

<?php
error_reporting(E_ALL^E_NOTICE);
session_start();
switch($_GET['islem']){
	
	case 'login':
		login($_GET['email'],$_GET['sifre']);
		break;
	
	case 'register':
		register($_GET['email'],$_GET['sifre'],$_GET['ad'],$_GET['soyad'],$_GET[yas],$_GET['kfav'],$_GET['sfav']);
		break;

	case 'cikis':
		cikis();
		break;
		
	case 'konserekle':
		konserekle($_GET['email'],$_GET['konseradi'],$_GET['konseryeri'],$_GET['konsertarihi'],$_GET['konserturu']);
		break;
		
	case 'sinemaekle':
		sinemaekle($_GET['email'],$_GET['sinemaadi'],$_GET['sinematarihi'],$_GET['sinematuru']);
		break;
			
	case 'tiyatroekle':
		tiyatroekle($_GET['email'],$_GET['tiyatroadi'],$_GET['tiyatroyeri'],$_GET['tiyatrotarihi']);
		break;	
	
	case 'konseroneriekle':
		konseroneriekle($_GET['email'],$_GET['konseradi'],$_GET['konseryeri'],$_GET['konsertarihi'],$_GET['konserturu']);
		break;
	
	case 'sinemaoneriekle':
		sinemaoneriekle($_GET['email'],$_GET['sinemaadi'],$_GET['sinematarihi'],$_GET['sinematuru']);
		break;

	case 'tiyatrooneriekle':
		tiyatrooneriekle($_GET['email'],$_GET['tiyatroadi'],$_GET['tiyatroyeri'],$_GET['tiyatrotarihi']);
		break;	
		
	case 'konsersil':
		konsersil($_GET['email'],$_GET['konseradi'],$_GET['konsertarihi']);
		break;
		
	case 'sinemasil':
		sinemasil($_GET['email'],$_GET['sinemaadi'],$_GET['sinematarihi']);
		break;

	case 'tiyatrosil':
		tiyatrosil($_GET['email'],$_GET['tiyatroadi'],$_GET['tiyatrotarihi']);
		break;

	case 'hesapsil':
		hesapsil($_GET['email']);
		break;
		
	case 'sifreguncelle':
		sifreguncelle($_GET['email'],$_GET['eskisifre'],$_GET['yenisifre'],$_GET['onaysifre']);
		break;

	case 'bilgiguncelle':
		bilgiguncelle($_GET['email'],$_GET['ad'],$_GET['soyad'],$_GET['yas']);
		break;

	case 'ilgiguncelle':
		ilgiguncelle($_GET['email'],$_GET['kfav'],$_GET['sfav']);
		break;		
		
}
				
		
	function login($email,$sifre){
		$mysqli = new mysqli("localhost","root","","followart");
		mysqli_query($mysqli,"SET NAMES UTF8");
		$rowSet1 = mysqli_query($mysqli, $sql = "SELECT * FROM user WHERE email='$email' AND sifre=md5('$sifre');"); 
			if(mysqli_num_rows($rowSet1)>0){
				$_SESSION['email']=$email;
				$_SESSION['userinfo']=mysqli_fetch_assoc($rowSet1);
				header("Location:homepage.php");
			}
			else{
				echo "<script>alert('Hatalı email ya da şifre')
					  window.location.replace(\"http://localhost/login.php\")</script>";
				
			}
		mysqli_close($mysqli);	
}	

	function register($email,$sifre,$ad,$soyad,$yas,$kfav,$sfav){
		$mysqli = new mysqli("localhost","root","","followart");
		mysqli_query($mysqli,"SET NAMES UTF8");
		$email = trim($email);
		$sifre = trim($sifre);
		$ad = trim($ad);
		$soyad = trim($soyad);
		$yas = trim($yas);
		$kfav = trim($kfav);
		$sfav = trim($sfav);
		
			if($yas<=90 and $yas>=15){
			  $rowSet1 = mysqli_query($mysqli, $sql = "INSERT INTO user VALUES('$email',md5('$sifre'),'$ad','$soyad',$yas,'$kfav','$sfav');");
				
				if( mysqli_affected_rows($mysqli)>0){
					echo "<script>alert('Kayıt başarılı')
						  window.location.replace(\"http://localhost/login.php\")</script>";
				}	
				else{
					echo "<script>alert('Bu e-mail sistemde zaten kayıtlı')
					  window.location.replace(\"http://localhost/register.php\")</script>";
				}
			}
			else{
				echo "<script>alert('Lütfen geçerli bir yaş giriniz')
					  window.location.replace(\"http://localhost/register.php\")</script>";
				
	}
		mysqli_close($mysqli);
}

	function konserekle($email,$konseradi,$konseryeri,$konsertarihi,$konserturu){
		$mysqli = new mysqli("localhost","root","","followart");
		mysqli_query($mysqli,"SET NAMES UTF8");
		$email = trim($email);
		$konseradi = trim($konseradi);
		$konseryeri = trim($konseryeri);
		$konsertarihi = trim($konsertarihi);
		$konserturu = trim($konserturu);
		$rowSet1 = mysqli_query($mysqli, $sql = "INSERT INTO gidilen_konser VALUES('$email','$konseradi','$konseryeri','$konsertarihi','$konserturu');");
		
				if( mysqli_affected_rows($mysqli)>0){
					$_SESSION['email']=$email;
					echo "<script>alert('$konseradi listenize başarıyla eklendi')
						  window.location.replace(\"http://localhost/konser_all.php\")</script>";
				}	
				else{
					echo "<script>alert('Bu etklinlik listenizde yer alıyor')
						  window.location.replace(\"http://localhost/konser_all.php\")</script>";
				
				}
	}
	
	function sinemaekle($email,$sinemaadi,$sinematarihi,$sinematuru){
		$mysqli = new mysqli("localhost","root","","followart");
		mysqli_query($mysqli,"SET NAMES UTF8");
		$email = trim($email);
		$sinemaadi = trim($sinemaadi);
		$sinematarihi = trim($sinematarihi);
		$sinematuru = trim($sinematuru);
		$rowSet1 = mysqli_query($mysqli, $sql = "INSERT INTO gidilen_sinema VALUES('$email','$sinemaadi','$sinematarihi','$sinematuru');");
		
				if( mysqli_affected_rows($mysqli)>0){
					$_SESSION['email']=$email;
					echo "<script>alert('$sinemaadi listenize başarıyla eklendi')
						  window.location.replace(\"http://localhost/sinema_all.php\")</script>";
				}	
				else{
					echo "<script>alert('Bu etklinlik listenizde yer alıyor')
						  window.location.replace(\"http://localhost/sinema_all.php\")</script>";
				
				}
	}

	function tiyatroekle($email,$tiyatroadi,$tiyatroyeri,$tiyatrotarihi){
		$mysqli = new mysqli("localhost","root","","followart");
		mysqli_query($mysqli,"SET NAMES UTF8");
		$email = trim($email);
		$tiyatroadi = trim($tiyatroadi);
		$tiyatroyeri = trim($tiyatroyeri);
		$tiyatrotarihi = trim($tiyatrotarihi);
		$rowSet1 = mysqli_query($mysqli, $sql = "INSERT INTO gidilen_tiyatro VALUES('$email','$tiyatroadi','$tiyatroyeri','$tiyatrotarihi');");
		
				if( mysqli_affected_rows($mysqli)>0){
					$_SESSION['email']=$email;
					echo "<script>alert('$tiyatroadi listenize başarıyla eklendi')
						  window.location.replace(\"http://localhost/tiyatro_all.php\")</script>";
				}	
				else{
					echo "<script>alert('Bu etklinlik listenizde yer alıyor')
						  window.location.replace(\"http://localhost/tiyatro_all.php\")</script>";
				
				}
	}
	
	function konseroneriekle($email,$konseradi,$konseryeri,$konsertarihi,$konserturu){
		$mysqli = new mysqli("localhost","root","","followart");
		mysqli_query($mysqli,"SET NAMES UTF8");
		$email = trim($email);
		$konseradi = trim($konseradi);
		$konseryeri = trim($konseryeri);
		$konsertarihi = trim($konsertarihi);
		$konserturu = trim($konserturu);
		$rowSet1 = mysqli_query($mysqli, $sql = "INSERT INTO gidilen_konser VALUES('$email','$konseradi','$konseryeri','$konsertarihi','$konserturu');");
		
				if( mysqli_affected_rows($mysqli)>0){
					$_SESSION['email']=$email;
					echo "<script>alert('$konseradi listenize başarıyla eklendi')
						  window.location.replace(\"http://localhost/önerilen_konser.php\")</script>";
				}	
				else{
					echo "<script>alert('Kayıt eklenemedi')
						  window.location.replace(\"http://localhost/önerilen_konser.php\")</script>";
				
				}
	}
	
	function sinemaoneriekle($email,$sinemaadi,$sinematarihi,$sinematuru){
		$mysqli = new mysqli("localhost","root","","followart");
		mysqli_query($mysqli,"SET NAMES UTF8");
		$email = trim($email);
		$sinemaadi = trim($sinemadi);
		$sinematarihi = trim($sinematarihi);
		$sinematuru = trim($sinematuru);
		$rowSet1 = mysqli_query($mysqli, $sql = "INSERT INTO gidilen_sinema VALUES('$email','$sinemaadi','$sinematarihi','$sinematuru');");
		
				if( mysqli_affected_rows($mysqli)>0){
					$_SESSION['email']=$email;
					echo "<script>alert('$sinemaadi listenize başarıyla eklendi')
						  window.location.replace(\"http://localhost/önerilen_sinema.php\")</script>";
				}	
				else{
					echo "<script>alert('Kayıt eklenemedi')
						  window.location.replace(\"http://localhost/önerilen_sinema.php\")</script>";
				
				}
	}
	
	function tiyatrooneriekle($email,$tiyatroadi,$tiyatroyeri,$tiyatrotarihi){
		$mysqli = new mysqli("localhost","root","","followart");
		mysqli_query($mysqli,"SET NAMES UTF8");
		$email = trim($email);
		$tiyatroadi = trim($tiyatroadi);
		$tiyatroyeri = trim($tiyatroyeri);
		$tiyatrotarihi = trim($tiyatrotarihi);
		$rowSet1 = mysqli_query($mysqli, $sql = "INSERT INTO gidilen_tiyatro VALUES('$email','$tiyatroadi','$tiyatroyeri','$tiyatrotarihi');");
		
				if( mysqli_affected_rows($mysqli)>0){
					$_SESSION['email']=$email;
					echo "<script>alert('$tiyatroadi listenize başarıyla eklendi')
						  window.location.replace(\"http://localhost/önerilen_tiyatro.php\")</script>";
				}	
				else{
					echo "<script>alert('Kayıt eklenemedi')
						  window.location.replace(\"http://localhost/önerilen_tiyatro.php\")</script>";
				
				}
	}
	
	function konsersil($email,$konseradi,$konsertarihi){
		$mysqli = new mysqli("localhost","root","","followart");
		mysqli_query($mysqli,"SET NAMES UTF8");
		$email = trim($email);
		$konseradi = trim($konseradi);;
		$konsertarihi = trim($konsertarihi);
		$rowSet1 = mysqli_query($mysqli, $sql = "DELETE FROM gidilen_konser WHERE email='$email' AND name='$konseradi' AND date='$konsertarihi';");
		
		if( mysqli_affected_rows($mysqli)>0){
					$_SESSION['email']=$email;
					echo "<script>alert('Kayıt silindi')
						  window.location.replace(\"http://localhost/gidilen_konser.php\")</script>";
							
		}
		
		else
					echo "<script>alert('Kayıt silinemedi')
						  window.location.replace(\"http://localhost/gidilen_konser.php\")</script>";
	}
	
	function sinemasil($email,$sinemaadi,$sinematarihi){
		$mysqli = new mysqli("localhost","root","","followart");
		mysqli_query($mysqli,"SET NAMES UTF8");
		$email = trim($email);
		$sinemaadi = trim($sinemaadi);;
		$sinematarihi = trim($sinematarihi);
		$rowSet1 = mysqli_query($mysqli, $sql = "DELETE FROM gidilen_sinema WHERE email='$email' AND name='$sinemaadi' AND date='$sinematarihi';");
		
		if( mysqli_affected_rows($mysqli)>0){
					$_SESSION['email']=$email;
					echo "<script>alert('Kayıt silindi')
						  window.location.replace(\"http://localhost/gidilen_sinema.php\")</script>";
							
		}
		
		else
					echo "<script>alert('Kayıt silinemedi')
						  window.location.replace(\"http://localhost/gidilen_sinema.php\")</script>";
	}
	
	function tiyatrosil($email,$tiyatroadi,$tiyatrotarihi){
		$mysqli = new mysqli("localhost","root","","followart");
		mysqli_query($mysqli,"SET NAMES UTF8");
		$email = trim($email);
		$tiyatroadi = trim($tiyatroadi);;
		$tiyatrotarihi = trim($tiyatrotarihi);
		$rowSet1 = mysqli_query($mysqli, $sql = "DELETE FROM gidilen_tiyatro WHERE email='$email' AND name='$tiyatroadi' AND date='$tiyatrotarihi';");
		
		if( mysqli_affected_rows($mysqli)>0){
					$_SESSION['email']=$email;
					echo "<script>alert('Kayıt silindi')
						  window.location.replace(\"http://localhost/gidilen_tiyatro.php\")</script>";
							
		}
		
		else
					echo "<script>alert('Kayıt silinemedi')
						  window.location.replace(\"http://localhost/gidilen_tiyatro.php\")</script>";
	}
	
	function hesapsil($email){
		$mysqli = new mysqli("localhost","root","","followart");
		mysqli_query($mysqli,"SET NAMES UTF8");
		$email = trim($email);
		$rowSet1 = mysqli_query($mysqli, $sql = "DELETE FROM user WHERE email='$email';");
		
			echo "<script>alert('Hesap silindi')</script>";
			cikis();
	}
	
	function sifreguncelle($email,$eskisifre,$yenisifre,$onaysifre){
		$mysqli = new mysqli("localhost","root","","followart");
		mysqli_query($mysqli,"SET NAMES UTF8");
		$sifre=$_SESSION['userinfo']['sifre'];
		$email = trim($email);
		$eskisifre = trim($eskisifre);
		$yenisifre = trim($yenisifre);
		$onaysifre = trim($onaysifre);
				
			if(md5($eskisifre)!=$sifre){
				echo "<script>alert('Mevcut şifrenizi yanlış girdiniz')
						window.location.replace(\"http://localhost/hesap_ayarlari.php\")</script>";
			}
			else if($yenisifre!=$onaysifre){
				echo "<script>alert('Girdiğiniz şifreler eşleşmiyor')
						window.location.replace(\"http://localhost/hesap_ayarlari.php\")</script>";
			}
			else{
				$rowSet1 = mysqli_query($mysqli, $sql = "UPDATE user SET sifre=md5('$yenisifre') WHERE email='$email';");
			}
			
			if( mysqli_affected_rows($mysqli)>0){
				echo "<script>alert('Şifre güncelleme başarılı')</script>";
				$_SESSION['userinfo']['sifre'] = md5($yenisifre);
				echo "<script>window.location.replace(\"http://localhost/profil.php\")</script>";
					
			}
			
			else{
				echo "<script>alert('Şifre güncelleme başarısız')
						window.location.replace(\"http://localhost/hesap_ayarlari.php\")</script>";
			}	
		
		mysqli_close($mysqli);
	}
	
	function bilgiguncelle($email,$ad,$soyad,$yas){
		$mysqli = new mysqli("localhost","root","","followart");
		mysqli_query($mysqli,"SET NAMES UTF8");
		$email = trim($email);
		$ad = trim($ad);
		$soyad = trim($soyad);
		$yas = trim($yas);
		$rowSet1 = mysqli_query($mysqli, $sql = "UPDATE user SET email='$email', name='$ad', surname='$soyad', age=$yas WHERE email='$email';");
		$_SESSION['email']=$email;
		$_SESSION['userinfo']['name']=$ad;
		$_SESSION['userinfo']['surname']=$soyad;
		$_SESSION['userinfo']['age']=$yas;
		
			if($yas<=90 and $yas>=15){
				if( mysqli_affected_rows($mysqli)>0){
					echo "<script>alert('Güncelleme başarılı')</script>";
					echo "<script>window.location.replace(\"http://localhost/profil.php\")</script>";
			}	
				else{
					echo "<script>alert('Güncelleme Başarısız')</script>";
					echo "<script>window.location.replace(\"http://localhost/bilgi_guncelle.php\")</script>";
				}
			}
			else{
				echo "<script>alert('Lütfen geçerli bir yaş giriniz')</script>";
				echo "<script>window.location.replace(\"http://localhost/bilgi_guncelle.php\")</script>";
			}
		
		mysqli_close($mysqli);
	}

	function ilgiguncelle($email,$kfav,$sfav){
		$mysqli = new mysqli("localhost","root","","followart");
		mysqli_query($mysqli,"SET NAMES UTF8");
		$email = trim($email);
		$kfav = trim($kfav);
		$sfav = trim($sfav);
		$rowSet1 = mysqli_query($mysqli, $sql = "UPDATE user SET kfav='$kfav', sfav='$sfav' WHERE email='$email';");
		$_SESSION['email']=$email;
		$_SESSION['userinfo']['kfav']=$kfav;
		$_SESSION['userinfo']['sfav']=$sfav;
		
			
				if( mysqli_affected_rows($mysqli)>0){
					echo "<script>alert('Güncelleme başarılı')</script>";
					echo "<script>window.location.replace(\"http://localhost/profil.php\")</script>";
				}
				else{
					echo "<script>alert('Güncelleme Başarısız')</script>";
					echo "<script>window.location.replace(\"http://localhost/ilgi_guncelle.php\")</script>";
				}	
		
		mysqli_close($mysqli);
	}	

	function cikis(){
	session_destroy();
	echo "<script>window.location.replace(\"http://localhost/login.php\")</script>";
}	
?>		
	
</html>