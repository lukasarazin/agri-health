<?php

function connectDB()
{
    try {
        return new PDO('mysql:host=localhost;dbname=agrihealth;charset=UTF8', 'root', 'wordpress');
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}