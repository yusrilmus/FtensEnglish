<?php 
	$satu = $_POST['no1'];
	$dua  = $_POST['no2'];
	$tiga = $_POST['no3'];

	$empat = $_POST['no4'];
	$lima  = $_POST['no5'];
	$enam  = $_POST['no6'];

	$tujuh = $_POST['no7'];
	$delap = $_POST['no8'];
	$semb  = $_POST['no9'];

	$sepl  = $_POST['no10'];
	$sebl  = $_POST['no11'];
	$duab  = $_POST['no12'];

	$tigb  = $_POST['no13'];
	$empb  = $_POST['no14'];
	$limb  = $_POST['no15'];

	if ($satu=='c' || $satu=='C' || $satu=='g' || $satu=='G' || $satu=='j' || $satu=='J') 
	{
	echo "1. Simple Present ($satu) = BENAR <br>";
	$satu=1;
	}else{
	echo "1. Simple Present ($satu) = SALAH<br>";
	$satu=0;
	}

	if ($dua=='c' || $dua=='C' || $dua=='g' || $dua=='G' || $dua=='j' || $dua=='J') 
	{
	echo "2. Simple Present ($dua) = BENAR<br>";
	$dua=1;
	}else{
	echo "2. Simple Present ($dua) = SALAH<br>";
	$dua=0;
	}

	if ($tiga=='c' || $tiga=='C' || $tiga=='g' || $tiga=='G' || $tiga=='j' || $tiga=='J') 
	{
	echo "3. Simple Present ($tiga) = BENAR<br><br>";
	$tiga=1;
	$SP=$satu+$dua+$tiga;
	echo "Jumlah Pencocokan Fungsi SIMPLE PRESENT yang BENAR = $SP FUNGSI <br><br><br><br>";
	}else{
	echo "3. Simple Present ($tiga) = SALAH<br><br>";
	$tiga=0;
	$SP=$satu+$dua+$tiga;
	echo "Jumlah Pencocokan Fungsi SIMPLE PRESENT yang BENAR = $SP FUNGSI <br><br><br><br>";
	}


	if ($empat=='e' || $empat=='E' || $empat=='h' || $empat=='H' || $empat=='n' || $empat=='N' ) 
	{
	echo "4. Simple Past ($empat) = BENAR <br>";
	$empat=1;
	}else{
	echo "4. Simple Past ($empat) = SALAH<br>";
	$empat=0;
	}

	if ($lima=='e' || $lima=='E' || $lima=='h' || $lima=='H' || $lima=='n' || $lima=='N' ) 
	{
	echo "5. Simple Past ($lima) = BENAR<br>";
	$lima=1;
	}else{
	echo "5. Simple Past ($lima) = SALAH<br>";
	$lima=0;
	}

	if ($enam=='e' || $enam=='E' || $enam=='h' || $enam=='H' || $enam=='n' || $enam=='N') 
	{
	echo "6. Simple Past ($enam) = BENAR<br><br>";
	$enam=1;
	$SPS=$empat+$lima+$enam;
	echo "Jumlah Pencocokan Fungsi SIMPLE PAST yang BENAR = $SPS FUNGSI <br><br><br><br>";
	}else{
	echo "6. Simple Past($enam) = SALAH<br><br>";
	$enam=0;
	$SPS=$empat+$lima+$enam;
	echo "Jumlah Pencocokan Fungsi SIMPLE PAST yang BENAR = $SPS FUNGSI <br><br><br><br>";
	}

	if ($tujuh=='b' || $tujuh=='B' || $tujuh=='d' || $tujuh=='D' || $tujuh=='m' || $tujuh=='M') 
	{
	echo "7. Simple Future ($tujuh) = BENAR <br>";
	$tujuh=1;
	}else{
	echo "7. Simple Future ($tujuh) = SALAH<br>";
	$tujuh=0;
	}

	if ($delap=='b' || $delap=='B' || $delap=='d' || $delap=='D' || $delap=='m' || $delap=='M') 
	{
	echo "8. Simple Future ($delap) = BENAR<br>";
	$delap=1;
	}else{
	echo "8. Simple Future ($delap) = SALAH<br>";
	$delap=0;
	}

	if ($semb=='b' || $semb=='B' || $semb=='d' || $semb=='D' || $semb=='m' || $semb=='M') 
	{
	echo "9. Simple Future ($semb) = BENAR<br><br>";
	$semb=1;
	$SF=$tujuh+$delap+$semb;
	echo "Jumlah Pencocokan Fungsi SIMPLE FUTURE yang BENAR = $SF FUNGSI <br><br><br><br>";
	}else{
	echo "9. Simple Future ($semb) = SALAH<br><br>";
	$semb=0;
	$SF=$tujuh+$delap+$semb;
	echo "Jumlah Pencocokan Fungsi SIMPLE FUTURE yang BENAR = $SF FUNGSI <br><br><br><br>";
	}
		


	if ($sepl=='a' || $sepl=='A' || $sepl=='f' || $sepl=='F' || $sepl=='l' || $sepl=='L' ) 
	{
	echo "10. Present Continuous ($sepl) = BENAR <br>";
	$sepl=1;
	}else{
	echo "10. Present Continuous ($sepl) = SALAH<br>";
	$sepl=0;
	}

	if ($sebl=='a' || $sebl=='A' || $sebl=='f' || $sebl=='F' || $sebl=='l' || $sebl=='L') 
	{
	echo "11. Present Continuous ($sebl) = BENAR<br>";
	$sebl=1;
	}else{
	echo "11. Present Continuous ($sebl) = SALAH<br>";
	$sebl=0;
	}

	if ($duab=='a' || $duab=='A' || $duab=='f' || $duab=='F' || $duab=='l' || $duab=='L' ) 
	{
	echo "12. Present Continuous ($duab) = BENAR<br><br>";
	$duab=1;
	$SC=$sepl+$sebl+$duab;
	echo "Jumlah Pencocokan Fungsi PRESENT CONTINUOUS yang BENAR = $SC FUNGSI <br><br><br><br>";
	}else{
	echo "12. Present Continuous ($duab) = SALAH<br><br>";
	$duab=0;
	$SC=$sepl+$sebl+$duab;
	echo "Jumlah Pencocokan Fungsi PRESENT CONTINUOUS yang BENAR = $SC FUNGSI <br><br><br><br>";
	}




	if ($tigb=='i' || $tigb=='I' || $tigb=='k' || $tigb=='K' || $tigb=='o' || $tigb=='O' ) 
	{
	echo "13. Present Perfect ($tigb) = BENAR <br>";
	$tigb=1;
	}else{
	echo "13. Present Perfect ($tigb) = SALAH<br>";
	$tigb=0;
	}

	if ($empb=='i' || $empb=='I' || $empb=='k' || $empb=='K' || $empb=='o' || $empb=='O') 
	{
	echo "14. Present Perfect ($empb) = BENAR<br>";
	$empb=1;
	}else{
	echo "14. Present Perfect ($empb) = SALAH<br>";
	$empb=0;
	}

	if ($limb=='i' || $limb=='I' || $limb=='k' || $limb=='K' || $limb=='o' || $limb=='O') 
	{
	echo "15. Present Perfect ($limb) = BENAR<br><br>";
	$limb=1;
	$SPF=$tigb+$empb+$limb;
	echo "Jumlah Pencocokan Fungsi PRESENT PERFECT yang BENAR = $SPF FUNGSI <br><br><br><br>";
	}else{
	echo "15. Present Perfect ($limb) = SALAH<br><br>";
	$limb=0;
	$SPF=$tigb+$empb+$limb;
	echo "Jumlah Pencocokan Fungsi PRESENT PERFECT yang BENAR = $SPF FUNGSI <br><br><br><br>";
	}
	
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <pre>
										 <form  action="rumus.php">
										 <button type="submit">--KEMBALI--</button>
 </pre>
 </form>
 </body>
 </html>