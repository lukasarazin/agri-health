<?php

require_once 'database.php';

function getDistance($id)
{
    $dbh = connectDB();
    $stmt = $dbh->prepare('SELECT * FROM us WHERE id = :id');
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getDistances()
{
    $dbh = connectDB();
    $stmt = $dbh->prepare('SELECT * FROM us');
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getActivities()
{
    $dbh = connectDB();
    $stmt = $dbh->prepare('SELECT * FROM bp');
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

