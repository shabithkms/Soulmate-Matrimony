<?php
    include "conn.php";
    
    $sel="SELECT * FROM photo where email='yadhu143@gmail.com'";
    $que=mysqli_query($conn,$sel);
    


    

    while($row=mysqli_fetch_array($que)){

        echo "<img src='upload/".$row['image']."' style='width:400px;height:400px;' >";


    }




    ?>