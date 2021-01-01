<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Show</title>
</head>
<body>
    <?php 
        $query='SELECT * from user';
        mysqli_query($con,$query);
    ?>

</body>
</html>
<?php mysqli_close($con); ?>