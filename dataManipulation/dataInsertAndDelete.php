<?php

require_once 'includes/database.php';

if (isset($_POST['delete']) && isset($_POST['message_num'])){
    $message_num = get_post($conn, 'message_num');
    $query = "DELETE FROM information WHERE message_num='$message_num'";
    $result = $conn->query($query);
    if(!result) echo "DELETE failed: $query<br>" .
            $conn->error . "<br><br>";
}

if (isset($_POST['title']) &&
   isset($_POST['message']) &&
   isset($_POST['message_num'])) {
       
   $title = get_post($conn, 'title');
   $message = get_post($conn, 'message');
   $message_num = get_post($conn, 'message_num');

   $query = "INSERT INTO information VALUES" .
           "('$title', '$message', '$message_num')";
   }
   
   $result = $conn-> query ($query);
   if (!$result) echo "INSERT failed: $query<br>" .
           $conn->error . "<br><br>";
   }
   
   echo <<< _END
   <form action="dataInsertAndDelete.php" method="post"><pre>
   Title: <input type="text" name="title">
   Message: <input type="text" name="message">
   Message Number: <input type="text" name="message_num">
   <input type="submit" value="ADD RECORD">
   </pre></form>

_END;
   
   