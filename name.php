<?php


if (!empty($_GET['firstname']) AND !empty($_GET['lastname']) AND !empty($_GET['repeter']))

{

    for ($i = 0; $i < $_GET['repeter']; $i++)

    {

        echo 'Bonjour ' . $_GET['firstname'] . ' ' . $_GET['lastname'] . ' !<br />';

    }

}

else

{

   echo 'bonjour';

}
 
//if (isset($_GET['firstname']) AND isset($_GET['lastname']) AND isset($_GET['repetetion']))
//
//{
//
//    while ( $i < $_GET['repetetion']){
//        echo 'Bonjour ' . $_GET['firstname'] . ' ' . $_GET['lastname'] . ' !<br />';
//        $i++;
//    }
//
//}
//
//else
//
//{
//echo 'Bonjour';
//}


?>
