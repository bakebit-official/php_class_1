
<?php 

session_start();

echo "<br> After Session start <br>";

$_SESSION['username'] = '786saadman@gmail.com';
$_SESSION['password'] = '1234';

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

echo 'session - '.session_id();

echo "<br> After Session destroy <br>";
session_unset();
session_destroy();

echo 'session - '.session_id();

echo '<br>';

echo '<pre>';
print_r($_SESSION);
echo '</pre>';


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

    
</body>
</html>