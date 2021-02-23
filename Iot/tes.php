<?php
    
    header('Content-Type: application/json');
    $data = isset ($_POST['status']) ? $_POST['status']:'';
    echo json_encode($data);