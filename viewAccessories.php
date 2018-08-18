<?php
session_start();
if ($_SESSION['id']==null){
    header('Location: index.php');
}
require_once './vendor/autoload.php';
use App\classes\Authentication;
//use App\classes\AddProduct;
use App\classes\ViewProduct;
use App\classes\EditProduct;

$access= new Authentication();
if (isset($_GET['logout'])){
    $access->LogOut();
}

$view = new ViewProduct();
$queryResult=$view->ViewAccessories();

if (isset($_POST['btn'])){
    $queryResult=$view->SearchAccessories();
}
$edit=new EditProduct();
if (isset($_GET['delete'])){
    $check=$_GET['delete'];
    $edit->DeleteAccessoriesById($check);
}
//if (isset($_POST['addmobile'])){
//    $add=new AddProduct();
//    $message=$add->AddMobile();
//}
//else{
//    $message='';
//}
?>




<html>
<head>
    <title>dashboard</title>
    <link rel="stylesheet" href="asset/css/bootstrap.css">
    <link rel="stylesheet" href="asset/css/fontawesome-all.css">
    <link rel="stylesheet" href="asset/css/style.php">
    <style>
        .form-control:hover{
            background-color: transparent;
            color: #0c5460;
        }
    </style>
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
        <form action="" method="post">
            <div class="row input-group">
                <label class="col-md-5 col-sm-5 col-12 col-form-label text-secondary font-weight-normal text-center">Search by Brand or Model</label>
                <div class="input-group col-md-7 col-sm-7 col-12">
                    <input type="search" name="search" class="form-control">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-info" name="btn" value="Go">Go</button>
                    </div>
                </div>

            </div>
        </form>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped text-dark text-center">
            <tr>
                <!--                <th>Mobile Id</th>-->
                <th>Accessories Brand</th>
                <th>Accessories Model</th>
                <!--                <th>Mobile Code</th>-->
                <!--                <th>Mobile Origin</th>-->
                <th>Accessories Wholesale</th>
                <th>Accessories Quantity</th>
                <!--                <th>Mobile Description</th>-->
                <th>Action</th>
            </tr>
            <?php while ($show=mysqli_fetch_assoc($queryResult)){?>
                <tr>
                    <!--                <td>--><?php //echo $show['mobile_id'];?><!--</td>-->
                    <td><?php echo $show['acc_brand'];?></td>
                    <td><?php echo $show['acc_model'];?></td>
                    <!--                <td>--><?php //echo $show['mobile_code'];?><!--</td>-->
                    <!--                <td>--><?php //echo $show['mobile_origin'];?><!--</td>-->
                    <td><?php echo $show['acc_wholesale'];?></td>
                    <td><?php echo $show['acc_quantity'];?></td>
                    <!--                <td>--><?php //echo $show['mobile_description'];?><!--</td>-->
                    <td>
                        <a href="viewAccId.php?id=<?php echo $show['acc_id'];?>"><i class="fa fa-desktop text-info"></i></a>&nbsp;
                        <a href="editAccessories.php?id=<?php echo $show['acc_id'];?>"><i class="fa fa-edit text-dark"></i></a>&nbsp;
                        <a onclick="return confirm('Are you sure??')" href="?delete=<?php echo $show['acc_id'];?>"><i class="fa fa-window-close text-danger"></i></a>&nbsp;
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>
<script src="asset/js/jquery-3.3.1.js"></script>
<script src="asset/js/bootstrap.js"></script>
<script src="asset/js/script.js"></script>
</body>
</html>