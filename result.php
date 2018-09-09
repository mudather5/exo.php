<?php
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
//$sex = $_POST['sex'];
$age = $_POST['age'];
$loisirs = $_POST['loisirs'];

echo 'nom: '.$nom.'<br>'.'prénom: '.$prenom.'<br>'.'Age: '.(int)$_POST['age'].' '.'ans'.(int)$loisirs;



//if (isset($_POST['nom'])  AND isset($_POST['sex']) AND isset($_POST['prenom']) AND isset($_POST['Age']) AND isset($_POST['loisirs']))
//
//{
//
//        echo $_POST['nom'].'<br/>'.$_POST['sex'].'<br/>'.$_POST['prenom'].'<br />'.$_POST['Age'].'<br/>'.$_POST['loisirs'];
//
//
//}
//
//else
//
//{
//
// echo 'nom:'.$_POST['nom'].'<br/>'.'prénom:'.$_POST['prenom'].'<br />'.$_POST['sex'].'<br/>'.$_POST['Age'].'<br/>'.$_POST['loisirs'];  
//
//}


//$username = $_POST['username'];
//$password = $_POST['password'];
//
//echo $username.'<br/>'.$password;
// 
?>
