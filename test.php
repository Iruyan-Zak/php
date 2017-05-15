<?php

function object_to_string(object $obj) : string
{
    return sprintf('<object(%s) : %s>', spl_object_hash($obj), get_class($obj));
}

function array_contents_to_string(mixed $obj) : string
{
    foreach ()
}

function to_string(mixed $obj) : string
{
    if ($obj === null)
        return 'null';
    if ($obj === true)
        return 'true';
    if ($obj === false)
        return 'false';

    if (is_array($obj))
        return array_contents_to_string($obj);
    $str = strval($obj);
    if(is_object($obj) and !$str)
        return object_to_string($obj);

    return $str;
}

function puts($obj){
    echo to_string($obj).PHP_EOL;
}

//$a = 10;
$b =& $a;
$b = 0;
puts($a);

$hoge = 'world';
puts("Hello $hoge!");

$sxe = new SimpleXMLElement('<p></p>', NULL);
puts($sxe);
$sxe = new SimpleXMLElement('<p>contents</p>', NULL);
puts($sxe);
puts(true);
puts(false);
puts(null);
puts(array(1, false, "0", 0, array(2, $sxe, 3)));

$bar = "0";
if(empty($bar)){
    puts("bar is empty");
}
if(!$bar){
    echo "bar is FALSE\n";
}
if(array(0)){
    echo "[0] is TRUE\n";
}
//ｋecho $sxe->asXML();

/*
$hoge = simplexml_import_dom(null);

if(!empty($hoge) || true){
    echo "XML is empty!";
}
echo "XML is ??";
*/