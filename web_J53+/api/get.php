<?php include_once "./db.php";

    switch ($g["mode"]) {
        case "getLoginData":
            $sql = "SELECT * FROM `admin` WHERE `acc` = '{$g['acc']}' AND `pw` = '{$g['pw']}'";
            $result = $conn -> query($sql) -> fetch();
            if (empty($result)) {
                echo 0;
            } else {
                echo 1;
            };
            break;

        case "getBusData":
            $result = $conn -> query("SELECT * FROM `bus`") -> fetchAll();
            echo json_encode($result);
            break;
            
        case "getStationData":
            $result = $conn -> query("SELECT * FROM `station`") -> fetchAll();
            echo json_encode($result);
            break;
            
    }