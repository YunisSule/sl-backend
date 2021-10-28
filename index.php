<?php

require_once 'include/headers.php';
require_once 'include/functions.php';

try{
    $db = openDB();

    $sql = 'select * from item';
    $query = $db->query($sql);
    $results = $query->fetchALL(PDO::FETCH_ASSOC);

    header('HTTP/1.1 200 OK');
    print json_encode($results);
} catch (PDOException $pdoex) {
    returnError($pdoex);
}
