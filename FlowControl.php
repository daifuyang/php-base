<html>
<head>
    <title>php流程分支</title>
    <meta charset="utf-8">
</head>
<body>
<?php
//单行写法
$highScore = true;
if ($highScore)
    echo "老师表扬";
else
    echo "回家挨打";

//多行写法
$highScore = true;
if ($highScore) {
    echo "老师表扬</br>";
    echo "家长开心";
} else {
    echo "回家挨打";
}
?>
</body>
</html>

