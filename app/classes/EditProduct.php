<?php
/**
 * Created by PhpStorm.
 * User: alifs
 * Date: 8/17/2018
 * Time: 12:21 PM
 */

namespace App\classes;


class EditProduct
{
    public function ViewMobilebyId($id){
        $link=mysqli_connect('localhost','root','','xyz_traders');
        $sql="SELECT * FROM `mobiles_info` WHERE `mobile_id`='$id'";
        if ($queryResult=mysqli_query($link,$sql)){
            return $queryResult;
        }
        else{
            return "Query Problem".die($link);
        }
    }
    public function UpdateMobileById(){
        extract($_POST);
        $link=mysqli_connect('localhost','root','','xyz_traders');
        $sql="UPDATE `mobiles_info` SET `mobile_code`='$mobile_code',`mobile_origin`='$mobile_origin',`mobile_wholesale`='$mobile_wholesale',
              `mobile_quantity`='$mobile_quantity',`mobile_description`='$mobile_description'WHERE `mobile_id`='$mobile_id'";
        if (mysqli_query($link,$sql))
        {
            header('Location: viewMobile.php');
        }
        else{
            return "Query Problem".die($link);
        }
    }

    Public function DeleteMobileById($id){
        extract($_POST);
        $link=mysqli_connect('localhost','root','','xyz_traders');
        $sql="DELETE FROM `mobiles_info` WHERE `mobile_id`='$id'";
        if (mysqli_query($link,$sql))
        {
            header('Location: viewMobile.php');
        }
        else{
            return "Query Problem".die($link);
        }
    }

    public function ViewAccessoriesbyId($id){
        $link=mysqli_connect('localhost','root','','xyz_traders');
        $sql="SELECT * FROM `accessories_info` WHERE `acc_id`='$id'";
        if ($queryResult=mysqli_query($link,$sql)){
            return $queryResult;
        }
        else{
            return "Query Problem".die($link);
        }
    }

    public function UpdateAccessoriesById(){
        extract($_POST);
        $link=mysqli_connect('localhost','root','','xyz_traders');
        $sql="UPDATE `accessories_info` SET `acc_code`='$acc_code',`acc_origin`='$acc_origin',`acc_wholesale`='$acc_wholesale',
              `acc_quantity`='$acc_quantity',`acc_description`='$acc_description'WHERE `acc_id`='$acc_id'";
        if (mysqli_query($link,$sql))
        {
            header('Location: viewMobile.php');
        }
        else{
            return "Query Problem".die($link);
        }
    }

    Public function DeleteAccessoriesById($id){
        extract($_POST);
        $link=mysqli_connect('localhost','root','','xyz_traders');
        $sql="DELETE FROM `accessories_info` WHERE `acc_id`='$id'";
        if (mysqli_query($link,$sql))
        {
            header('Location: viewAccessories.php');
        }
        else{
            return "Query Problem".die($link);
        }
    }
}