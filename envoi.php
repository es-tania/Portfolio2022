<?php

$db = new PDO('mysql:host=db5006036876.hosting-data.io;dbname=dbs5056577', 'dbu1701939', 'Labddpersodetania123@', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$requete="INSERT INTO portfolio_contact VALUES (NULL,:nom,:prenom,:email, :text)";
$stmt= $db->prepare($requete);
$stmt->bindParam(':nom',$_GET["nom"] , PDO::PARAM_STR); 
$stmt->bindParam(':prenom',$_GET["prenom"] , PDO::PARAM_STR); 
$stmt->bindParam(':email',$_GET["email"] , PDO::PARAM_STR);
$stmt->bindParam(':text',$_GET["text"] , PDO::PARAM_STR);  
$stmt->execute();
header ('Location:index.html');

?>