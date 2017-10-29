<?php
    $mH = $_POST['militaryHour'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];

    require("connectDB.php");
    $db = get_db();
    $query = 'INSERT INTO appointment(military_hour, day, month, year, doctor_id, patient_id) VALUES(:mH, :day, :month, :year, 1, :id)';
    $stmnt = $db->prepare($query);
    $stmnt->bindValue(':mH', $mH);
    $stmnt->bindValue(':day', $day);
    $stmnt->bindValue(':month', $month);
    $stmnt->bindValue(':year', $year);
    $stmnt->bindValue(':id', $_SESSION['id']);
    $stmnt->execute();

    header("Location: appointment.php");
    die();
?>