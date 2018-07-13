<?php
if(isset($_POST['velo'])){
    $_SESSION['velo'] = $_POST['velo'];
}

if(!isset($_SESSION['defaillances'])){
    $request = $bdd -> prepare("SELECT defaillance.nom_defaillance FROM ve_to_de INNER JOIN defaillance ON ve_to_de.id_defaillance = defaillance.id_defaillance WHERE ve_to_de.id_velo = :velo");
    $request -> bindParam ('velo', $_SESSION['velo']);
    $request -> execute();
    $defaillances = $request->fetchAll(PDO::FETCH_CLASS, 'model\defaillance');
    $_SESSION['defaillances'] = $defaillances;
}

$_SESSION['velo'];
$_SESSION['defaillances'];
?>