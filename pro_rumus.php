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

	if ($satu=='c' || $satu=='C' ) 
	{
	$satu=1;
	echo "1. Simple Present (+) = BENAR <br>";
	}else{
	$satu=0;
	echo "1. Simple Present (+) = SALAH<br>";
	}

	if ($dua=='l' || $dua=='L' ) 
	{
	$dua=1;
	echo "2. Simple Present (-) = BENAR<br>";
	}else{
	$dua=0;
	echo "2. Simple Present (-) = SALAH<br>";
	}

	if ($tiga=='j' || $tiga=='J' ) 
	{
	$tiga=1;
	echo "3. Simple Present (?) = BENAR<br><br>";
	$SP=$satu+$dua+$tiga;
	echo "Penguasaan Rumus SIMPLE PRESENT Sebanyak = $SP RUMUS <br><br><br><br>";
	}else{
	$tiga=0;
	echo "3. Simple Present (?) = SALAH<br><br>";
	$SP=$satu+$dua+$tiga;
	echo "Penguasaan Rumus SIMPLE PRESENT Sebanyak $SP RUMUS <br><br><br><br>";
	}


	if ($empat=='g' || $empat=='G' ) 
	{
	$empat=1;
	echo "4. Simple Past (+) = BENAR <br>";
	}else{
	$empat=0;
	echo "4. Simple Past (+) = SALAH<br>";
	}

	if ($lima=='o' || $lima=='O' ) 
	{
	$lima=1;
	echo "5. Simple Past (-) = BENAR<br>";
	}else{
	$lima=0;
	echo "5. Simple Past (-) = SALAH<br>";
	}

	if ($enam=='f' || $enam=='F' ) 
	{
	$enam=1;
	echo "6. Simple Past (?) = BENAR<br><br>";
	$SPS=$empat+$lima+$enam;
	echo "Penguasaan Rumus SIMPLE PAST Sebanyak = $SP RUMUS <br><br><br><br>";
	}else{
	$enam=0;
	echo "6. Simple Past(?) = SALAH<br><br>";
	$SPS=$empat+$lima+$enam;
	echo "Penguasaan Rumus SIMPLE PAST Sebanyak $SPS RUMUS <br><br><br><br>";
	}

	if ($tujuh=='n' || $tujuh=='N' ) 
	{
	$tujuh=1;
	echo "7. Simple Future (+) = BENAR <br>";
	}else{
	$tujuh=0;
	echo "7. Simple Future (+) = SALAH<br>";
	}

	if ($delap=='a' || $delap=='A' ) 
	{
	$delap=1;
	echo "8. Simple Future (-) = BENAR<br>";
	}else{
	$delap=0;
	echo "8. Simple Future (-) = SALAH<br>";
	}

	if ($semb=='i' || $semb=='I' ) 
	{
	$semb=1;
	echo "9. Simple Future (?) = BENAR<br><br>";
	$SF=$tujuh+$delap+$semb;
	echo "Penguasaan Rumus SIMPLE PRESENT Sebanyak = $SF RUMUS <br><br><br><br>";
	}else{
	$semb=0;
	echo "9. Simple Future (?) = SALAH<br><br>";
	$SF=$tujuh+$delap+$semb;
	echo "Penguasaan Rumus SIMPLE PRESENT Sebanyak $SF RUMUS <br><br><br><br>";
	}
		


	if ($sepl=='m' || $sepl=='M' ) 
	{
	$sepl=1;
	echo "10. Present Continuous (+) = BENAR <br>";
	}else{
	$sepl=0;
	echo "10. Present Continuous (+) = SALAH<br>";
	}

	if ($sebl=='d' || $sebl=='D' ) 
	{
	$sebl=1;
	echo "11. Present Continuous (-) = BENAR<br>";
	}else{
	$sebl=0;
	echo "11. Present Continuous (-) = SALAH<br>";
	}

	if ($duab=='b' || $duab=='B' ) 
	{
	$duab=1;
	echo "12. Present Continuous (?) = BENAR<br><br>";
	$SC=$sepl+$sebl+$duab;
	echo "Penguasaan Rumus PRESENT CONTINUOUS Sebanyak = $SC RUMUS <br><br><br><br>";
	}else{
	$duab=0;
	echo "12. Present Continuous (?) = SALAH<br><br>";
	$SC=$sepl+$sebl+$duab;
	echo "Penguasaan Rumus PRESENT CONTINUOUS Sebanyak $SC RUMUS <br><br><br><br>";
	}




	if ($tigb=='k' || $tigb=='K' ) 
	{
	$tigb=1;
	echo "10. Present Perfect (+) = BENAR <br>";
	}else{
	$tigb=0;
	echo "10. Present Perfect (+) = SALAH<br>";
	}

	if ($empb=='e' || $empb=='E' ) 
	{
	$empb=1;
	echo "11. Present Perfect (-) = BENAR<br>";
	}else{
	$empb=0;
	echo "11. Present Perfect (-) = SALAH<br>";
	}

	if ($limb=='h' || $limb=='H' ) 
	{
	$limb=1;
	echo "12. Present Perfect (?) = BENAR<br><br>";
	$SPF=$tigb+$empb+$limb;
	echo "Penguasaan Rumus PRESENT PERFECT Sebanyak = $SPF RUMUS <br><br><br><br>";
	}else{
	$limb=0;
	echo "12. Present Perfect (?) = SALAH<br><br>";
	$SPF=$tigb+$empb+$limb;
	echo "Penguasaan Rumus PRESENT PERFECT Sebanyak $SPF RUMUS <br><br><br><br>";
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