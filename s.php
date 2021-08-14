<?php

$conn=mysqli_connect('localhost','root','','project')or die("no");


 

if(isset($_POST['submitButton'])) {

    $name= $_POST['name'];

    $query = "INSERT INTO data(name)  VALUES('$name')";

    if (mysqli_query($conn,$query)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<html>

<form method="post">
    Name: <input type="text" name="name"><br>
    <input type="submit" name="submit">
</form>

</html>