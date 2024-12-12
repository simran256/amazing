<?php
include('config/function.php');

if(!isset($_SESSION['user_name']) || empty($_SESSION['user_name']))
{
header('location:login.php');
exit();
}



if(isset($_GET['type']) && $_GET['type']!=''){
    $type=$_GET['type'];
    if($type=='status'){
        $operation=$_GET['operation'];
        $id=$_GET['id'];
        if($operation=='active'){
            $status='0';
        }else{
            $status='1';
        }
        $update_status_sql="update why2 set status='$status' where id='$id'";
        mysqli_query($conn,$update_status_sql);
         ?>
        <script>
            window.location.href='why2.php';
        </script>
        <?php
    }
    
    if($type=='delete'){
        
        $id=$_GET['id'];
        
      
        $delete_sql="delete from why2 where id='$id'";

        mysqli_query($conn,$delete_sql);
        echo '<script>alert("why2 Deleted Succesfully")</script>';
        ?>
           <script>
            window.location.href = 'why2.php';
           </script>
            <?php
    }
}


/*add data */


  $id = "";
  $msg ="";
  $icon ="";
  $name ="";
  $description="";
  $image="";
  $status =""; 
  
  if(isset($_GET['id']) && $_GET['id']!=''){
    $id=mysqli_real_escape_string($conn,$_GET['id']);
    $res=mysqli_query($conn,"select * from why2 where id='$id'");
    $check=mysqli_num_rows($res);
    if($check>0){
        $row=mysqli_fetch_assoc($res);
        
  
  $status =$row['status'];
  $icon =$row['icon'];
  $name =$row['name'];
  $description=$row['description'];
  $image=$row['image'];
  
  


         
    } else{


        header('location:why2.php');
        die();
    }
}


 if(isset($_POST['submit'])){
 
  $icon =mysqli_real_escape_string($conn,$_POST['icon']);
  $name =mysqli_real_escape_string($conn,$_POST['name']);
  $description =mysqli_real_escape_string($conn,$_POST['description']);
  $image =mysqli_real_escape_string($conn,$_POST['image']);
  
 
 
  


      

$p_ids=$_GET['p_id'];
if($msg==''){
  
      
             $filename = $_FILES["uploadfile"]["name"];
             $tempname = $_FILES["uploadfile"]["tmp_name"];    
             $folder = "../admin/uploads/service/".$filename;
              move_uploaded_file($tempname, $folder);
            
        if(isset($_GET['id']) && $_GET['id']!=''){
            $id=$_GET['id'];
               if((empty($_FILES['uploadfile']['name'])))
               {
                    mysqli_query($conn,"update  `why2` SET `icon`='$icon', `name`='$name',`description`='$description' WHERE id='$id'");
               }else{
                    mysqli_query($conn,"update  `why2` SET `icon`='$icon', `name`='$name',`description`='$description',`image`='$filename' WHERE id='$id'");
               }
                 echo "<script>alert('Updated successfully')</script>";  

                 }else {
                   if((empty($_FILES['uploadfile']['name'])))
                     {
                          mysqli_query($conn, "INSERT INTO `why2`(`icon`, `name`, `description`,`status`) VALUES ('$icon','$name','$description','1')"); 
                     }else{
                    mysqli_query($conn, "INSERT INTO `why2`(`icon`, `name`, `description`,`status`,`image`) VALUES ('$icon','$name','$description','1','$filename')"); 
                     }
                
                 
                 echo "<script>alert('inserted successfully')</script>";   

                 }
          
}
?>
<script> 
    window.location.href="why2.php";
    </script>
<?php

 }
 




?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <title>Admin</title>
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
   <?php include('header.php') ?>
  <?php include('left-menu.php') ?>
  <div class="content-wrapper">
   <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">

            <div class="main-title">
           <h3>Add Offer</h3>
           </div>

             <form method="post" enctype="multipart/form-data">
                <div class="row">

                 <div class="col-md-6">
                  <label class="input-text">Icon</label>
                  <input type="text" name="icon" value="<?php echo $row['icon']?>" placeholder="Title" class="from-control custom-type">
                  
                 </div>

                 <div class="col-md-6">
                  <label class="input-text">Title</label>
                  <input type="text" name="name" value="<?php echo $row['name']?>" placeholder="Heading" class="from-control custom-type">
                  
                 </div>

                <div class="col-md-6">
                <label class="input-text">Description</label>
                 <textarea name="description" class="ckeditor" class="from-control custom-type"><?php echo $row['description']?></textarea> 
                  
                </div> 
                  
                  <div class="col-md-6">
                 <label class="input-text">Select Image</label>
                  <div class="form-group">
                    <input type="file" name="uploadfile">
                    <img src="../admin/uploads/service/<?php echo $image ?>" style="height:100px">

                      
                   </div>
                  </div>

               </div>
                <input type="submit" name="submit" values="submit"  class="btn btn-addnew">
                 
                
              </form>

            </div>
            <div class="main-title">
           <h3>View Offer</h3>
           </div>
          
               
        
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>Sr. N.</th>    
                  <th>Icon</th>
                  <th>Title</th> 
                   <th>Image</th>         
                 <th>Content</th> 
                  <th>Action</th>
                 
                </tr>
                </thead>
                <tbody>
             
               <?php
               
               $sql=mysqli_query($conn,"select * from why2");
               $i=1;
               while($row=mysqli_fetch_array($sql)){

                

               ?>

                <tr>
                <td><?php echo $i ?></td>    
                 <td><?php echo $row['icon'] ?></td> 
                  <td><?php echo $row['name'] ?></td>
                  <td> <img src="../admin/uploads/service/<?php echo $row['image'] ?>" style="height:100px"></td>
                <td><?php echo $row['description'] ?></td>
                 
                  
                  <td>  
                   <?php
                          if($row['status']=='1')
                                            {
                                                echo "<span class='badge badge-edit'><a href='?type=status&operation=active&id=".$row['id']."'>active</a></span>&nbsp;"; 
                                            }
                                            else
                                            {
                                                 echo "<span class='badge badge-edit'><a href='?type=status&operation=deactive&id=".$row['id']."'>deactive</a></span>&nbsp;";  
                                            }
                            ?>
                  </td>
                  <td>
                      <ul class="edit-button">
                          <li><a href="why2.php?id=<?php echo $row['id'] ?>"><i class="fa fa-edit"></i></a></li>
                          <li>
                            <?php 
                             echo "<span class=''><a href='?type=delete&id=".$row['id']."''><i class='fa fa-remove'></i></a></span>";
                            ?>                
                          
                          

                      </ul>
                    </td>
                </tr>
              
<?php
$i++;
}
?>
    
                </tbody>
               
              </table>

             
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>




      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

  <style>
    .badge{
      padding: 10px;
      background: #234564;

    }
    .badge a{
      color: white!important;

    }
  </style>
  <!-- /.content-wrapper -->
 <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="#">Dashboard</a>.</strong> All rights
    reserved.
  </footer>



</div>
<!-- ./wrapper -->
<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<script src="dist/js/adminlte.min.js"></script>
    

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

</body>

</html>
