<?php
session_start();
if ($_SESSION['id']==null){
    header('Location: index.php');
}
require_once './vendor/autoload.php';
use App\classes\Authentication;
use App\classes\EditProduct;

$access= new Authentication();
if (isset($_GET['logout'])){
    $access->LogOut();
}

$edit=new EditProduct();
$queryResult=$edit->ViewAccessoriesbyId($_GET['id']);
$show=mysqli_fetch_assoc($queryResult);

if (isset($_POST['update'])){
    $edit->UpdateAccessoriesById();
}

?>




<html>
<head>
    <title>dashboard</title>
    <link rel="stylesheet" href="asset/css/bootstrap.css">
    <link rel="stylesheet" href="asset/css/fontawesome-all.css">
    <link rel="stylesheet" href="asset/css/style.php">
</head>
<body>
<aside class="left-side">
    <p class="font-weight-bold text-center"><br><a href="dashboard.php"><i class="fas fa-tachometer-alt fa-2x text-info text-center"></i> Dashboard</a></p>
    <hr class="bg-white">
    <h6 class="font-weight-bold text-center">Welcome <?php echo $_SESSION['name'];?> <br> Role: <?php echo $_SESSION['designation'];?></h6>
    <hr class="bg-white">
    <h6>Add Category</h6>
    <nav class="navbar navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-mobile"></i> Mobile Phone</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="addMobile.php"> Add Phone</a></li>
                    <li><a class="dropdown-item" href="viewMobile.php"> View List</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fab fa-tencent-weibo"></i> Mobile Accessories</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="addAccessories.php"> Add Accessories</a></li>
                    <li><a class="dropdown-item" href="viewAccessories.php"> View List</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fas fa-mobile-alt"></i></i> Smart Gadget</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href=""> Add Gadget</a></li>
                    <li><a class="dropdown-item" href=""> View List</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <hr class="bg-white">
    <h6>Service Category</h6>
    <nav class="navbar navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-box"></i> Warranty Product</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="">Add Product</a></li>
                    <li><a class="dropdown-item" href="">Manage</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-box-open"></i> Non Warranty Product</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href=""><i></i>Add Product</a></li>
                    <li><a class="dropdown-item" href=""><i></i>Manage</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</aside>
<div class="right-side">
    <div class="header">
        <p>Hello, <?php echo $_SESSION['name'];?> | <a href="?logout=true" class="text-danger"><i class="fa fa-sign-out-alt"></i></a></p>
    </div>
    <br>
    <div class="add-form">
        <div class="row input-group">
            <label class="col-md-3 col-sm-4 col-form-label">Accessories Brand</label>
            <h3 class="col-md-9 col-sm-8 my-form-control bg-dark text-white" type="text" name="acc_brand"><?php echo $show['acc_brand'];?></h3>
        </div>
        <div class="row input-group">
            <label class="col-md-3 col-sm-4 col-form-label">Accessories Model</label>
            <!--                <input class="col-md-9 col-sm-8 my-form-control" type="text" name="mobile_model" value="--><?php //echo $show['mobile_model'];?><!--">-->
            <h3 class="col-md-9 col-sm-8 my-form-control bg-dark text-white" type="text" name="acc_model"><?php echo $show['acc_model'];?></h3>
        </div>
        <form action="" method="post" class="">
            <div class="row input-group">
                <input class="col-md-12  my-form-control" type="hidden" name="acc_id" value="<?php echo $show['acc_id'];?>">
            </div>
            <div class="row input-group">
                <label class="col-md-3 col-sm-4 col-form-label">Accessories Code</label>
                <input class="col-md-9 col-sm-8  my-form-control" type="text" name="acc_code" value="<?php echo $show['acc_code'];?>">
            </div>

            <div class="row input-group">
                <label class="col-md-3 col-sm-4 col-form-label">Accessories Origin</label>
                <input class="col-md-9 col-sm-8  my-form-control" type="text" name="acc_origin" value="<?php echo $show['acc_origin'];?>">
            </div>

            <div class="row input-group">
                <label class="col-md-3 col-sm-4 col-form-label">Accessories Wholesale</label>
                <input class="col-md-9 col-sm-8  my-form-control" type="number" name="acc_wholesale" value="<?php echo $show['acc_wholesale'];?>">
            </div>
            <div class="row input-group">
                <label class="col-md-3 col-sm-4 col-form-label">Accessories Quantity</label>
                <input class="col-md-9 col-sm-8  my-form-control" type="number" name="acc_quantity" value="<?php echo $show['acc_quantity'];?>">
            </div>
            <div class="row input-group">
                <label class="col-md-3 col-sm-4 col-form-label">Accessories Description</label>
                <input class="col-md-9 col-sm-8  my-form-control" type="text" name="acc_description"value="<?php echo $show['acc_description'];?>">
            </div>
            <div class="row input-group">
                <div class="col-md-12">
                    <input type="submit" name="update" value="Update Info" class="btn btn-info text-center">
                </div>
            </div>
        </form>
    </div>
</div>
<script src="asset/js/jquery-3.3.1.js"></script>
<script src="asset/js/bootstrap.js"></script>
<script src="asset/js/script.js"></script>
</body>
</html>