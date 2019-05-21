<html>
    <head>
        <meta charset="utf-8">
        <title>常量定义</title>
    </head>
<body>
    <h2>常量的定义</h2>
    <ul>
        <li>定义方式</li>
        <p>define('name','value')</p>
    </ul>
    <h3 style="color:#ff0000">注意：</h3>
    <ul>
        <li>常量值只能为标量类型</li>
        <li>在字符串中调用常量时，必须写在引号后面</li>
        <li>常量名可以小写，但通常大写</li>
        <li>常量名可以不加引号，但通常加上引号</li>
        <li>常量名建议只用英文和下划线</li>
    </ul>
    <h3>开始实验：</h3>
    <?php
        define("NAME","戴富阳");
        echo NAME;
    ?>
</body>
</html>