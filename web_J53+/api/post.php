<?php include_once "./db.php";

    switch ($p["mode"]) {
        case "addNewBus":
            $sql = "INSERT INTO `bus`(`name`, `time`) VALUES ('{$p['name']}','{$p['time']}')";
            $conn -> exec($sql);
            break;

        case "addNewStation":
            $sql = "INSERT INTO `station`(`name`, `time`, `wait`) VALUES ('{$p['name']}','{$p['time']}','{$p['wait']}')";
            $conn -> exec($sql);
            break;

        case "editBusData":
            $sql = "UPDATE `bus` SET `time`='{$p["time"]}' WHERE `id` = {$p["id"]}";
            $conn -> exec($sql);
            break;

        case "editStationData":
            $sql = "UPDATE `station` SET `time`='{$p["time"]}', `wait`='{$p["wait"]}' WHERE `id` = {$p["id"]}";
            $conn -> exec($sql);
            break;

        case "delBus":
            $sql = "DELETE FROM `bus` WHERE `id` = {$p["id"]}";
            $conn -> exec($sql);
            break;

        case "delStation":
            $sql = "DELETE FROM `station` WHERE `id` = {$p["id"]}";
            $conn -> exec($sql);
            break;
    }