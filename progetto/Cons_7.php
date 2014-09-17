<?php

include "common.php"; session_startO ;

//* Se non risulta registrato richiamo la funzione errore (definita in common.php) */

if(!session_is_registered('registered')) errore_accesso(); $cogn=$_SESSION['Cognome_Nome ];

Sruolo=$_SESSION[,Ruolo'] ;

?>

<html> <head>

<title>Conservatorio 'Gesualdo da Venosa'</title>

 </head>

<body bgcolor="#ffffff" text="#000000">

<p>&nbsp;

<p>&nbsp;

<table border="0" width="800" align="center"> <tr>



<td bgcolor="navy" align="center" colspan=2><font face="arial " color="#ffffff" size="7"><fieldset><b>Catalogo dei Dischi </b></font></fieldset></td> <tr>

<td><img src="lmmaginel.png"x/td><td>

<fieldset><legend><font color="navy"><b>Menu di <? echo "Scogn &nbsp; $ruolo" ; ?></b></legend>

<form name ="Ins_Disc" method ="post" action="Cons_8.php>

<p>$nbsp;





<?

$db=mysql_connect ("127.0.0.1","root","") or DIE

("Nessuna connessione");

$sql="SELECT * FROM anagrafica ORDER BY Cognome, Nome" $result=mysql_db_query('Conservatori",$sql,$db) or die ("ERRORE: " .mysql_error());

$num=mysql_num_rows($result); if ($num>0)

{

echo "<select name='Compos'>";

while($row=mysql_fetch_array($result)) {

echo "<option

value='$row[0]'>$row[l].$row[2]</option>";

}

echo "</select>";

}

?>

&nbsp;&nbsp; Compositori <p>&nbsp;

<?

$sql="SELECT * FROM anaqrafica ORDER BY Cognome, Nome" $result=mysql_db_query('Conservatori",$sql,$db) or die ("ERRORE: " .mysql_error());

$num=mysql_num_rows($result); if ($num>0)

{

echo "<select name='Esec'>";

while($row=mysql_fetch_array($result)) {

echo "<option

value='$row[0]'>$row[l].$row[2]</option>";

}

echo "</select>";

}

