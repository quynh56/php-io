
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>may tinh dien tu</title>
    <link rel="stylesheet" href="ba6.css">
</head>
<body>
<?php
$n1 = "";
$n2 = "";
$caculate = "";
$flag =true;
if(isset($_POST["number1"])==true && isset($_POST["number2"])==true && isset($_POST["caculate"])){
    echo $n1 =$_POST["number1"];
    echo $n2 =$_POST["number2"];
    echo $caculate = $_POST["caculate"];

    if(is_numeric($n1) && is_numeric($n2)){
    switch ($caculate) {
        case "+":
            $result = $n1 + $n2;
            break;
        case "-":
            $result = $n1 - $n2;
            break;
        case "/":
        case":":
            $result = $n1 / $n2;
            break;
        case "*":
        case "x":
            $result = $n1 * $n2;
            break;
        case "%":
            $result = $n1 % $n2;
            break;

        default:
            $result = $n1 + $n2;
            $caculate = "+";
            break;
    }
}else{
        $result = "khong thuc hien duoc";
        $flag =false;
    }
}
?>
<div class="content">
    <h1>mo phong  may tinh dien tu</h1>
    <form action="#" method ="post" name="main-form">
        <div class="row">
            <span>so thu nhat</span>
            <input type="text" name="number1" value="<?php echo $n1;?>">
        </div>
        <div class="row">
            <span>phep toan</span>
            <input type="text" name="caculate" value="<?php echo $caculate;?>">
        </div>
        <div class="row">
            <span>so thu hai</span>
            <input type="text" name="number2" value="<?php echo $n2;?>">
        </div>
        <div class="row">
            <input type="submit" name="submit" value="xem ket qua">
        </div>
        <div class="row">
            <p><?php
                if($flag==true){
                    echo "ket qua" . $n1 . " " . $caculate . " " .$n2 . "=" .$result;
                }
                else{
                    echo $result;
                }
                ?>

            </p>
        </div>
    </form>
</div>
</body>
</html>