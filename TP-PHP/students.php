
<!DOCTYPE html>
<head>
  <meta charset="utf-8">

  <link href="../vendor/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="../vendor/bootstrap-3.3-7-dist/css/bootstrap-theme.min.css" rel="stylesheet"/>

  <script  src="../vendor/JQUERY/jquery-3.2.1.min.js"></script>
  <script src="../vendor/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

</head>
<body>

  <div class="container">

    <form class="form-horizontal">
      <fieldset>

        <!-- Form Name -->
        <legend>Liste des élèves</legend>


        <!-- Button (Double) -->
        <?php
        $connection = new mysqli("localhost", "root", "", "coursSQL1");

        if ($result = $connection->query("SELECT * FROM eleves")) {
          while ($row = $result->fetch_assoc()){
            printf('
            <div class="form-group">
              <label class="col-md-4 control-label" for="editbutton">%s %s</label>
              <div class="col-md-8">
                <button id="edit_button" name="edit" class="btn btn-success">Editer</button>
                <button id="del_button" name="del" class="btn btn-danger">Supprimer</button>
              </div>
            </div>
',
$row["firstname"],
$row["lastname"]
);
          }
        }
        ?>














      <!--  <div class="form-group">
          <label class="col-md-4 control-label" for="button1id">Georges One</label>
          <div class="col-md-8">
            <button id="button1id" name="button1id" class="btn btn-success">Editer</button>
            <button id="studentone" name="studentone" class="btn btn-danger">Supprimer</button>
          </div>
        </div>

        <!-- Button (Double) -->
        <!--<div class="form-group">
          <label class="col-md-4 control-label" for="button1id">Clément Two</label>
          <div class="col-md-8">
            <button id="button1id" name="button1id" class="btn btn-success">Editer</button>
            <button id="delete" name="delete" class="btn btn-danger">Supprimer</button>
          </div>
        </div>

      </fieldset>
    </form-->

  </div>
