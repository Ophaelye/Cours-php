<!DOCTYPE html>
<head>
  <meta charset="utf-8">

    <link href="../vendor/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="../vendor/bootstrap-3.3-7-dist/css/bootstrap-theme.min.css" rel="stylesheet"/>

      <script  src="../vendor/JQUERY/jquery-3.2.1.min.js"></script>
      <script src="../vendor/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

</head>
<body>
<ul>
<?php

$connection = new mysqli("localhost", "root", "", "coursSQL1");

if ($result = $connection->query("SELECT * FROM promotion")) {
  printf("\nRésultat de la requête %d lignes.", $result->num_rows);
  printf("<ul>");
  while ($row = $result->fetch_assoc()) {
       printf ("\n<li>%s <br/> du %s au %s</li>", $row["name"], $row["startdate"], $row["enddate"]);
   }
}

else {
  printf("Erreur");
}
?>
</ul>
</body>
</html>
