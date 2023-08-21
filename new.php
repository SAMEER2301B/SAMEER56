<?php
$xml = new DOMDocument;
$xml->load('first_session.xml');

if($xml->validate()){
    echo "It's a valid document";
}
else
{
    echo "It's a valid document";
}
?>