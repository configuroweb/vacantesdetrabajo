<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['lssemsaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {

$eid=$_GET['editid'];
$name=$_POST['name'];
$mobnum=$_POST['mobilenumber'];
$address=$_POST['address'];
$category=$_POST['category'];
$city=$_POST['city'];

$sql="update tblperson set Category=:cat,Name=:name,MobileNumber=:mobilenumber,Address=:address,City=:city where ID=:eid";
$query=$dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':cat',$category,PDO::PARAM_STR);
$query->bindParam(':mobilenumber',$mobnum,PDO::PARAM_STR);
$query->bindParam(':address',$address,PDO::PARAM_STR);
$query->bindParam(':city',$city,PDO::PARAM_STR);
$query->bindParam(':eid',$eid,PDO::PARAM_STR);
 $query->execute();

   $query->execute();

    echo '<script>alert("Person Detail has been updated")</script>';

  }
  ?>
<!DOCTYPE html>
<html>
<head>
  
  <title>ConfiguroWeb | Actualizar Detalle de Persona</title>
    
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <?php include_once('includes/header.php');?>

 
<?php include_once('includes/sidebar.php');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editar Persona</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Inicio</a></li>
              <li class="breadcrumb-item active">Actualizar Detalle de Persona</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Actualizar Detalles de Persona</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" enctype="multipart/form-data">
                <?php
                   $eid=$_GET['editid'];
$sql="SELECT * from tblperson where ID=$eid";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Categoría de Servicios</label>
                    <select type="text" name="category" id="category" value="" class="form-control" required="true">
<option value="<?php echo htmlentities($row->Category);?>"><?php echo htmlentities($row->Category);?></option>
                                                        <?php 

$sql2 = "SELECT * from   tblcategory ";
$query2 = $dbh -> prepare($sql2);
$query2->execute();
$result2=$query2->fetchAll(PDO::FETCH_OBJ);

foreach($result2 as $row1)
{          
    ?>  
<option value="<?php echo htmlentities($row1->Category);?>"><?php echo htmlentities($row1->Category);?></option>
 <?php } ?> 
            
                                                        
                                                    </select>
                  </div>
                     <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlentities($row->Name);?>" required="true">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Foto de Perfil</label>
                    <img src="images/<?php echo $row->Picture;?>" width="100" height="100" value="<?php  echo $row->Picture;?>">
                    <a href="changeimage.php?editid=<?php echo $row->ID;?>"> &nbsp; Editar Imagen</a>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Número de Celular</label>
                    <input type="text" class="form-control" id="mobilenumber" name="mobilenumber" value="<?php echo htmlentities($row->MobileNumber);?>" maxlength="10" pattern="[0-9]+" required="true">
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Dirección</label>
                    <textarea type="text" class="form-control" id="address" name="address" placeholder="Dirección" required="true"><?php echo htmlentities($row->Address);?></textarea>
                  </div>  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ciudad</label>
                    <input type="text" class="form-control" id="city" name="city" value="<?php echo htmlentities($row->City);?>" required="true">
                  </div> 
                </div>
              <?php $cnt=$cnt+1;}} ?> 
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="submit">Actualizar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
         
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
<?php include_once('includes/footer.php');?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
<?php }  ?>