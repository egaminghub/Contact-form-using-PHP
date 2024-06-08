<?php
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);
    if(!$con){
        die("Connection failed due to". $mysqli_connect_error());
    }
    // echo"Succcess";
    $name= $_POST['name'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $desc= $_POST['desc'];

    $sql = "INSERT INTO `dbfform`.`contact-us` ( `Name`, `Email`, `Phone`, `Message`, `dt`) VALUES ('$name', '$email', '$phone', '$desc', current_timestamp());";
    if($con->query($sql)== true){
        // echo"Successfully Inserted";
        
    }
    else {
        echo"Error: $sql $con->error";
    }
    $con->close();
    echo" ";
?>

<h1>Form Submitted Succrssfully</h1>
<button class="btn"><a href="index.html">Go Back to HomePage</a></button>
