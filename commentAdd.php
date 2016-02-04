<?php

$message = '';
$idEvenement = '';

try {
    if(isset($_POST['contenu']) && !empty($_POST['contenu'])){
        $libelle = $_POST['contenu'];
    } else {
        throw new Exception('No content send');
    }
    if(isset($_POST['id_evenement']) && !empty($_POST['id_evenement'])){
        $idEvenement = $_POST['id_evenement'];
    } else {
        throw new Exception('No pk_event send');
    }
//$avatar;
//$upload = new upload($_FILES['file']);        
//if ($upload->uploaded) {
//    $logoPath = './imageEvent/';
//    $upload->image_convert = 'png';
//
//    //Remplace les accents du nom du fichier puis l'encode en UTF-8
//    $upload->file_new_name_body = utf8_encode($upload->file_src_name_body);
//    $upload->file_new_name_body = 'account_'.$upload->file_new_name_body;
//    $upload->Process($logoPath);  
//    if($upload->processed){
//        $pdo = new PDO('mysql:host=localhost;dbname=jsevents','root', '');
//        $pdo->query('')
//        $oAccount->logo = $upload->file_dst_name_body;
//        $oAccount->update();
//    }
//else {
//    echo 'error : ' . $foo->error;
//}

} catch(Exception $e){
    echo json_encode(array('statut' => 'error', 'message' => $e->getMessage()));
}

try {
    $pdo->query('INSERT INTO `commentaires`(`contenu`, `id_utilisateur`) VALUES ("'.$message.'","'.$_SESSION['utilisateur']['pk_index'].'")');
    $lastInsertId = $pdo->lastInsertId();
    
    $pdo->query('SELECT count(*) as num_ordre FROM `mappingCommentaires` WHERE id_utilisateur="'.$_SESSION['utilisateur']['pk_index'].'" AND id_evenement="'.$idEvenement."'");
    $stmt = $pdo->fetch();  //Test case where the request return 0
    
    $pdo->query('INSERT INTO mappingCommentaires (`id_utilisateur`,`id_evenement`,`id_commentaire`,`ordre`) VALUES ("'.$_SESSION['utilisateur']['pk_index'].'","'.$idEvenement.'","'.$lastInsertId.'","'.$stmt['num_ordre'].'")');
    
    echo json_encode(array('statut' => 'ok','message' => 'L\'évènement a bien été crée !'));
} catch(Exception $e) {
    echo json_encode(array('statut' => 'error','message' => $e->getMessage()));
    die();
}