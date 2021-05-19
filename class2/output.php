<?php include "includes/header.php"; ?>

<?php 

    $x = "No value";
    $y = "No value";
    $name = "No value";

    echo $_GET['x'];

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

<body>
    
    <div class="main">
        <div class="header">
            <div class="title">
                <h1>Output</h1>
            </div>
            <?php include "includes/menu.php"; ?>

        </div>

        <div class="content">

        
        <h1><?php echo $_SERVER["REQUEST_METHOD"]; ?></h1>

        <h2>
            Hello, <?php echo $name; ?>
        </h2>
        <h2>
            <?php echo $x; ?>
        </h2>
        <h2>
            <?php echo $y; ?>
        </h2>

    <h2>Sum = <?php if($x!="No value" && $y!="No value"){echo $x+$y;} ?></h2>

        
        </div>
    
    </div>

</body>
</html>