<?php
/**
 * Created by PhpStorm.
 * User: alifs
 * Date: 8/15/2018
 * Time: 1:39 PM
 */

namespace App\classes;


class Authentication
{
    public function LoginByEmail(){
        extract($_POST);
        $newPass=md5($password);
        echo $newPass;
        echo $user;
        $link=mysqli_connect('localhost','root','','xyz_traders');
        $sql="SELECT  * FROM `users` WHERE `user_name`='$user' || `user_email`='$user' && `user_password`='$newPass'";
        if ($queryResult=mysqli_query($link,$sql)){
            $check=mysqli_fetch_assoc($queryResult);
            if ($check){
                session_start();
                $_SESSION['id']=$check['user_id'];
                $_SESSION['name']=$check['user_name'];
                $_SESSION['designation']=$check['user_designation'];
                header('Location: dashboard.php');
            }
            else{
                header('Location: index.php');
            }
        }
    }
    public function LogOut(){
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        unset($_SESSION['designation']);
        header('Location: index.php');
    }
}