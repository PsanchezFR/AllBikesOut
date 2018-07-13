<?php
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=id6477911_db_bikers', 'id6477911_db_user', 'mot1de2passe');
    }
    catch(PDOException $e){
        $logger->log($e->getMessage());
    }
