<?php 
include 'function/config.php';
if(isset($_GET['user_id'])){
    // echo $_GET['user_id'];

    /* Delete code */
    $id = $_GET['user_id'];
    echo $id;
    
    // die();

    $sql = "DELETE FROM users where id=$id";

    if (mysqli_query($con, $sql)) {
    echo "Record deleted successfully";
    $_SESSION['delete_msg'] = true;
    
    header('Location: ' . $_SERVER['HTTP_REFERER']);

    } else {
        $_SESSION['delete_msg'] = false;
      echo "Error deleting record: " . mysqli_error($con);
    }


}

?>