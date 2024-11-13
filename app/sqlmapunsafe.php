<?php
// print_r($_POST);

$servername = "localhost";
$username = "root";
$password = "ciaociao123";
$dbname = "demo";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
  die("Connessione fallita").mysqli_connect_error;
} //echo "Connessione riuscita <br>";

$id = $_GET["id"];
// ciao' OR '1'='1 )
$query = "SELECT * FROM utenti WHERE id = '$id'";
// echo "<br>$query<br>";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) == 0){
  echo("<br>L'utente non esiste! <br>");
  echo("<a href = './'>Torna alla pagina del Login</a>");
} else {
  echo("<br>Nome e Cognome dell'utente: ");
  while ($row = $result->fetch_assoc()) {
    printf("%s %s\n", $row["firstname"], $row["lastname"]);
}
}

mysqli_close($conn);
?>
