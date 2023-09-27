<?php
$text = "The quick brown fox jumps over the lazy dog.";
strtolower($text);
function replaceBrowntoRed($text){
    $text= strtolower($text);
    $text= str_replace("brown","red","$text");
    echo $text;
}
replaceBrowntoRed($text);