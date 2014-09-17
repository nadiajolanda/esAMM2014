<<?php

include "common.php"; 

session_start();

//* Se non risulta registrato richiamo la funzione errore (definita in common.php) */

if(!session_is_registered('registered')) errore_accesso(); 

//$cogn=$_SESSION['Cognome_Nome'];

$an_cogn=$_POST['Cognome'];

$an_nome=$_POST['Nome'];

$an_varie=POST['Varie'];

if ($an_cogn <>"")

{

		$db=mysql_connect ("127.0.0.1","root","") Or DIE ("Nessuna connessione");

$sql="SELECT * FROM anagrafica WHERE Cognome ='$an_cogn' AND Nome = '$an_nome' ";

$result=mysql_db_query("Conservatori",$sql,$db) or die ("ERRORE: ".mysql_error());

$num=mysql_num_rows($result);

if($num==0)



{

	$sql="INSERT INTO anagrafica (Cognome, Nome, Varie) VALUES 

('$an_cogn', '$an_nome',''$an_varie')";



$result=mysql_db_query("Conservatori",$sql,$db) or die ("ERRORE:".mysql_error());



	header ("Location: Cons3.php");



}

else{



errore_dati();

}

}

else

{

 errore_dati();

}

?>
