<?php

include_once 'connection.php';

if (isset($_POST['submit'])) {
  $tablename = $_POST['tablename'];
  $cat_name1 = $_POST['cat_name'];





	
  $sql = "CREATE TABLE $tablename (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, category VARCHAR(200) NOT NULL, classcat VARCHAR(200) NOT NULL, createdat TIMESTAMP NOT NULL)";	

          $film = "INSERT INTO tables (tbName) VALUES ('$tablename')";
          
          if (mysqli_query($conn, $film) && mysqli_query($conn, $sql)) {

          // forloop start
              foreach($cat_name1 as $value) {

                    $qtyOut = $value;
                    $classcat = $tablename . $qtyOut;
                  $into_db = "INSERT INTO $tablename (category, classcat) VALUES ('$qtyOut', '$classcat')";
      

                   if (mysqli_query($conn, $into_db)) {
                     
                   }else {
                     echo ("error" .mysqli_error($conn));
                   }
                   header('location:portfolio.php');
           }  

           // end of foreach loop     

          }else {
            echo ("error" .mysqli_error($conn));
          }
  
}

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/css/mdb.min.css" rel="stylesheet">

	<script>
    	$(document).ready(function(){
        	$("#exampleModal").modal('show');
    	});
	</script>

	<title></title>
</head>
<body>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Presentation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form method="post" action="" enctype="multipart/form-data">
      		<div class="form-group">
            <label>Name your presentation</label>
    <input type="text" name="tablename" class="form-control">
  </div>
 
<!-- Default inline 1-->
<div class="custom-control custom-checkbox custom-control-inline">
  <input type="checkbox" class="custom-control-input" id="defaultInline1" name="cat_name[]" value="Kitchen">
  <label class="custom-control-label" for="defaultInline1">Kitchen</label>
</div>

<!-- Default inline 2-->
<div class="custom-control custom-checkbox custom-control-inline">
  <input type="checkbox" class="custom-control-input" id="defaultInline2" name="cat_name[]" value="Bedroom">
  <label class="custom-control-label" for="defaultInline2">Bedroom</label>
</div>

<!-- Default inline 3-->
<div class="custom-control custom-checkbox custom-control-inline">
  <input type="checkbox" class="custom-control-input" id="defaultInline3" name="cat_name[]" value="Living room">
  <label class="custom-control-label" for="defaultInline3">Living room</label>
</div>
<div class="custom-control custom-checkbox custom-control-inline">
  <input type="checkbox" class="custom-control-input" id="defaultInline4" name="cat_name[]" value="Washing area">
  <label class="custom-control-label" for="defaultInline4">Washing area</label>
</div>

<!-- Default inline 2-->
<div class="custom-control custom-checkbox custom-control-inline">
  <input type="checkbox" class="custom-control-input" id="defaultInline5" name="cat_name[]" value="Balcony">
  <label class="custom-control-label" for="defaultInline5">Balcony</label>
</div>

<!-- Default inline 3-->
<div class="custom-control custom-checkbox custom-control-inline">
  <input type="checkbox" class="custom-control-input" id="defaultInline6" name="cat_name[]" value="Window view">
  <label class="custom-control-label" for="defaultInline6">Window view</label>
</div>
<div class="custom-control custom-checkbox custom-control-inline">
  <input type="checkbox" class="custom-control-input" id="defaultInline7" name="cat_name[]" value="Garden view">
  <label class="custom-control-label" for="defaultInline7">Garden View</label>
</div>

<!-- Default inline 2-->
<div class="custom-control custom-checkbox custom-control-inline">
  <input type="checkbox" class="custom-control-input" id="defaultInline8" name="cat_name[]" value="Parking area">
  <label class="custom-control-label" for="defaultInline8">Parking Area</label>
</div>

<!-- Default inline 3-->
<div class="custom-control custom-checkbox custom-control-inline">
  <input type="checkbox" class="custom-control-input" id="defaultInline9" name="cat_name[]" value="Common plot">
  <label class="custom-control-label" for="defaultInline9">Common plot</label>
</div>
  

      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="submit">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>