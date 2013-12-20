<?
$sNumero = file_get_contents("contador");
$Numeromas1 = (int)$sNumero+1;
$fichero = fopen("contador","w");
fwrite($fichero,$Numeromas1);
fclose($fichero);

$cadenaHTML = "";
$numeroDigitos = 0;
while ($Numeromas1 > 0){
	$digito = $Numeromas1 % 10;
	if ($Numeromas1 > 0){
		$numeroDigitos++;
		$cadenaHTML = "<img src='imagenes/$digito.jpg'>".$cadenaHTML;
	}
	$Numeromas1 = (int)$Numeromas1/10;
}
for ($i=$numeroDigitos;$i<6;$i++)
		$cadenaHTML = "<img src='imagenes/0.jpg'>".$cadenaHTML;

echo $cadenaHTML;
?>