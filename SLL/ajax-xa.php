<?php 
include 'common/connect_db.php';

if(!$_POST['districtid'] == null){
$districtid = $_POST['districtid'];
$wards = $conn->prepare("SELECT * FROM `wards` WHERE districtid=".$districtid); 
$wards->execute();
$wards =  $wards->fetchAll(PDO::FETCH_OBJ);
    foreach ($wards as $ward) {
        $typeareas = $conn->prepare("SELECT * FROM `typeareas` WHERE typeareaid =".$ward->typeareaid); 
        $typeareas->execute();
        $typeareas =  $typeareas->fetch(PDO::FETCH_OBJ);
        echo '<option value="'.$ward->wardid.'- '.$typeareas->typeareaname.' '.$ward->wardname.'">'.$typeareas->typeareaname.' '.$ward->wardname.'</option>' ;
           }
}

?>