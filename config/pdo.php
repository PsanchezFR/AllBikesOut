<?php
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=lms_simplon', 'root', '150389ps');
    }
    catch(PDOException $e){
        $logger->log($e->getMessage());
    }
