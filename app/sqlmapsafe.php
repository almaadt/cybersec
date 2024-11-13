<?php
//print_r($_POST);

$servername = "localhost";
$username = "root";
$password = "ciaociao123";
$dbname = "demo";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
  die("Connessione fallita").mysqli_connect_error;
} //echo "Connessione riuscita <br>";

$id = $_GET["id"];
$sth = $conn->prepare('SELECT * FROM utenti WHERE id = ?');
mysqli_stmt_bind_param($sth, "i", $id);
$sth->execute();
$result = $sth->get_result();
//printf("%d rows found.\n", $sth->num_rows());

if(!$result){
  echo("<br>Nessun record trovato! <br>");
} else {
  while ($row = $result->fetch_array(MYSQLI_NUM)) {
    echo("<br>Nome e Cognome dell'utente: ");
    echo $row[1]. " ". $row[2];
}
} 

mysqli_close($conn);
?>
