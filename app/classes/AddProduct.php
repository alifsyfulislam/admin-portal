<?php
/**
 * Created by PhpStorm.
 * User: alifs
 * Date: 8/16/2018
 * Time: 2:24 AM
 */

namespace App\classes;


class AddProduct
{
    public function AddMobile(){
        extract($_POST);
        $link=mysqli_connect('localhost','root','','xyz_traders');
        $sql="INSERT INTO `mobiles_info`(`mobile_brand`, `mobile_model`, `mobile_code`, `mobile_origin`, `mobile_wholesale`, `mobile_quantity`, `mobile_description`) 
              VALUES ('$mobile_brand','$mobile_model','$mobile_code','$mobile_origin','$mobile_wholesale','$mobile_quantity','$mobile_description')";
        if (mysqli_query($link,$sql)){
            header('Location: viewMobile.php');
        }
        else{
            return "Query Problem".die($link);
        }
    }

    public function AddAccessories(){
        extract($_POST);
        $link=mysqli_connect('localhost','root','','xyz_traders');
        $sql="INSERT INTO `accessories_info`(`acc_brand`, `acc_model`, `acc_code`, `acc_origin`, `acc_wholesale`, `acc_quantity`, `acc_description`) 
              VALUES ('$acc_brand','$acc_model','$acc_code','$acc_origin','$acc_wholesale','$acc_quantity','$acc_description')";
        if (mysqli_query($link,$sql)){
            header('Location: viewAccessories.php');
        }
        else{
            return "Query Problem".die($link);
        }
    }
}