<?php
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=', 'root', '');
    }
    catch(PDOException $e){
        $logger->log($e->getMessage());
    }
