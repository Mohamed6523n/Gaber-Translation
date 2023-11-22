<?php 

require_once 'vendor/autoload.php';

use Stichoza\GoogleTranslate\GoogleTranslate;

$lang_one = $_POST['lang_one'];
$lang_tow = $_POST['lang_tow'];
$text = $_POST['text'];

if($lang_one == "AUTO_DETECT"){
    
    $tr = new GoogleTranslate($lang_tow);

    $text = $tr->translate($text);

    $lang_one = $tr->getLastDetectedSource();
    echo GoogleTranslate::trans($text,  $lang_tow,$lang_one);

}else{
    echo GoogleTranslate::trans($text,  $lang_tow,$lang_one);
}



?>