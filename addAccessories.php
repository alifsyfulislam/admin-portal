<?php
session_start();
if ($_SESSION['id']==null){
    header('Location: index.php');
}
require_once './vendor/autoload.php';
use App\classes\Authentication;
use App\classes\AddProduct;

$access= new Authentication();
if (isset($_GET['logout'])){
    $access->LogOut();
}
if (isset($_POST['addacc'])){
    $add=new AddProduct();
    $add->AddAccessories();
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
<!--<h1 class="bg-success">--><?php //echo $message;?><!--</h1>-->
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
        <form action="" method="post" class="">
            <div class="row input-group">
                <label class="col-md-3 col-sm-4 col-form-label">Accessories Brand</label>
                <select class="col-md-9 col-sm-8 my-form-control" type="text" name="acc_brand">
                    <option>*****Enter a Brand******</option>
                    <option value="Remax">Remax</option>
                    <option value="Samsung">Samsung</option>
                    <option value="Anik">Anik</option>
                </select>
            </div>
            <div class="row input-group">
                <label class="col-md-3 col-sm-4 col-form-label">Accessories Model</label>
                <input class="col-md-9 col-sm-8 my-form-control" type="text" name="acc_model" placeholder="Enter Model Name! example: Ipone 6s" required>
            </div>

            <div class="row input-group">
                <label class="col-md-3 col-sm-4 col-form-label">Accessories Code</label>
                <input class="col-md-9 col-sm-8  my-form-control" type="text" name="acc_code" placeholder="example: XYZ005">
            </div>

            <div class="row input-group">
                <label class="col-md-3 col-sm-4 col-form-label">Accessories Origin</label>
                <input class="col-md-9 col-sm-8  my-form-control" type="text" name="acc_origin" placeholder="example: Manufacture country">
            </div>

            <div class="row input-group">
                <label class="col-md-3 col-sm-4 col-form-label">Accessories Wholesale</label>
                <input class="col-md-9 col-sm-8  my-form-control" type="number" name="acc_wholesale" placeholder="example: 10000">
            </div>
            <div class="row input-group">
                <label class="col-md-3 col-sm-4 col-form-label">Accessories Quantity</label>
                <input class="col-md-9 col-sm-8  my-form-control" type="number" name="acc_quantity" placeholder="example: 50">
            </div>
            <div class="row input-group">
                <label class="col-md-3 col-sm-4 col-form-label">Accessories Description</label>
                <input class="col-md-9 col-sm-8  my-form-control" type="text" name="acc_description" placeholder="example: blah blah">
            </div>
            <div class="row input-group">
                <div class="col-md-12">
                    <input type="submit" name="addacc" value="Add Accessories" class="btn btn-info text-center">
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