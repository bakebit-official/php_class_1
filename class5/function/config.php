<?php 

$server = 'localhost';
$username = 'root';
$password = '';
$db_name = 'university';

$con =  mysqli_connect($server,$username,$password,$db_name);
// echo "<pre>";
// print_r($con);
// echo "</pre>";

// if($con!=null){
//     echo "Database connected";
// }else{
//     echo "Database connection error ".mysqli_error($con);
// }

// die();

// $sql = "select * from student";

// $result = mysqli_query($con, 'select * from student');


// echo "<pre>";
// print_r($result);
// echo "</pre>";

// $r = mysqli_fetch_assoc($result);
// echo "<pre>";
// print_r($r);
// echo "</pre>";

// $r2 = mysqli_fetch_assoc($result);
// echo "<pre>";
// print_r($r2);
// echo "</pre>";

// while($r = mysqli_fetch_assoc($result)){

//         // echo "<pre>";
//         // print_r($r);
//         // echo "</pre>";

//         echo $r['student_name'].' '.$r['student_email'];
//         echo '<br>';

// }

// echo "<pre>";
// print_r($r);
// echo "</pre>";
// die();


?>