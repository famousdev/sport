<?php

function getAllPlayers ($db) {
    $sql = "SELECT * FROM players
        LEFT JOIN teams ON players.team_id = teams.team_id;";
        
    $result = array();
    $stmt = $db->prepare($sql);
    $stmt->execute();

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $result[$row['player_id']] = $row;   
    }
    return $result;
}

function getAllTeams ($db) {
    $sql = "SELECT * FROM teams
        INNER JOIN countries ON teams.country_id = countries.country_id;";
        
    $result = array();
    $stmt = $db->prepare($sql);
    $stmt->execute();

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $result[$row['team_id']] = $row;   
    }
    return $result;
}