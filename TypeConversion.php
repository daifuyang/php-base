<html>
    <head>
        <meta charset="utf-8">
        <title>类型转换</title>
    </head>

    <h2>布尔值的自动类型转换</h2>
    <p>int = 0,float=0.0,str='',str='0' boolean=false,array(),未声明的资源,unset的变量转为bool都为假</p>

    <?php
        $a = 0;
        $b= 0.0;
        $c = '';
        $d = '0';
        $f = array();
        $g = false;
        settype($f,"boolean");
        var_dump(boolval($a),boolval($b),(bool)$c,(bool)$d,(bool)$e,$f);
    ?>

    <p>总结：类型强制转换的三种方式</p>
    <ul>
        <li>[type]val</li>
        <p>使用函数[type]val进行类型转换。例如：intval(),floatval(),strval()等</p>
        <li>(type)[variable]</li>
        <p>直接改变变量类型进行强转</p>
        <li>使用settype函数</li>
        <p>settype(variable,type);传入变量名字，需要修改的变量类型</p>
    </ul>

    <p>实验：</p>
    <?php
        $a= 123.45;
        $b = '';
        $c=1234567891234567891234.11111111111111111111;
        $d = null;
        $e= 123.0;

        $f = '123aaaaaaaaaaa';
        $g = 12;

        $h = $f+$g;

        var_dump(intval($a),intval($b),intval($c),(string)$d,(string)$e,(string)$a,$h);
    ?>
    <p>$目标变量 = (类型)$操作变量 只会改变目标变量的类型，不会改变原变量的类型，Settype是改变原值</p>

</html>