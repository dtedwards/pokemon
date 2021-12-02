<?php

//Check session to auto log in user

session_start();

if(isset($_SESSION['user'])) {
    $response['auth'] = true;
    $response['user'] = $_SESSION['user'];
    echo json_encode($response);
} else {
    $response['auth'] = false;
    echo json_encode($response);
}

?>