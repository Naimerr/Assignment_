<?php
$text="The quick brown fox jumps over the lazy dog.";
$lowercase=strtolower($text);
echo $lowercase;

$modifiedText=str_replace("brown", "red",$text);
echo $modifiedText;