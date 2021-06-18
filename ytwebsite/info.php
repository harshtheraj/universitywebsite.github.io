<?php

$con = mysqli_connect('localhost' , 'root','','youtubeuserdata');

if($con){
    echo "Connection successful";

}else{
    echo "No connection";
}

// mysqli_select_db($con, 'youtubeuserdata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];
echo "<br>$user,$email,$mobile,$comment,<br>";
$query = "INSERT INTO `userinfodata`(`user`, `email`, `mobile`, `comment`) VALUES ('$user','$email','$mobile','$comment')"; 

$teest =  mysqli_query($con, $query);
if ($teest){
    echo "done";
}else{
    echo "fail";
}
// echo "$query";

// mysqli_query($con, $query);

header('location:index.php');


?>