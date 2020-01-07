<?php

include_once($_SERVER['DOCUMENT_ROOT']."/personaliza_docufilia.php");

$mail=$_POST["mail"];
$mensaje =$_POST["mensaje-formulario"];

//Inicio mensaje
$mensaje_html='<html>

<head>
  <meta charset="UTF-8">
</head>

<body >
	<center><img src="'.$url_tu_logo.'" width="200px"></center>
	<br/>
	<hr/>
	<center><h3>Peticiones Usuarios</h3></center>
	<hr/>
	<br/>
	<!-- Simple table -->

	<table width="400px">


  <tr>
    <th style="text-align:left;">Email:</th>
    <td style="text-align:left;">'.$mail.'</td>
  </tr>

  <tr>
    <th style="text-align:left;">Mensaje:</th>
    <td style="text-align:left;">'.$mensaje.'</td>
  </tr>
  
</table>
</center>

<br/>
	<hr/>
	<br/>
</body>
</html>
';


//final mensaje//

/*MENSAJE CONFIRMACIÓN PEDIDO CLIENTE*/



//Titulo
$titulo = "Formulario Web";
//cabecera
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$cabeceras .= "From: docufilia@lamejor.documentacion> \r\n";
//$cabeceras .= "Bcc: <$copia> \r\n"; //Enviar una copia a CCO
$cabeceras .= "Reply-To: ".$tu_email.";"; 
//Enviamos el mensaje a tu_dirección_email 
$bool = mail("j.lerin@hotmail.com",$titulo,$mensaje_html,$cabeceras);
?>