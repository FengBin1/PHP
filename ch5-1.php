<?php
$sub = ['PHP', 'Java', 'C', 'Android'];
$data = ['goods' => 'clothes', 'num' => 49.90, 'sales' => 500];
$mixed = array(2, 'str','id' => 5, 5=> 'b','a');

$data = array(
    0 => array('name' => 'Tom', 'gender' => '男'),
    1 => array('name' => 'Lucy', 'gender' => '女'),
    2 => array('name' => 'Jimmy', 'gender' => '男')
);


// 访问索引数组
echo $sub[1];			// 输出结果：Java
echo '<br>';

// 访问关联数组
echo $data['sales'];	// 输出结果：500
echo '<br>';


echo '<pre>';
print_r($sub);			// print_r()函数打印$sub数组
var_dump($data);		// var_dump()函数打印$data数组
echo '</pre>';