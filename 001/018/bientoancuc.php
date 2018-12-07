<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../017/style.css">
</head>
<body>
<div class="content">
    <!--phân biệt biến toàn cục và biến cục bộ-->
    <?php
    $value ="ABC";
    function createBox($content,$width = 150, $height = 50){
        $result = '<div style="width:'.$width.'px; height:'.$height.'px;">';
        $result .= ' <p> '.$content.' <span>(200x50)</span></p>';
        $result .= '</div>';
        //c1
        //muốn truy cập biến toàn cục trong hàm phải dùng global
       /* global $value;
        echo $value."<br>";*/
       //cách 2
        echo $GLOBALS["value"];
        return $result;
    }
    $boxA = createBox("Box A");
    echo $boxA;
    ?>
    <?php
    echo $value;
    ?>
</div>
</body>
</html>