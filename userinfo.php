<?php
$servername = "localhost";
$username = "root";
$password = "";
$con = mysqli_connect($servername, $username, $password);
if(!$con){
    die("sorry we failed to connect:".mysqli_connect_error());
}
else{
echo "connection is successful";
}
mysqli_select_db($con,'aboutlucknowdata');
    $user = $_POST['user'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $comment = $_POST['comment'];

    $query = "insert into userinfodata (user, email, mobile, comment)
    values ('$user', '$email', '$mobile', '$comment')";
    mysqli_query($con,$query);
    echo $query;
    







?>