<?php

function checkuser($ID, $password) {
    $conn = connect();
    $stmt = $conn->prepare("SELECT role FROM user WHERE ID = :ID AND password = :password");
    $stmt->bindParam(':ID', $ID);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if($result) {
        return $result['role'];
    } else if($result === 0) {
        return 0;
    } else {
        return null;
    }
}

?>
