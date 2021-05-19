<?php 

    $x = "No value";
    $y = "No value";
    $name = "No value";

    // echo $_GET['x'];

    if(isset($_GET['x'])){
        $x = $_GET['x'];
    }

    if(isset($_GET['y'])){
        $y = $_GET['y'];
    }

    if(isset($_GET['username'])){
        $name = $_GET['username'];
    }


   

?>

<?php include "includes/header.php"; ?>


<body>
    
    <div class="main">
        <div class="header">
            <div class="title">
                <h1>Contact</h1>
            </div>
            <?php include "includes/menu.php"; ?>

        </div>

        <div class="content">

        <h1><?php echo $_SERVER["REQUEST_METHOD"]; ?></h1>

        <form action="contact.php" method="get">

      
            <table>
                <tr>
                    <td>
                        Name
                    </td>
                    <td>
                        <input type="text" name="username" placeholder="User Name">
                    </td>
                </tr>

                <tr>
                    <td>
                        X
                    </td>
                    <td>
                        <input type="number" name="x" >
                    </td>
                </tr>

                
                <tr>
                    <td>
                        Y
                    </td>
                    <td>
                        <input type="number" name="y" >
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Insert">
                    </td>
                </tr>

            </table>

            <h1>
                <?php echo $x.' '.$y.' '.$name; ?>
            </h1>

        </form>
        
        </div>
    
    </div>

    <!-- POST 
    GET -->

</body>
</html>