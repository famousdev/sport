<?php

function getAllPlayers ($db) {
    $sql = "SELECT * FROM players";
    $result = array();
    $stmt = $db->prepare($sql);
    $stmt->execute();

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $result[$row['player_id']] = $row;   
    }
    return $result;
}