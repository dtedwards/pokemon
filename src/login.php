<?php

require_once "config.php";
require_once "utils.php";

if(isset($_POST['username'])) {
    $user = $_POST['username'];

    $conn = new mysqli($hn,$un,$pw,$db);

    $query = "SELECT trainername FROM Trainers WHERE trainername = '$user'";

    $result = $conn->query($query);
    If(!$result) {
        echo "Query Error";
    } else {
        $rows = $result->num_rows;

        if($rows >= 1) {
            session_start();

            foreach($result as $item) {
                $_SESSION['user'] = $item['trainername'];
                header("Location: ../");
            }
        } else {
            echo "$user not found.";
        }
    }
}

?>