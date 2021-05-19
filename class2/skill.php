<?php include "includes/header.php" ?>

       
<?php 

$gulzer = array();

?>

<body>
    
    <div class="main">
        <div class="header">
            <div class="title">
                <h1>SKILL</h1>
            </div>

            <?php include "includes/menu.php"; ?>

        </div>

<div class="content">

    <?php
    
    $gulzer = ["Abdullah","Mehedi","Nayeem","Talha","Maliha","Abid","Shajjad","Pritom"];
    $i = 0;

    // echo "<h1>".count($gulzer)."</h1>";

    for($i;$i<count($gulzer);$i++){ 
        
    ?>
        <h3>
            Hello I am <?php echo $gulzer[$i]; ?>
        </h3>
      
    <?php 
} 

?>
    
</div>

    
    </div>

</body>
</html>
