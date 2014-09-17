<?php

include "common.php"; session_start();

//* Se non risulta registrato richiamo la funzione errore (definita in common.php) */

if(!session_is_registered('registered')) errore_accesso();

$cogn=$_SESSlON['Cognome_Nome ];

$di _comp=$_POST['Compos'];

$di_esec=$_POST['Esec"];

$di_di re=$_POST['Diret'];

$di_tito=$_POST['Titolo'];

$di_disc=$_POST['cd'];

$di_note=$_POST['Note'] ;

if ($di_dire==8) {

$di_dire="";

}

if ($di_comp==8) {

$di_comp="";

}

if ($di_esec==8) {

$di_esec="";

}

$db=mysql_connect ("127.0.0.1","root","") Or DIE ("Nessuna connessione");

$sql="SELECT * FROM cd WHERE Compositore = '$di_comp' AND Esecutore = '$di_esec' AND Direttore = '$di_dire' AND Titolo = '$di_tito' AND Editore = '$di_disc'";

Sresult=mysql_db_query("Conservatori",Ssql,$db) or die ("ERRORE: " .mysql_error());

$num=mysql_num_rows($result);

if ($num==0)

{

$sql="lNSERT INTO cd ( Compositore , Esecutore , DirettoreTitolo', Editore , Note" ) VALUES ($di_comp, $di_esec, $di_dire, 'Sdi_tito', $di_disc, '$di_note')";

$result=mysql_db_query("Conservatori",Ssql,$db) or die ("ERRORE: " .mysql_error());

header("Location: Cons_7.php");

else {

echo "cd già inserito";

?>
