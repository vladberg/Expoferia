<?php 

@include("cn.php");


for ($i=1; $i<=17; $i++) {
	
	//Validando cifras de 3 para agregar el 0 (Solo para stands salón chichen itza
	//if ($i<100){
//	$val="C0".$i;
//	}else{
//	
//	$val="C".$i;
//	}
	
	$val="UZ".$i; //Formando cadena para nombre stand
	
$mquery=mysql_query("insert into stands values (0,'$val','', 1, 2)");

}
echo ("Registros guardados");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.:: Alta de stands en forma directa ::.</title>
</head>

<body>
</body>
</html>