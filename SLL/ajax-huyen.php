<?php 
include 'common/connect_db.php';
if(!$_POST['provinceid'] == null){
$provinceid = $_POST['provinceid'];
$districts = $conn->prepare("SELECT * FROM `districts` WHERE provinceid=".$provinceid); 
$districts->execute();
$districts =  $districts->fetchAll(PDO::FETCH_OBJ);
    foreach ($districts as $district) {
        $typeareas = $conn->prepare("SELECT * FROM `typeareas` WHERE typeareaid =".$district->typeareaid); 
        $typeareas->execute();
        $typeareas =  $typeareas->fetch(PDO::FETCH_OBJ);
        echo '<option value="'.$district->districtid.'- '.$typeareas->typeareaname.' '.$district->districtname.'">'.$typeareas->typeareaname.' '.$district->districtname.'</option>' ;
           }
}
?>