<?php
require_once("conexao.php"); 
$querry = "SELECT * FROM poupeeganhe WHERE categoria='noticias' ORDER BY id DESC LIMIT 4";
$sql = mysqli_query($con,$querry) or die(mysqli_error($con));
if (mysqli_num_rows($sql) =='0') {
    echo "Falha no acesso ao BD";
} else {
	for ($i=0; $i < 4; $i++) { 
		$noticias[$i]=mysqli_fetch_assoc($sql); 
	}
}
?>
