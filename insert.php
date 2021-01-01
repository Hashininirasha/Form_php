<?php include 'connection.php';?>

<!DOCTYPE html>
<html>
<head>
    <title>Insert</title>
</head>
<body>
    <? php 
        if(isset($_POST['submit']))
        {

        $fname=$_POST['first_name'];
        $lname=$_POST['last_name'];
        $phone=$_POST['phone'];
        $pw=$_POST['pw'];
        $enpassword=sha1($pw);
        
        $dbquery="INSERT into user (First_Name,Last_Name,Phone,Password,Status) VALUES ('$fname','$lname','$phone','$enpassword',1)";
        $result=mysqli_query($con,$dbquery);
        if ($result)
        {
            echo "Record is added";
        }else{
            echo "Record is not added";
        }
        }

    ?>

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






