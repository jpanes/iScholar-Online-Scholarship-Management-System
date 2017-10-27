<?php

 $query = "SELECT acc_start from sa_acc where user_fk ='".$_SESSION['username']."' ";

 $result = $connect->query($query); // stores the query in the result variable
 $row = $result->fetch_object(); // fetch the value in the  database
 $time_start = $row->acc_start; // stores the last time in a variable
 $remainTime = $_SESSION['totalTime'];

 $time_start = explode(":", $time_start);
 $time_start = $time_start[0] * (60*60) + $time_start[1] * (60) + $time_start[2];        
 $remainTime = explode(":", $remainTime);
 $remainTime = $remainTime[0] * (60*60) + $remainTime[1] * (60) + $remainTime[2];       

 $total_time = $time_start - $remainTime;

    $newtime = floor($total_time / (60 * 60)) . ":" . date('i', $total_time) . ":" . date('s', $total_time);

    $_SESSION['remaining'] = $newtime;

    $query = "UPDATE sa_acc SET acc_rem = '$newtime' WHERE user_fk ='".$_SESSION['username']."' ";

    if ($connect->query($query) === TRUE) {
        } else {
            echo "Error updating record: " . $connect->error;
        }
        mysqli_free_result($result);
?>





