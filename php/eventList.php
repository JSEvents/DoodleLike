<?php

try {
    $pdo->query('SELECT * FROM evenements WHERE fk_utilisateur="'.$_SESSION['participant']['pk_index'].'"');
    $stmt = $pdo->fetchAll();
    
    echo json_encode(array('statut' => 'ok', 'message' => 'L\'évènement a bien été supprimé !', 'events' => $stmt));
} catch(Exception $e) {
    echo json_encode(array('statut' => 'error','message' => $e->getMessage()));
    die();
}