
<?php 
session_start();
include 'function/config.php';
// echo $_SERVER["REQUEST_METHOD"] ;

// echo '<br>';

$username = '';
$email = '';
$gender = '';
$birthdate = '';
$password = '';


/* Insert code */
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $birthdate = $_POST['birthdate'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users(username,password,email,birthdate,gender)
    VALUES('$username','$password','$email','$birthdate','$gender')";

    $result = mysqli_query($con, $sql);

    if ($result) {
     echo "New record created successfully";

     $_SESSION['success_message'] = true;

    } else {
     
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
        $_SESSION['success_message'] = false;


    }


}


/* Select code */
$sql = "SELECT * FROM users";
$result = mysqli_query($con, $sql);




// echo "<br> After Session start <br>";

// $_SESSION['username'] = '786saadman@gmail.com';
// $_SESSION['password'] = '1234';

// echo '<br>';
// print_r($_SESSION);
// echo '</br>';

// echo 'session - '.session_id();

// echo "<br> After Session destroy <br>";
// session_unset();
// session_destroy();

// echo 'session - '.session_id();

// echo '<br>';

// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- <h1>Hello</h1> -->

<div class="header">
    <h4>PHP LOGIN AND REGISTRATION</h4>
</div>

<div class="content">
<?php //echo $_SERVER['PHP_SELF'] ?>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

    <table class="form_table">
        <tr>
            <td>
                Username
            </td>
            <td>
                <input type="text" name="username" >
            </td>
          
        </tr>

        <tr>
            <td>
                Email
            </td>
            <td>
                <input type="text" name="email" >
            </td>
          
        </tr>

        <tr>
            <td>
                Gender
            </td>
            <td>
                <input type="radio" name="gender" value="male" > Male &nbsp;    <input type="radio" name="gender" value="female" > Female
            </td>
          
        </tr>

        
        <tr>
            <td>
                Date of birth
            </td>
            <td>
                <input type="date" name="birthdate">
            </td>
          
        </tr>

        <tr>
            <td>  
                Password
            </td>
            <td>
                <input type="password" name="password">
            </td>
        </tr>

        <tr>
            <td>

            </td>
            <td>
                <input type="submit" value="Register">
            </td>
        </tr>
    </table>

</form>


<?php if(isset($_SESSION['delete_msg'])){ ?>

<?php if($_SESSION['delete_msg'] == true){ ?>

    <h2 class="success_msg">
        Data Deleted Successfully
    </h2>

<?php  }  ?>

<?php if($_SESSION['delete_msg'] == false){ ?>
    
    <h2 class="error_msg">
        Failed to delete data
    </h2>

<?php  } ?>

<?php } session_unset();   ?>


<?php if(isset($_SESSION['success_message'])){ ?>

    <?php if($_SESSION['success_message'] == true){ ?>

        <h2 class="success_msg">
            Data Inserted Successfully
        </h2>

    <?php  }  ?>

    <?php if($_SESSION['success_message'] == false){ ?>
        
        <h2 class="error_msg">
            Failed to insert data
        </h2>

    <?php  } ?>

<?php } session_unset();   ?>

<table class="user_table">
  <tr>
    <th>id</th>
    <th>Username</th>
    <th>Email</th>
    <th>Date of Birth</th>
    <th>Gender</th>
    <th>
        Action
    </th>
  </tr>

  <?php 
while($row = mysqli_fetch_assoc($result)) {
    ?>


  <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['username']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['birthdate']; ?></td>
    <td><?php echo $row['gender']; ?></td>
    <td>

    <a href="">Edit</a>
    <a href="delete.php?user_id=<?php echo $row['id']; ?>">Delete</a>

    </td>
  </tr>

  <?php 
}

?>


</table>


</div>

<div class="footer">


</div>


    
</body>
</html>