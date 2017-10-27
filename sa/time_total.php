<?php

$connect = mysqli_connect('localhost', 'root', '', 'sample');


//select all the dtr total with the same user id 
$query ="SELECT sa_dtr.dtr_total
       FROM sa_dtr INNER JOIN users ON sa_dtr.user_fk = users.id 
       AND users.username ='" . $_SESSION['username'] . "';";

$res = mysqli_query($connect, $query);

$x = 1;

$newtime = "00:00:00";

while ($row = mysqli_fetch_assoc($res)){

if($x = 1){

$newtime = explode(":", $newtime);
$newtime = $newtime[0] * (60*60) + $newtime[1] * (60)  + $newtime[2];   

$row['dtr_total'] = explode(":", $row['dtr_total']);
$row['dtr_total'] = $row['dtr_total'][0] * (60*60) + $row['dtr_total'][1] * (60) + $row['dtr_total'][2];     
$total_time = $newtime + $row['dtr_total'];

    $newtime =  floor($total_time / (60 * 60)) . ":" . date('i', $total_time) .  ":" . date('s', $total_time);

$x++;

}
else{

$newtime = explode(":", $newtime);
$newtime = $newtime[0] * (60*60) + $newtime[1] * (60)  + $newtime[2];   

$row['dtr_total'] = explode(":", $row['dtr_total']);
$row['dtr_total'] = $row['dtr_total'][0] * (60*60) + $row['dtr_total'][1] * (60) + $row['dtr_total'][2];     
$total_time = $newtime + $row['dtr_total'];
    //Hours
    $newtime =  floor($total_time / (60 * 60)) . ":" . date('i', $total_time) .  ":" . date('s', $total_time);

}
}

$_SESSION['totalTime'] = $newtime;
$_SESSION['remainTime'] = $newtime;

    $query = "UPDATE sa_acc SET acc_total = '$newtime' WHERE user_fk = '{$_SESSION['username']}'";

    if ($connect->query($query) === TRUE) {
        } else {
            echo "Error updating record: " . $connect->error;
        }
        mysqli_free_result($res);

?>