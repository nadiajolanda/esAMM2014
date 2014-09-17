<?php

include "common.php"; 

session_start();

 //* Se non risulta registrato richiamo la funzione errore (definita in common.php) */

if(!session_is_registered('registered'))   errore_accesso();

$cogn=$_SESSION['Cognome_Nome'];

$ruolo=$_SESSION['Ruolo'];

?>

<html>

<head>

<title>Conservatorio 'Gesualdo da Venosa'</title>

</head>

<body bgcolor="#ffffff" text="#000000">

<p>&nbsp;

<p>&nbsp;

<table border="0" width="800" align="center">



<tr>

	<td bgcolor="navy" align="center" colspan=2><font face="arial" color="#ffffff" size="7"><fieldset><b>Catalogo dei dischi</b></font></fieldset></td>

	<tr>

	<td><img src="Immagine1.png"></td><td>

	<fieldset><legend><font color="navy"><b>Menu di <? echo "$cogn &nbsp; $ruolo";?></b></legend>

		<form name="Ins_edi" method="post" action="Cons_6.php">

			<p>&nbsp;

			<label>Ragione Sociale:</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Rag_Soc"><br><br>

			<label>&nbsp;&nbsp;Sede:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Sede"><br><br>

			

			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Inserisci">&nbsp;&nbsp;<input type="reset" value="Annulla"></font>

	

	

		</fieldset></td>

		</tr> 

		<tr><td colspan=2><hr align="center" width=800 size="2" color="navy">

<tr><td colspan=2 align="center"><a href="Cons_2.php"><font size=4><b><< Pag.prec.</b></font>&nbsp;&nbsp;</a><a href="Index.html"><font size=4><b>HOME</b></font></a></td></tr>





</table>

<p>&nbsp;

<hr align="center" width=800 size="4" color="navy">

</body>

</html>

?>
