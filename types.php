<html>
<head>
    <title>php数据类型</title>
    <meta charset="UTF-8">
</head>
<body>
<?php

/*
 * 基本php数据类型
 * PHP共有8种原始数据类型
 * 四总标量类型（仅含有一个值）
 * 1.integer(整型) 2.float,double(浮点型) 3.string(字符串) 4.boolean(布尔值)
 * 两种复合类型（含有多个值）
 * 1.array() //数组 2.Object //对象
 *两种特殊类型
 * 1.resource (资源类型) 2.NULL (无类型)
 * */

//进行类型检测
$bool  = true;
$num   = 123;
$str   = "HELLO WORLD";
$price = 123.45;

var_dump($num);  //可直观查看数据类型
echo '</br>';

echo is_bool($bool); // is_type() 判断数据类型 返回1
echo '</br>';

echo gettype($num); //获取应用的类型

echo '<hr>';
echo '<h2>Boolean值类型</h2>';
/*
 * Boolean 布尔类型
 * 布尔类型表达了真值，可以为 TRUE 或 FALSE，不区分大小写。
 * */
echo '<p>布尔类型表达了真值,可以为true或False,不区分大小写</p>';
$a = true;
$b = True;
$c = TRUe;
$d = TRUE;
echo 'true = ' . $a, ' | True = ' . $b, ' | TRUe = ' . $c, ' | TRUE  = ' . $d;

echo '<p>常见数据类型转换为boolean类型的值</p>';

$a = 0;
$b = '';
$c = false;
$d = NULL;
$e = 0.0;
$f = '0';
$g = array();

$a = $g == true ? 'true' : 'false';
echo $a;

echo '<hr>';
echo '<h2>Integer值类型</h2>';
echo '<p>整型值可以使用十进制，十六进制，八进制或二进制表示，前面可以加上可选的符号（- 或者 +）。</p>';

$a = 123;
$b = -123;
$c = 0112; //8进制
$d = 0x12; //16进制

echo '123：' . $a, ' |  -123：' . $b, ' | 0112(8进制)：' . $c, ' | 0x12(16进制)：' . $d;

echo '<p>整数溢出如果给定的一个数超出了 integer 的范围，将会被解释为 float。同样如果执行的运算结果超出了 integer 范围，也会返回 float。</p>';

$large_num = 2147483647;
var_dump($large_num);
echo '</br>';
$b = 9223372036854775807;
var_dump($b);

echo '<hr>';
echo '<h2>Float浮点型</h2>';
echo '<p>浮点型（也叫浮点数 float，双精度数 double 或实数 real）</p>';
echo '<p>浮点数的字长和平台相关，通常最大值是 1.8e308 并具有 14 位十进制数字的精度（64 位 IEEE 格式）</p>';

echo '<hr>';
echo '<h2>String字符串类型</h2>';

echo '<p>一个字符串 string 就是由一系列的字符组成，其中每个字符等同于一个字节，PHP 中有 4 中表达方式</p>';
?>

<ul>
    <li>单引号</li>
    <p>单引号内特殊字符和变量不会被解析</p>
    <li>双引号</li>
    <p>引号内的特殊字符和变量会被解析。</p>
    <li>Heredoc</li>
    <p>Heredoc 类似与双引号，内部转义字符和变量可以被解析，句法结构为</p>
    <li>Nowdoc</li>
    <p>Nowdoc 类似于单引号，无法解析转移字符和变量。句法结构类似 Heredoc，但是需要在开始标识符加上单引号。</p>
</ul>
<p>实例演示：</p>
<div>双引号解析变量，单引号不解析变量</div>
<?php
//实例 双引号解析变量，单引号不解析
$name = "戴富阳";
$str  = "你的名字：$name";
echo $str;
echo '</br>';
$str = '你的名字：$name';
echo $str;
?>

<div>如果变量后面紧跟字母是什么情况呢？</div>

<?php

// $str = "$nameaaaaaaaaaaaaaa"; php会将整个字符串认成一个变量
// $str = "$name!aaaaaaaaaaa"; //可以被识别
//$str = "$name".'aaaaaaa'; //可以被识别
$str = "{$name}aaaaaaaa"; //可以被识别
$str = "$name aaaaaa";
echo $str;
?>

<div>定界符的使用</div>
<?php
$str1 = '每天进步一点点';
$str2 = '踏踏实实每一天';

$res = <<<ABC
        如果
        \t $str1,
        '$str2'
        
        "哈哈哈哈"
        <i>富阳语录</i>
        <div>2019-05-21</div>
ABC;
echo $res;
?>

<hr>

<h2>NULL值数据类型</h2>
<p>主要有以下三空情况会产生空（null）类型：</p>
<ul>
    <li>明确定义为NULL类型的变量</li>
    <?php
    $n = null;
    var_dump($n);
    ?>
    <li>一个空变量，未初始化值</li>
    <?php
    //var_dump($n1);
    ?>
    <li>使用函数unset()将变量销毁掉</li>
    <?php
    /* unset($n);
     var_dump($n);*/
    ?>
</ul>
<p>与NULLL类型相关的两个函数</p>
<ul>
    <li>empty()可以向括号中间传入一个变量。这个变量的值如果为false或者为null的话，返回true。</li>
    <?php
    var_dump(empty($n));
    ?>
    <li>isset()可以向括号中间传入一个或者多个变量，变量与变量间用逗号分开。只要有有一个变量为null，则返回false。否则，则返回true。</li>
    <?php
    var_dump(isset($n));
    ?>
</ul>

<p>php数据类型之数组</p>
</body>
</html>
