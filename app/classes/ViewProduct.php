<?php
/**
 * Created by PhpStorm.
 * User: alifs
 * Date: 8/17/2018
 * Time: 10:07 AM
 */

namespace App\classes;


class ViewProduct
{
    public function ViewMobile(){
        $link=mysqli_connect('localhost','root','','xyz_traders');
        $sql="SELECT * FROM `mobiles_info`";
        if ($queryResult=mysqli_query($link,$sql)){
            return $queryResult;
        }
        else{
            return "Query Problem".die($link);
        }
    }

    Public function SearchMobile(){
        extract($_POST);
        $link=mysqli_connect('localhost','root','','xyz_traders');
        $sql="SELECT * FROM `mobiles_info` WHERE `mobile_brand` LIKE '%$search%' || `mobile_model` LIKE '%$search%'";
        if ($queryResult=mysqli_query($link,$sql)){
            return $queryResult;
        }
        else{
            return "Query Problem".die($link);
        }
    }

    public function ViewAccessories(){
        $link=mysqli_connect('localhost','root','','xyz_traders');
        $sql="SELECT * FROM `accessories_info`";
        if ($queryResult=mysqli_query($link,$sql)){
            return $queryResult;
        }
        else{
            return "Query Problem".die($link);
        }
    }

    Public function SearchAccessories(){
        extract($_POST);
        $link=mysqli_connect('localhost','root','','xyz_traders');
        $sql="SELECT * FROM `accessories_info` WHERE `acc_brand` LIKE '%$search%' || `acc_model` LIKE '%$search%'";
        if ($queryResult=mysqli_query($link,$sql)){
            return $queryResult;
        }
        else{
            return "Query Problem".die($link);
        }
    }
}