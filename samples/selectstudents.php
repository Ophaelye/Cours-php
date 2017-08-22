<!DOCTYPE html>
<head>
  <meta charset="utf-8">
</head>
<body>
<ul>
<?php

$connection = new mysqli("localhost", "root", "", "coursSQL1");

if ($result = $connection->query("SELECT * FROM eleves")) {
  printf("\nRésultat de la requête %d lignes.", $result->num_rows);
  printf("<ul>");
  while ($row = $result->fetch_assoc()) {
       printf ("\n<li>%s %s %s</li>", $row["firstname"], $row["lastname"], $row["id"]);
   }
}

else {
  printf("Erreur");
}
?>
</ul>
</body>
</html>
