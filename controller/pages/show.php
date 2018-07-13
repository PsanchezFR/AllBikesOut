<?php



$request = $bdd -> prepare('SELECT def.nom_defaillance FROM defaillance as def
                            INNER JOIN ve_to_de as vtd ON ve_to_de.id_velo = velo.id_velo
                            INNER JOIN def ON def.id_defaillance = vtd.id_defaillance
                            WHERE id_velo = :velo
                            ');
$request -> bindParam ('velo', $_POST['velo']);
$request -> execute();

?>