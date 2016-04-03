<?php 
include "app/model.php";
$newDb= new Database('localhost','root','','usercv');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Template</title>
	<link rel="stylesheet" href="css/style.css" type="style/css">

	<!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <!-- For  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


</head>
<body>

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>


   <div class="">
    <div class="row">

      <div class="col s12 m2 offset-m1">
        <div class="card black darken-1">
          <div class="card-content grey-text">
            <span >Select color</span>
            <ul class="pagination">
              <li class="waves-effect"><a href="#!"><div class="teal ball" name="teal-text"></div></a></li>
              <li class="waves-effect"><a href="#!"><div class="blue ball" name="blue-text"></div></a></li>
              <li class="waves-effect"><a href="#!"><div class="red ball" name="red-text"></div></a></li>
              <li class="waves-effect"><a href="#!"><div class="purple ball" name="purple-text"></div></a></li>
            </ul>
            <a href="#" class="btn grey btn-text"> <i class="material-icons left">loop</i>Change design</a>
            <a href="#" class="btn  grey btn-text"> <i class="material-icons left">description</i>Save as draft</a>
          </div>
          <div class="card-action">
            <a href="#" class="waves-effect waves-light btn">PUBLISH</a>

          </div>
        </div>
      </div>



<?php 
$showCv = new ShowCv($newDb->connection);
 ?>



    </div>




  </div>

</body>
</html>