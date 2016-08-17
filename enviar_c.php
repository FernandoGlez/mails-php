<?php

if(isset($_POST['asunto']) && !empty($_POST['asunto']) && 
isset($_POST['mensaje']) && !empty($_POST['mensaje']))
{
	$destino ="ragis_glzibarra@gmail.com";
	$desde ="From:". "omarska_88@msn.com";
	$asunto = $_POST['asunto'];
	$mensaje = $_POST['mensaje'];
	mail($destino,$asunto,$mensaje,$desde);
	echo "Correo enviado...";
}else{
	echo "Problemas al enviar";
}
?>
