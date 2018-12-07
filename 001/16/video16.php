
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../10/style.css">
</head>
<body>
<div class="content5">
    <?php
    $money = 0;
    if(isset($_POST["money"])) $money = $_POST["money"];
    ?>
    <div class="info">
        <img src="../10/image/h1.jpg" >
        <h1>Mô phỏng máy ATM</h1>
        <form action="#" method="post">
            <p>Vui lòng nhập vào số tiền mà quý khách muốn thực hiện giao dịch</p>
            <input type="text" name="money" value="<?php echo number_format($money); ?>" />
            <input type="submit" value="Rút tiền">
        </form>
    </div>
    <div class="clr"></div>
    <div class="result">
        <div class="normal">
            <p class="col1">Mệnh giá</p>
            <p class="col2">Số lượng</p>
            <p class="col3">Thành tiền</p>
        </div>
        <div class="clr"></div>
        <?php
        define("ONE", 1000);
        define("TWO", 2000);
        define("FIVE", 5000);
        define("ONE_0", 10000);
        define("TWO_0", 20000);
        define("FIVE_0", 50000);
        define("ONE_00", 100000);
        define("TWO_00", 200000);
        define("FIVE_00", 500000);

        $five00 = 0;
        $two00 = 0;
        $one00 =0;
        $five0 = 0;
        $two0 = 0;
        $one0 = 0;
        $five = 0;
        $two = 0;
        $one = 0;

        $flagShow =false;
        if(is_numeric($money) && $money > 1000){
            $flagShow =true;
            while($money >= FIVE_00){
                $five00+=1;
                $money = $money - FIVE_00;
            }
        while($money >= TWO_00) {
            $two00+=1;
            $money = $money - TWO_00;
        }
            while($money >= ONE_00) {
                $one00 += 1;
                $money = $money - ONE_00;
            }
            while($money >= FIVE_0){
                $five0+=1;
                $money = $money - FIVE_0;
            }
            while($money >= TWO_0) {
                $two0+=1;
                $money = $money - TWO_0;
            }
            while($money >= ONE_0) {
                $one0 += 1;
                $money = $money - ONE_0;
            }
            while($money >= FIVE){
                $five+=1;
                $money = $money - FIVE;
            }
            while($money >= TWO) {
                $two+=1;
                $money = $money - TWO;
            }
            while($money >= ONE) {
                $one+= 1;
                $money = $money - ONE;
            }




       $total = FIVE_00 * $five00 + TWO_00 * $two00 + ONE_00 * $one00 + FIVE_0 * $five0 + TWO_0 * $two0 + ONE_0 * $one0 + FIVE * $five + TWO * $two + ONE * $one;
        }
        ?>
        <?php
        if($five00 > 0){
            echo '<div class="normal">
            <p class="col1">'.number_format(FIVE_00).'</p>
            <p class="col2">'.$five00.'</p>
            <p class="col3">'.number_format(FIVE_00 * $five00) .'</p>
        </div>
        <div class="clr"></div>';
        }
        if($two00 > 0){
        echo '<div class="normal">
            <p class="col1">'.number_format(TWO_00).'</p>
            <p class="col2">'.$two00.'</p>
            <p class="col3">'.number_format(TWO_00 * $two00) .'</p>
        </div>
        <div class="clr"></div>';
        }
        if($one00 > 0){
            echo '<div class="normal">
            <p class="col1">'.number_format(ONE_00).'</p>
            <p class="col2">'.$one00.'</p>
            <p class="col3">'.number_format(ONE_00 * $one00) .'</p>
        </div>
        <div class="clr"></div>';
        }
        if($five0 > 0){
            echo '<div class="normal">
            <p class="col1">'.number_format(FIVE_0).'</p>
            <p class="col2">'.$five0.'</p>
            <p class="col3">'.number_format(FIVE_0 * $five0) .'</p>
        </div>
        <div class="clr"></div>';
        }
        if($two0 > 0){
            echo '<div class="normal">
            <p class="col1">'.number_format(TWO_0).'</p>
            <p class="col2">'.$two0.'</p>
            <p class="col3">'.number_format(TWO_0 * $two0) .'</p>
        </div>
        <div class="clr"></div>';
        }
        if($one0 > 0){
            echo '<div class="normal">
            <p class="col1">'.number_format(ONE_0).'</p>
            <p class="col2">'.$one0.'</p>
            <p class="col3">'.number_format(ONE_0 * $one0) .'</p>
        </div>
        <div class="clr"></div>';
        }
        if($five > 0){
            echo '<div class="normal">
            <p class="col1">'.number_format(FIVE).'</p>
            <p class="col2">'.$five.'</p>
            <p class="col3">'.number_format(FIVE * $five) .'</p>
        </div>
        <div class="clr"></div>';
        }
        if($two > 0){
            echo '<div class="normal">
            <p class="col1">'.number_format(TWO).'</p>
            <p class="col2">'.$two.'</p>
            <p class="col3">'.number_format(TWO * $two) .'</p>
        </div>
        <div class="clr"></div>';
        }
        if($one > 0){
            echo '<div class="normal">
            <p class="col1">'.number_format(ONE).'</p>
            <p class="col2">'.$one.'</p>
            <p class="col3">'.number_format(ONE * $one) .'</p>
        </div>
        <div class="clr"></div>';
        }




       if($flagShow == true){
        echo '<p class="total">Tổng tiền: '.number_format($total).'</p>';
        }

        ?>

    </div>
</div>
</body>
</html>
