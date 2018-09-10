<?php


//var_dump($_POST);
if (isset($_POST['nom'])   AND isset($_POST['prenom']) AND isset($_POST['gender']) AND isset($_POST['age']) AND isset($_POST['loisir1']) AND isset($_POST['loisir2']) AND isset($_POST['loisir3']))

{

        echo'Nom:'. $_POST['nom'].'<br/>'.'Prénom:'.$_POST['prenom'].'<br/>'.'Sex:'.$_POST['gender'].'<br/>'.'Age:'.(int)$_POST['age'].'ans'.'<br/>'.'Loisirs: '.$_POST['loisir1'].' '.$_POST['loisir3'].' '.$_POST['loisir2'];


}

else

{
    echo "vous n'avez pas lotirisation d'accer!";

}

?>
