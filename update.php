<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Update</title>
</head>
<body>
    <?php 
        $query="UPDATE user SET First_Name='Hasi' where Id=1";
        $result=mysqli_query($con,$query);
        if($result){
        echo mysqli_affected_rows($con);
        }else{
            echo "Worng";
        }
    ?>

</body>
</html>
<?php mysqli_close($con); ?>
