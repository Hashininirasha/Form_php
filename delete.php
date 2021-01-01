<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete</title>
</head>
<body>
    <?php 
        $query="delete from user where id=1";
        $result=mysqli_query($con,$query);
        if($result)
        {
            echo mysqli_affected_rows($con);
        }else{
            echo "fali";
        }

    ?>

</body>
</html>
<?php mysqli_close($con); ?>
