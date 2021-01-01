<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Show</title>
</head>
<body>
    <?php 
        $query='SELECT * from user';
        $result=mysqli_query($con,$query);
        if($result)
        {
            echo mysqli_num_rows($result);
            
            
        while($show=mysqli_fetch_assoc($result))
        {
            echo "<pre>";
            print_r($show);
            echo "</pre><br>";

            }
        }else{
            echo "No data found";
        }
    ?>

</body>
</html>
<?php mysqli_close($con); ?>