<?php
/**
 * Created by PhpStorm.
 * User: alifs
 * Date: 8/17/2018
 * Time: 3:34 PM
 */

namespace App\classes;


class Resource
{
    public function TotalMobile(){
        $link=mysqli_connect('localhost','root','','xyz_traders');
        $total=0;
        $sql="SELECT `mobile_quantity` FROM `mobiles_info`";
        if ($queryResult=mysqli_query($link,$sql)){
            return $queryResult;
        }
        else{
            return "Query Problem".die($link);
        }
    }

    public function TotalAccessories(){
        $link=mysqli_connect('localhost','root','','xyz_traders');
        $total=0;
        $sql="SELECT `acc_quantity` FROM `accessories_info`";
        if ($queryResult=mysqli_query($link,$sql)){
            return $queryResult;
        }
        else{
            return "Query Problem".die($link);
        }
    }
}