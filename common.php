<?php
/**
 * Created by PhpStorm.
 * User: Bonnard_Valentin
 * Date: 18/05/2016
 * Time: 15:31
 */


if(isset($_GET['lang'])) {
    $lang = $_GET['lang'];

    $_SESSION['lang'] = $lang;

    setcookie('lang', $lang, time() + (3600 * 24 * 30));

}else if(isset($_SESSION['lang'])) {

    $lang = $_SESSION['lang'];

}else if (isset($_COOKIE['lang'])){

    $lang = $_COOKIE['lang'];

}else{
    $lang = 'fr';
}


switch ($lang){
    case 'fr' :
        $lang_file = 'lang.fr.php';
        break;

    case 'en' :
        $lang_file = 'lang.en.php';
        break;

    default:
        $lang_file = 'lang.fr.php';
}

include_once 'lang/'.$lang_file;

?>