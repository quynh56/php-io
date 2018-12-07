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
    <?php
//truyền tham số
   /* function checkNumber($value){
        echo $value ."<br>";
        if($value%2 == 0){
            return true;
        } else{
            return false;
        }
    }
    $result = checkNumber(20);
    if($result == true){
        echo "số chẵn";
    } else{
        echo "số lẻ";
    }*/
    function createBox($content,$width = 150, $height = 50){
        $result = '<div style="width:'.$width.'px; height:'.$height.'px;">';
        $result .= ' <p> '.$content.' <span>(200x50)</span></p>';
        $result .= '</div>';
        return $result;
    }
    $boxA = createBox("Box A",500,200);
    $boxB = createBox("Box B");
    echo $boxA . $boxB;
    ?>
</div>
</body>
</html>