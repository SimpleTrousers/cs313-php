<?php

function get_apps() {
    $id = $_POST['id'];
    
    if (!isset($id) || $id == "")
    {
        header("Location: appointment.php");
        die();
    }

    require("connectDB.php");
    $db = get_db();
    $query = 'select * from appointment where patient_id=:id';
    $stmnt = $db->prepare($query);
    $stmnt->bindValue(':id', $id);
    $stmnt->execute();

    $row = $stmnt->fetch();

    return $row;
}

?>