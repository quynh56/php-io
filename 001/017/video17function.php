<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="content">
    <?php
    //hàm
    function createBox(){
        $value = '<div style="width:200px; height:50px;">';
        $value .= ' <p>Box A <span>(200x50)</span></p>';
        $value .= '</div>';
        return $value;
    }
    //createBox();
    $result = createBox();
    echo $result;
?>
    <?php
    function checkNumber(){
        $value = 13;
        if($value%2 == 0){
            return true;
        } else{
            return false;
        }
    }
    $result = checkNumber();
    if($result == true){
        echo "so chan";
    } else{
        echo "so le";
    }
    ?>
<?php
    //tạo box trong php
   /* echo '<div style="width:200px; height:50px;">';
    echo ' <p>Box A <span>(200x50)</span></p>';
    echo'</div>';
    echo '<div style="width:300px; height:150px;">';
    echo ' <p>Box B <span>(300x150)</span></p>';
    echo'</div>';*/

    ?>
    <!-- <div style="width:200px; height:50px;">
        <p>Box A <span>(200x50)</span></p>
    </div>
   <div style="width:200px; height:100px;">
        <p>Box B <span>(300x100)</span></p>
    </div>
    <div style="width:200px; height:50px;">
        <p>Box A <span>(300x200)</span></p>
    </div>-->
</div>
</body>
</html>
