<?php

require_once "config.php";

$conn = new mysqli($hn,$un,$pw,$db);

$query = "SELECT * FROM Trainers ORDER BY updated desc;";

$result = $conn->query($query);

$data = array();

foreach ($result as $key => $item) {
    $data[$key] = $item;
}

echo json_encode($data);

?>