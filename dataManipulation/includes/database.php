<?php

// define parameters
$host = "localhost";
$login = "root";
$password = "";
$database = "datamanipulation";
?>

<?php

$conn = new mysqli($host, $login, $password, $database);
if ($conn->connect_error)
    die($conn->connect_error);
?>

<?php

function sql_fatal_error($msg) {
    $msg2 = mysqli_error();
    echo <<< _END
    We are sorry, but it was not possible to complete the requested task. Here is the error message we received:
    
    <p>$msg: $msg2</p>
            
            Please click the back button on your browser and try again. If you are still having problems,
            please <a href="mailto:rbyrd@lpld.lib.in.us">email our administrator</a>. Thank you.
_END;
}

