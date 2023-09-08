<?php
function calculerTempsRestant($date_de_creation, $sla) {
    $maintenant = date("Y-m-d H:i:s");
    $différence = strtotime($maintenant) - strtotime($date_de_creation);
    $int_sla=(int)$sla;
    $différence -= $int_sla*3600;

    $temps_restant = "";

    if ($différence < 0) {
        $temps_restant = "Moins ";
    }

    $différence = abs($différence);

    $heures = floor($différence / 3600);
    $minutes = floor(($différence % 3600) / 60);
    $secondes = $différence % 60;

    $temps_restant .= $heures . " heures " . $minutes . " minutes " . $secondes . " secondes";

    return $temps_restant;
}


?>
