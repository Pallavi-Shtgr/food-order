<?php
if($_SERVER['REQUEST_METHOD']=='POST' && isset ($_POST[' submit']))
{
    $conn= mysqli_connect('localhost','root','','test1') or die ("connection failed" .mysqli_connect_error());
    if (isset($_POST['name']) && isset ($_POST['email'])&& isset ($_POST['food'])&& isset ($_POST['phone']) && isset ($_POST['location']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $food=$_POST['food'];
        $phone=$_POST['phone'];
        $location=$_POST['location'];
        $sql="INSERT INTO 'users'('name','email','food','phone','location') VALUES ('$name','$email','$food','$phone','$location')";

        $query= mysqli_query($conn,$sql);
        if($query){
            echo "Entry is successful"
        }
        else{
            echo "error occurred"
        }

    }

    }
?>