<!DOCTYPE HTML>
<html>
<head>
<title>Followart Kayıt</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>

<link rel="stylesheet" href="css/loginstyle.css" type="text/css" media="all" /> 
<link href="//fonts.googleapis.com/css?family=Bellefair&amp;subset=hebrew,latin-ext" rel="stylesheet">
</head>

<body>

	<div class="header">
		<h1>FOLLOWART</h1>
	</div>

<div class="form_alani">
	<div class="form_alani2">	

	<form action=main.php method=get>
			<input placeholder='E-mail Adresiniz' name=email class=user type=email required=''>
			<input  placeholder='Şifreniz' name=sifre class=pass type=password required=''>
			<input  placeholder='Adınız' name=ad class=name type=text required=''>
			<input  placeholder='Soyadınız' name=soyad class=surname type=text required=''>
			<input  placeholder='Yaşınız' name=yas class=age type=number required=''>
			
			<select name=kfav onchange='showselected(this.value);'>
				<option value=Boş>Müzik İlgi Alanı Seçiniz</option>
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
				<option value=Boş>Film İlgi Alanı Seçiniz</option>
				<option value=Macera>Macera</option>
				<option value=Komedi>Komedi</option>
				<option value=Dram>Dram</option>
				<option value=Gerilim>Gerilim</option>
				<option value=Korku>Korku</option>
				<option value=Bilim-Kurgu>Bilim-Kurgu</option>
				<option value=Aksiyon>Aksiyon</option>
				<option value=Polisiye>Polisiye</option></select>
						
			<div class=butonlar>
				<input type=submit value= 'Kayıt Ol'>
				<input type=button value='Geri' onclick="window.location.href='login.php'";/>
				<input type=hidden name=islem value=register></input>
			</div>
					
				
		</form>
				
	</div>
</div>

</body>
</html>