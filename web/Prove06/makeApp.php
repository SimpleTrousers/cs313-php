<?php
    $mH = $_POST['militaryHour'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $id = $_POST['id'];

    if (!isset($mH) || $mH == "" || !isset($day) || $day == "" || !isset($month) || $month == ""
    || !isset($year) || $year == "" || !isset($id) || $id == "")
    {
        header("Location: appointment.php");
        die();
    }

    require("connectDB.php");
    $db = get_db();
    $query = 'INSERT INTO appointment(military_hour, day, month, year, doctor_id, patient_id) VALUES(:mH, :day, :month, :year, :did, :id)';
    $stmnt = $db->prepare($query);
    $stmnt->bindValue(':mH', $mH);
    $stmnt->bindValue(':day', $day);
    $stmnt->bindValue(':month', $month);
    $stmnt->bindValue(':year', $year);
    $stmnt->bindValue(':did', "1");
    $stmnt->bindValue(':id', $id);
    $stmnt->execute();

    header("Location: appointment.php");
    die();
?>