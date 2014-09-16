<?

// errore nell'accesso

function errore_accesso()

{



header ("Location:Errore_login.php");

exit;

}

//errore sui dati

function errore_dati()

{



//header ("Location:Errore_dati.php);

//exit;

echo "<center>";

echo <h3>Errore nella trasmissione dei dati</h3></center>";

exit;

}

?>
