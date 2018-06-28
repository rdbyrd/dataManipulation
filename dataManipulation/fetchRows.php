<?php

require_once 'includes/database.php';

$query = "SELECT * FROM information";
$result = $conn->query($query);
if (!$result)
    die($conn->error);

$rows = $result->num_rows;
        
//this will fetch rows one at a time from the database.
for ($j = 0; $j < $rows; ++$j){
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    
    echo 'Title: ' . $row['title'] . '<br/>';
    echo 'Message: ' . $row['message'] . '<br/>';
    echo 'Message Number: ' . $row['message_num'] . '<br/><hr/>';
}

$result->close();
$conn->close();
