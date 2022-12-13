<?php
$getLang = $_GET["lang"];
$languages = array("tr","en");

if(in_array($getLang,$languages)) {
    include $getLang.".php";
} else {
    die("Dil dosyası bulunamadı!");
}

echo $lang["welcome"];

?>