<?php

require_once 'includes/database.php';

$query = "SELECT * FROM information";
$result = $conn->query($query);
if (!$result)
    die($conn->error);

//this application uses the data_seek command to fetch cells one at a time

$rows = $result->num_rows;

for ($j = 0; $j < $rows; ++$j){
    $result->data_seek($j);
    echo 'Title: ' . $result->fetch_assoc()['title'] . '<br>';
    $result->data_seek($j);
    echo 'Message: ' . $result->fetch_assoc()['message'] . '<br>';
    $result->data_seek($j);
    echo 'Message #: ' . $result->fetch_assoc()['message_num'] . '<br><hr>';
}

$result->close();
$conn->close();


