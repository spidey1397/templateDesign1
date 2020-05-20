<?php

include_once 'connection.php';

$tb1=mysqli_query($conn, "SELECT * FROM tables");
$category1=mysqli_query($conn, "SELECT * FROM tables");

if (isset($_POST['submit'])) {

	$clss = $_POST['class_id'];
  $tb_id = $_POST['table_id'];
	$file = $_FILES['file'];
  
  for($i=0; $i<count($_FILES['file']['name']); $i++) {
  $clss = json_decode($_POST['class_id'] [$i]);
  $tb_id = json_decode($_POST['table_id'] [$i]);
	$fileName = $_FILES['file']['name'] [$i];
	$fileTmpName = $_FILES['file']['tmp_name'] [$i];
	$fileSize = $_FILES['file']['size'] [$i];
	$fileError = $_FILES['file']['error'] [$i];
	$fileType = $_FILES['file']['type'] [$i];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('jpg', 'jpeg', 'png');

	if (in_array($fileActualExt, $allowed)) {
		if ($fileError === 0) {
			if ($fileSize < 1000000) {
					$fileDestination = 'img/portfolio/'.$fileName;
					move_uploaded_file($fileTmpName, $fileDestination);

             

					$query = "INSERT INTO uploaded (file,cat_id,table_id) VALUES ('$fileDestination','$clss','$tb_id')";
          

					if (mysqli_query($conn, $query)) {
						header('location:insert_tb.php');
					}else {
						echo ("error" .mysqli_error($conn));
					}
        
	 			} else {
					echo '<script>alert("Your file is too big.!"); window.location.href="form.php";</script>';
				}	
		} else {
			echo '<script>alert("There was an error uploading your file.!"); window.location.href="form.php";</script>';
		}
	} else {
		echo '<script>alert("You can not upload this type of file.!"); window.location.href="form.php";</script>';
	}
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
        <h5 class="modal-title" id="exampleModalLabel">Upload Image into Table</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form method="post" action="" enctype="multipart/form-data">
      	
 

 
  
     <?php
        while ($rw = mysqli_fetch_array($category1)) {
          $rp=$rw['tbName'];
          ?>
          <div class="form-group">
    <label for="exampleFormControlSelect1">Table Name</label>
    <select class="form-control" id="exampleFormControlSelect1" name="table_id[]" >
      
        <option value="<?php echo $rw['id']; ?>"><?php echo $rw['tbName']; ?></option>
      
    </select>
    
  </div>
      			<div class="form-group">

<?php
          
          $report=mysqli_query($conn,"SELECT * FROM $rp");
?>    
            


  <label for="exampleFormControlSelect1">Choose Category</label>
    <select class="form-control" id="exampleFormControlSelect1" name="class_id[]" >
      <?php
      while ($rcvd = mysqli_fetch_array($report)) { 
        ?>
            <option value="<?php echo $rcvd['id']; ?>"><?php echo $rcvd['category']; ?></option>
      <?php
    }
    ?>
    </select>

  </div>
 
  
  <div class="input-group">
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01"
      aria-describedby="inputGroupFileAddon01" name="file[]" multiple >
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>
</div>

      <hr>
       <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="submit">Upload</button>
      </div>
 <?php
          
        }
      ?>
      	
        
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