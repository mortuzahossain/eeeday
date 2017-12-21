<?php

    include 'inc/conn.php';
    
    $sql = 'SELECT * FROM event2018';
    $result = mysqli_query($con,$sql);

    if($result){
        $have_data = mysqli_num_rows($result);
        if($have_data){
            while($row = mysqli_fetch_assoc($result)){
                $alldata[] = $row;
            }
        } else {
            echo 'No data available to show.';
        }
        var_dump($alldata);
    } else {
        echo 'Problem in Database';
    }
