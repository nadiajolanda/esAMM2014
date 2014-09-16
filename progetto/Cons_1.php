<?php

include "common.php";

$Ut=$_POST['Utente'];

$Pw=$_POST['Passw'];

if ($Ut<>'' and $$Pw<>'')

{

//echo "$Ut";

//echo "$Pw";

$db=mysql_connect ("127.0.0.1","root","") Or DIE ("Nessuna connessione");

$sql="SELECT *FROM accesso WHERE Login ='$Ut' AND Passw='$Pw'";

$result=mysql_db_query ("Conservatori",$sql,$db) Or die ("ERRORE:".mysql_error());

$num=mysql_num_rows($result);

//echo "$num";

if ($num>0)

{

session_start();

session_register('registered');

while ($row=mysql_fetch_array($result))

{

$_SESSION['Cognome_Nome']=$row["Cognome_Nome"];

$_SESSION['Ruolo'];

}



header("Location:Cons_2.php");

}

else

{

errore_accesso();

}

}

else

{

errore_dati();

}

?>
