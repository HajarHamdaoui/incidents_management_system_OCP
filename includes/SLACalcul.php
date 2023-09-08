<?php
function calculateSLA_service_personnalisé($importance, $urgence) {
    // Coefficients pour le calcul du temps de réponse en heures
    $coefficients = array(
        // Tableau d'importance (degré du poste) => Tableau d'urgence => Coefficient
        1 => array(
            'mineur' => 8,
            'modéré' => 6,
            'moyen' => 4,
            'majeur' => 2,
        ),
        2 => array(
            'mineur' => 7,
            'modéré' => 5,
            'moyen' => 3,
            'majeur' => 1,
        ),
        3 => array(
            'mineur' => 6,
            'modéré' => 4,
            'moyen' => 2,
            'majeur' => 1,
        ),
        4 => array(
            'mineur' => 5,
            'modéré' => 3,
            'moyen' => 1,
            'majeur' => 1,
        ),
        5 => array(
            'mineur' => 3,   // Coefficient plus élevé pour le degré 5
            'modéré' => 2,   // Coefficient plus élevé pour le degré 5
            'moyen' => 1,    // Coefficient plus élevé pour le degré 5
            'majeur' => 1,   // Coefficient plus élevé pour le degré 5
        )
    );

    // Vérification des valeurs d'entrée pour éviter les erreurs
    if ($importance >= 1 && $importance <= 5 && in_array($urgence, array('mineur', 'modéré', 'moyen', 'majeur'))) {
        $tempsReponse = $coefficients[$importance][$urgence];
        return intval($tempsReponse); // Convertir en entier
    } else {
        return false; // Valeurs non valides
    }
}

?>