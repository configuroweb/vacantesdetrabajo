<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<div class="header">
            <div class="top-toolbar"><!--header toolbar-->
                <div class="container">
                    <div class="row">
                       
                        <div class="col-md-6 col-sm-12 col-xs-12 pull-right">
                            <div class="top-contact-info">
                                <ul>
<?php
$sql="SELECT * from tblpage where PageType='contactus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                                    <li class="toolbar-email"><i class="fa fa-envelope-o"></i> <?php  echo htmlentities($row->Email);?></li>
                                    <li class="toolbar-contact"><i class="fa fa-phone"></i> +<?php  echo htmlentities($row->MobileNumber);?></li><?php $cnt=$cnt+1;}} ?>
                                    <li><a class="toolbar-new-listing" href="admin/login.php"><i class="fa fa-plus-circle"></i> Admin</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--header toolbar end-->
            <div class="nav-wrapper"><!--main navigation-->
                <div class="container">
                    <!--Main Menu HTML Code-->
                    <nav class="wsmenu slideLeft clearfix">
                        <div class="logo pull-left"><a href="index.php" title="Responsive Slide Menus"><h3 style="color:#08c2f3">ConfiguroWeb</h3></a></div>
                        <ul class="mobile-sub wsmenu-list pull-right">
                            <li><a href="index.php" class="">Inicio</a>
                                
                            </li>
                            
                            <li><a href="category.php">Categorías <span class="arrow"></span></a></li>
                           
                            <li><a href="about.php">Nosotros <span class="arrow"></span></a></li>
                            
                          <li><a href="contact.php">Contacto <span class="arrow"></span></a></li>
                        </ul>
                    </nav>
                </div>
            </div><!--main navigation end-->
        </div>