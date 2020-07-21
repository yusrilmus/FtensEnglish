<?php 
	$satu  = $_POST['NO1'];
	$dua   = $_POST['NO2'];
	$tiga  = $_POST['NO3'];
	$empat = $_POST['NO4'];
	$lima  = $_POST['NO5'];
	$enam  = $_POST['NO6'];
	$tujuh = $_POST['NO7'];
	$delap = $_POST['NO8'];
	$sembi = $_POST['NO9'];
	$sepul = $_POST['NO10'];
	$sebla = $_POST['NO11'];
	$duabl = $_POST['NO12'];
	$tigab = $_POST['NO13'];
	$empb  = $_POST['NO14'];
	$limb  = $_POST['NO15'];
	$enamb = $_POST['NO16'];
	$tujhb = $_POST['NO17'];
	$delpb = $_POST['NO18'];
	$sembl = $_POST['NO19'];
	$duapl = $_POST['NO20'];
	$duasa = $_POST['NO21'];
	$duadu = $_POST['NO22'];
	$duati = $_POST['NO23'];
	$duaem = $_POST['NO24'];
	$dualim= $_POST['NO25'];


	if ($satu=='a') {
		$satu=1;
		echo "1. BENAR<br>";
	}else{
		$satu=0;
		echo "1. SALAH<br>";
	}

	if ($dua=='b') {
		$dua=1;
		echo "2. BENAR<br>";
	}else{
		$dua=0;
		echo "2. SALAH<br>";
	}
	if ($tiga=='a') {
		$tiga=1;
		echo "3. BENAR<br>";
	}else{
		$tiga=0;
		echo "3. SALAH<br>";
	}

	if ($empat=='c') {
		$empat=1;
		echo "4. BENAR<br>";
	}else{
		$empat=0;
		echo "4. SALAH<br>";
	}

	if ($lima=='b') {
		$lima=1;
		echo "5. BENAR<br>";
		$SP=$satu+$dua+$tiga+$empat+$lima;
		echo "Simple present Benar = $SP NOMOR <br><br><br><br><b>";
	}else{
		$lima=0;
		echo "5. SALAH<br>";
		$SP=$satu+$dua+$tiga+$empat+$lima;
	    echo "Simple present Benar = $SP NOMOR <br><br><br><br><br>";
	}



	if ($enam=='b') {
		$enam=1;
		echo "6. BENAR<br>";
	}else{
		$enam=0;
		echo "6. SALAH<br>";
	}

	if ($tujuh=='a') {
		$tujuh=1;
		echo "7. BENAR<br>";
	}else{
		$tujuh=0;
		echo "7. SALAH<br>";
	}
	if ($delap=='b') {
		$delap=1;
		echo "8. BENAR<br>";
	}else{
		$delap=0;
		echo "8. SALAH<br>";
	}

	if ($sembi=='a') {
		$sembi=1;
		echo "9. BENAR<br>";
	}else{
		$sembi=0;
		echo "9. SALAH<br>";
	}

	if ($sepul=='c') {
		$sepul=1;
		echo "10. BENAR<br>";
		$SPS=$enam+$tujuh+$delap+$sembi+$sepul;
		echo "Simple Past Benar = $SPS NOMOR <br><br><br><br><b>";
	}else{
		$sepul=0;
		echo "10. SALAH<br>";
		$SPS=$enam+$tujuh+$delap+$sembi+$sepul;
		echo "Simple Past Benar = $SPS NOMOR <br><br><br><br><b>";
	}




	if ($sebla=='d') {
		$sebla=1;
		echo "11. BENAR<br>";
	}else{
		$sebla=0;
		echo "11. SALAH<br>";
	}

	if ($duabl=='d') {
		$duabl=1;
		echo "12. BENAR<br>";
	}else{
		$duabl=0;
		echo "12. SALAH<br>";
	}
	if ($tigab=='b') {
		$tigab=1;
		echo "13. BENAR<br>";
	}else{
		$tigab=0;
		echo "13. SALAH<br>";
	}

	if ($empb=='a') {
		$empb=1;
		echo "14. BENAR<br>";
	}else{
		$empb=0;
		echo "14. SALAH<br>";
	}

	if ($limb=='c') {
		$limb=1;
		echo "15. BENAR<br>";
		$SF=$sebla+$duabl+$tigab+$empb+$limb;
		echo "Simple Future Benar = $SF NOMOR <br><br><br><br><b>";
	}else{
		$limb=0;
		echo "15. SALAH<br>";
		$SF=$sebla+$duabl+$tigab+$empb+$limb;
		echo "Simple Future Benar = $SF NOMOR <br><br><br><br><b>";
	}




	if ($enamb=='c') {
		$enamb=1;
		echo "16. BENAR<br>";
	}else{
		$enamb=0;
		echo "16. SALAH<br>";
	}

	if ($tujhb=='b') {
		$tujhb=1;
		echo "17. BENAR<br>";
	}else{
		$tujhb=0;
		echo "17. SALAH<br>";
	}
	if ($delpb=='b') {
		$delpb=1;
		echo "18. BENAR<br>";
	}else{
		$delpb=0;
		echo "18. SALAH<br>";
	}

	if ($sembl=='b') {
		$sembl=1;
		echo "19. BENAR<br>";
	}else{
		$sembl=0;
		echo "19. SALAH<br>";
	}

	if ($duapl=='d') {
		$duapl=1;
		echo "20. BENAR<br>";
		$SC=$enamb+$tujhb+$delpb+$sembl+$duapl;
		echo "Present Continuous Benar = $SC NOMOR <br><br><br><br><b>";
	}else{
		$duapl=0;
		echo "20. SALAH<br>";
		$SC=$enamb+$tujhb+$delpb+$sembl+$duapl;
		echo "Present Continuous Benar = $SC NOMOR <br><br><br><br><b>";
	}


	if ($duasa=='d') {
		$duasa=1;
		echo "21. BENAR<br>";
	}else{
		$duasa=0;
		echo "21. SALAH<br>";
	}

	if ($duadu=='a') {
		$duadu=1;
		echo "22. BENAR<br>";
	}else{
		$duadu=0;
		echo "22. SALAH<br>";
	}
	if ($duati=='c') {
		$duati=1;
		echo "23. BENAR<br>";
	}else{
		$duati=0;
		echo "23. SALAH<br>";
	}

	if ($duaem=='c') {
		$duaem=1;
		echo "24. BENAR<br>";
	}else{
		$duaem=0;
		echo "24. SALAH<br>";
	}

	if ($dualim=='d') {
		$dualim=1;
		echo "25. BENAR<br>";
		$SPF=$duasa+$duadu+$duati+$duaem+$dualim;
		echo "Present Perfect Benar = $SPF NOMOR <br><br><br><br><b>";
	}else{
		$dualim=0;
		echo "25. SALAH<br>";
		$SPF=$duasa+$duadu+$duati+$duaem+$dualim;
		echo "Present Perfect Benar = $SPF NOMOR <br><br><br><br><b>";
	}

 ?>