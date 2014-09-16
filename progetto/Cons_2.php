<?php

include "common.php"; 

session_start();

//* Se non risulta registrato richiamo la funzione errore (definita in common.php) */

if(!session_is_registered('registered')) errore_accesso();	

$cogn=$_SESSION [ ' Cognome_Nome ] ; 			

$ruolo=$_SESSION[1Ruolo'];

<html> <head>

<title>Conservatorio 'Gesualdo da venosa'</title> </head>

<body bgcolor="#ffffff" text="#000000"> <p>&nbsp; <p>&nbsp;

<table border="0" width="800" align="center">

<tr>

<td bgcolor="navy" align="center" col span=2><font face="arial"

color="#ffffff" size="7"><fieldset><b>Catalogo dei dischi </b></font></fieldset></td> <tr>

<td><img src="nany.jpg"></td><td>

<fieldset><legend><font color="navy"x><b>Menu di <? echo "$cogn &nbsp;

$ruolo";></b></legend>

<ul>

<li>Inserimento:

 <ul>

<li><a href="Cons_B.php">Anagrafiche</a> </li> <li><a href="Cons_5.php">Case discografiche </a></li>

<li><a href="Cons_7. php">Dischi </a></li> </ul> 

<li>Modifica:

 <ul>

<li><a href="Cons_14. php">Anagrafiche</a></li> <li><a href="Cons_16.php">Case

<li><a href="Cons_18. php">Dischi </a></li > </ul>

<li >visualizzazione : 

<ul>

<li><a href="Cons_9.php">Anagrafiche</a> </li> <li><a href="Cons_ll.php">case

<li><a href="Cons_13. php">Dischi </a></li> </ul>

<li><a href="Logout. php">Logout</a></li> </ul>

 

</fieldset></td> 

</tr>





</table> <p>&nbsp; <hr aliqn="center" width=800 size="4" color="navy">

 



</body>

</html>

?>
