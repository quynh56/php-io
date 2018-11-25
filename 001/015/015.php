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
<div class="content4">
    <h1>Giải câu đố bằng vòng lặp</h1>
    <div class="question">
        <p>yêu nhau cau sấu bổ ba</p>
        <p>Gét nhau cau sấu bổ ra làm mười</p>
        <p>Mỗi người một miếng trăm người</p>
        <p>có mười bảy quả hỏi người ghét yêu</p>
        <p> hỏi có bao nhiêu người yêu nhay, ghét nhau?</p>
    </div>
    <div class="answer">
        <p> Đáp án</p>
        <ul>
            <?php
            // số người yêu nhau x, số người ghét nhau y
            //3x+10y =100 (y<=9,x<=30)
            //x+y =17
            //x=1 y chạy:3x +10y && x + y=17
           // for($x= 1; $x <=30; $x++) {
            for($x= 1; $x <=16; $x++) {
                for($y = 1; $y <= 9; $y++){
                    if(3*$x +10*$y ==100 && $x +$y ==17){
                        echo"<li> $x người yêu nhau, $y người ghét nhau";
                    }
                }
                }
            ?>
          <!--  <li>10 người yêu nhau, 7 người ghét nhau</li>
            <li>10 người yêu nhau, 7 người ghét nhau</li>-->
        </ul>
    </div>
</div>
</body>
</html>