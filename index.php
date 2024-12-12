<?php
include 'Config/config.php';
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $sql = "SELECT * FROM students";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $student = [];
        while ($row = $result->fetch_assoc()) 
        {
            $student[] = $row;
        }
        echo json_encode($student);
    } 
}
?>