
<?php
/**
 * Created by PhpStorm.
 * User: Cany
 * Date: 2018/11/6
 * Time: 11:54
 */

echo  "first php file by phpstorm\n";

$firstquarter  = array(1 => 'January',"abc"=> 'February', 'March');
print_r($firstquarter);
echo $firstquarter["abc"];

$handle = opendir('d:\\ansdk');
while (false !== ($file = readdir($handle))) {
    $files[] = $file;
}
print_r($files);
closedir($handle);

//====String=======
$arr1 = array(2, "你好\r\n\\\t\v\e\f\$\"\u{5B57}\441\041\x21yes
转义字符
ok",3);// 你好 \	$"字!!!yes（显示略有不同）
$arr2 = $arr1;
$arr2[] = 4; // $arr2 is changed,
// $arr1 is still array(2, 3)

$arr3 = &$arr1;//引用
$arr3[] = 4; // now $arr1 and $arr3 are the same
print_r($arr1);
print_r($arr3);

error_reporting(E_ALL);

$great = 'fantastic';

// 无效，输出: This is { fantastic}
echo "This is { $great}";

// 有效，输出： This is fantastic
echo "This is {$great}";
echo "This is ${great}";