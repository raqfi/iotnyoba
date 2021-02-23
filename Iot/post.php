<?php
    require_once('helper.php');
    

        $conn = new mysqli('localhost', 'root', '','trashure');
        if ($conn->connect_error) {
            die("Connection failed: ". $conn->connect_error);
        }
        $data = isset ($_GET['status']) ? $_GET['status']:'';
        
        if ($data == NULL) {
            echo "kosong";
        } else {
            $sql = "UPDATE user SET status = 'on'
            WHERE iduser=1";
            if ($conn->query($sql) === TRUE) {
                output('ok', '',$data);
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            $conn->close();
            
            //header("location:index.html");
        }
        
?>


