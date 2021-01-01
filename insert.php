<?php include 'connection.php';?>

<!DOCTYPE html>
<html>
<head>
    <title>Insert</title>
</head>
<body>
    <form action ="insert.php" method="POST">
    First Name : <input type="text" name="first_name"><br>
    Last Name : <input type="text" name="last_name"><br>
    Phone : <input type ="text" name="phone"><br>
    Pass Word : <input type="password" name="pw"><br>
    <input type="submit" name="submit"><br>

    </form>


</body>
</html>
<? php mysqli_close($con); ?>






