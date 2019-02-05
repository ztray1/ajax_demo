<?php
/**
 * Created by PhpStorm.
 * User: RAY
 * Date: 2019/2/4
 * Time: 15:27
 */

include("db.php");

$query="SELECT * FROM cars";
$query_car_info=mysqli_query($connection,$query);
if(!$query_car_info){
    die("Query Failed".mysqli_error($connection));
}
while($row=mysqli_fetch_array($query_car_info)){
    echo "<tr>";
    echo "<td>{$row['id']}</td>";
    echo "<td><a class='title-link' href='#'>{$row['title']}</a></td>";
    echo "</tr>";
}


?>


<script>

    $('#action-container').hide();
    $('.title-link').on('click',function(){
    alert('alert');
    });
</script>
