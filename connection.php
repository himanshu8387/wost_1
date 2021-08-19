<?php

    $link = mysqli_connect("localhost:3306", "root", "Himanshu", "my_diary");
        
        if (mysqli_connect_error()) {
            
            die ("Database Connection Error");
            
        }

?>