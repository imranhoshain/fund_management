<?php
include_once '../../../vendor/autoload.php';
//use App\Connection;

$img_tmp_name = $_FILES['image']['tmp_name'];
$img_name = $_FILES['image']['name'];
$genName = substr(md5(uniqid()),0,10);
$img_ext = explode('.',$img_name);
$extName = end($img_ext);
$image_name = $genName.'.'.$extName;
move_uploaded_file($img_tmp_name,'../../../assets/admin/uploads/'.$image_name);
echo $image_name;