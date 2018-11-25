<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="content2">
    <h1>vẽ tam giác</h1>
    <ul>
        <li><a href="012.php?type=1">tam giac vuong</a></li>
        <li><a href="012.php?type=2">tam giac ngươc</a></li>
        <li><a href="012.php?type=3">tam giac deu</a></li>
    </ul>
    <div class="result">
        <?php
       $result = "";
        if(isset($_GET["type"])){
             $type =$_GET["type"];
             switch ($type) {
                 case 1:
                     /*
                      *   i=1
                      **  i =2
                      *** i=3
                      ****
                      */
                     $i = 1;
                     while ($i <= 6) {
                         $result .= str_repeat("*", $i) ."<br>";
                         $i++;

                     }
                     break;
                 case 2:
                     $i =6;
                     while ($i >= 1 )
                     {
                         $result .= str_repeat("*",$i) ."<br>";
                         $i--;
                     }
                     break;
                 case 3:
                     $n=6;
                     $i=1;
                     while($i <= $n)
                     {
                         $space     = str_repeat("&nbsp;&nbsp;", $n - $i);
                         $character = str_repeat("*", 2*$i-1);
                         $result .= $space . $character ."<br>";
                       $i++;
                     }
                     break;
             }
        }
        echo $result;
        ?>
    </div>
</div>
</body>
</html>