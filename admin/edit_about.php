<?php 
include('config/function.php');
if(!isset($_SESSION['user_name']) || empty($_SESSION['user_name']))
{
header('location:login.php');
exit();
}
?>

<?php 

error_reporting(0);
	//print_r($errors);
	if ( isset( $_GET['id'] ) && !empty( $_GET['id'] ) )
	{
	$id = $_GET['id'];
	$sql="SELECT * FROM `tbl_videos` WHERE id='".$_GET['id']."' ";
	$result = $conn->query($sql);
	if(isset($_POST["update"])){
	$id=$_POST['id'];

    $user_id = !empty($_POST['user_id'])?$_POST['user_id']:'';
    
    $title = !empty($_POST['title'])?$_POST['title']:'';
   
    

	$sql = "UPDATE `tbl_videos` SET title='".$title."'  where id='".$_GET['id']."' ";
    if ($conn->query($sql) === TRUE) {
	echo "<script type='text/javascript'>
	alert('Video updated succesfully');
	window.location.href = 'view-about.php';
	</script>";
	} else{
       $message = '<div class="alert alert-danger alert-dismissible" id="msg"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Failed!</strong> Unable to  upload.</div>';
    } 
	}
}
?>


<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"> 
  <title>Dashboard</title>
 
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="dist/js/editor.js"></script>
		<script>
			$(document).ready(function() {
				$("#txtEditor").Editor();
			});
		</script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link href="dist/css/editor.css" type="text/css" rel="stylesheet"/>
    
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include('header.php') ?>
  <?php include('left-menu.php') ?>
  <div class="content-wrapper">
    <section class="content">
      <div class="row">
       <div class="col-md-12">
	<h5 class="h5-headn" style="color:red;">
          <div class="main-title">
           <h3>Edit Videos</h3>
           </div>
		  
          </div>
          <div class="col-md-12">
          <div class="field-section">
        <?php 
        $id = $_GET['id'];
        $ret=mysqli_query($conn,"select * from `tbl_videos` where id='".$_GET['id']."'");
        $rows=mysqli_fetch_array($ret);
       $image=$rows['image'];
         ?> 

          	   
              <form method="post" enctype="multipart/form-data">
              <div class="row">
               <div class="col-md-4">
                    <label class="input-text">
                        Video url</label>
                  <div class="form-group">
                      <input type="text" name="title" value="<?php echo $rows['title'];?>" class="from-control custom-type">
                   </div>
                  </div>
                 
                  </div>
                  <div class="row">
                 
                  
                                           
                 <button type="submit" name="update" value="update" class="btn btn-submit">Add</button>  
                  </div>
              </div>
              </form>
               
              </div>
          </div>
        
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="#">Dashboard</a>.</strong> All rights
    reserved.
  </footer>
</div>
	

<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="lib/ToggleSwitch.css"/>
<script src="lib/ToggleSwitch.js"></script>
<script>
$(function(){
$("#status").toggleSwitch();
$("#myonoffswitch2").toggleSwitch();
});
</script>


</body>
</html>
