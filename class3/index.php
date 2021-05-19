<?php include "includes/header.php"; ?>

<?php 

$sql = "select * from student ORDER BY student_id desc";
$result  = mysqli_query($con, $sql);


?>

<body>
    
    <div class="main">
        <div class="header">
            <div class="title">
                <h1>Home</h1>
            </div>
        <?php include "includes/menu.php"; ?>

        </div>


        <div class="content">

        <h1>Student Data</h1>

        <table>
            <tr>
                <th>Student ID</th>
                <th>Student Name</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Department</th>
                <th>Student Mobile</th>
                <th>Student Email</th>
                <th>Gurdian Mobile</th>
                <th>Action</th>

            </tr>

            <?php 
            while($r = mysqli_fetch_assoc($result)){
            ?>
            <tr>

                <td><?php echo $r['student_id']; ?></td>

                <td><?php echo $r['student_name']; ?></td>

                <td><?php echo $r['student_gender']; ?></td>

                <td><?php echo $r['department_name']; ?></td>

                <td><?php echo $r['mobile_number']; ?></td>

                <td><?php echo $r['student_email']; ?></td>

                <td><?php echo $r['mobile']; ?></td>

                <td><?php echo $r['age']; ?></td>
               
                <td>
                    <a href="#" class="edit">EDIT</a>
                   
                    <a href="" class="delete">DELETE</a>
                </td>

            </tr>
            <?php 
            }
            ?>

           
        </table>

        </div>
    
    </div>

</body>
</html>