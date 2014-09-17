<?php

include "common.php"; 

session_start();

//* Se non risulta registrato richiamo la funzione errore (definita in common.php) */

if(! session_is_registered('registered')) errore_accesso();

//$cogn=$_SESSlON['Cognome_Nome' ];

$ce_rag=$_POST['Sede'];



if ($ce_rag<>"")

{



$db=mysql_connect("127.0.0.1","root","")Or DIE ("Nessuna connessione");

$sql="SELECT *FROM casa_discografica where Ragione_Sociale= '$ce_rag'";

$result=mysql_db_query("Conservatori",$sql,$db) or die ("ERRORE: ".mysql_error());

$num=mysql_num_rows($result);

if ($num==0)

{

$sql="INSERT INTO casa_discografica (Ragione_Sociale,Sede)

VALUES ('$ce_rag', '$ce_sede')";

$result=mysql_db_query ("Conservatori",$sql,$db) or die ("ERRORE:".mysql_error());

header ("Location: Cons_5.php");



}



else

{

 errore_dati();

}

}

else

{

errore_dati();

}

?>
