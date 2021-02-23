<?php
    require_once('helper.php');
    

    $conn = new mysqli('localhost', 'root', '','trashure');
    if ($conn->connect_error) {
        die("Connection failed: ". $conn->connect_error);
    }
    $sql = "SELECT status FROM user where iduser=1";
    $result = $conn->query($sql);
    $data = [];
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $data[] = [
                    'status' => $row['status'],
                ];
            }
        } else {
            echo "0 result";
        }
        print_r ($data[0]['status']);
        
?>