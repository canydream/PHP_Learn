<?php
/**
 * Created by PhpStorm.
 * User: Cany
 * Date: 2018/11/7
 * Time: 15:50
 */

$genericObject = new stdClass();

class foo
{
    function do_foo()
    {
        echo "Doing foo.\n";
    }
}

$bar = new foo;
$bar->do_foo();


$obj = (object) array('1' => 'foo2',"second"=>"ok");

//在7.2版本以下时
var_dump(isset($obj->{'1'})); // outputs 'bool(false)'
var_dump(key($obj)); // outputs 'int(1)'

echo  "\n";
var_dump(isset($obj->{'second'}));
var_dump(key($obj));

echo  $obj->{'second'}."\n";
echo  key($obj)."\n";


//====NULL===============================
//====NULL===============================
$a = array();   //
$a=0;           //
if($a == null )  //return true
{echo  true."true\n";}
else
    echo  false."false\n";

if($a === null )  //return false
{echo  true;}
else
    echo  false."false\n";

if(is_null($a) )  //return false
{echo  true;}
else
    echo  false."false\n";
echo  $a;