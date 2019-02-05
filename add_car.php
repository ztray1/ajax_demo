<?php
/**
 * Created by PhpStorm.
 * User: RAY
 * Date: 2019/2/4
 * Time: 14:06
 */

include("db.php");


if(isset($_POST['car_name'])){
    $car_name=$_POST['car_name'];
    $query="INSERT INTO cars(title) VALUES ('$car_name')";
    $query_car_name=mysqli_query($connection,$query);
    if(!$query_car_name){
        die('QUERY FAILED');
    }
}


?>