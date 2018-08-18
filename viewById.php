<?php
    session_start();
    if($_SESSION['id']==null){
        header('Location: index.php');
    }
    require_once './vendor/autoload.php';
    use App\classes\Authentication;
    //use App\classes\AddProduct;
//    use App\classes\ViewProduct;
    use App\classes\EditProduct;

    $access= new Authentication();
    if (isset($_GET['logout'])){
        $access->LogOut();
    }
    $edit =new EditProduct();
    $queryResult=$edit->ViewMobilebyId($_GET['id']);
    $show=mysqli_fetch_assoc($queryResult)
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
                    <li><a class="dropdown-item" href=""> Add Accessories</a></li>
                    <li><a class="dropdown-item" href=""> View List</a></li>
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
    <h1 class="text-muted text-center">VIEW FULL INFORMATION</h1>
    <hr>
    <div class="row">
        <div class="text-dark pl-5 col-md-4 col-sm-4 col-12">
            <h4>Mobile Id :</h4>
            <h4>Mobile Brand :</h4>
            <h4>Mobile Model :</h4>
            <h4>Mobile Code:</h4>
            <h4>Mobile Origin :</h4>
            <h4>Mobile Wholesale :</h4>
            <h4>Mobile Quantity :</h4>
            <h4>Mobile Description :</h4>
        </div>
        <div class="text-info text-left col-md-8 col-sm-8 col-12">
            <h4><?php echo $show['mobile_id'];?></h4>
            <h4><?php echo $show['mobile_brand'];?></h4>
            <h4><?php echo $show['mobile_model'];?></h4>
            <h4><?php echo $show['mobile_code'];?></h4>
            <h4><?php echo $show['mobile_origin'];?></h4>
            <h4><?php echo $show['mobile_wholesale'];?></h4>
            <h4><?php echo $show['mobile_quantity'];?></h4>
            <h4><?php echo $show['mobile_description'];?></h4>
        </div>
    </div>
</div>
<script src="asset/js/jquery-3.3.1.js"></script>
<script src="asset/js/bootstrap.js"></script>
<script src="asset/js/script.js"></script>
</body>
</html>
