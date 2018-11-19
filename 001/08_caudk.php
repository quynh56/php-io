
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>lay chom sao</title>
    <link rel="stylesheet" href="ba6.css">
</head>
<body>
<?php
$day = "";
$mon = "";

?>
<div class="content">
    <h1>lay chom sao</h1>
    <form action="#" method ="post" name="main-form">
        <div class="row">
            <span>ngay sinh</span>
            <input type="text" name="number1" value="<?php echo $day;?>">
        </div>
        <div class="row">
            <span>thang sinh</span>
            <input type="text" name="caculate" value="<?php echo $mon;?>">
        </div>
        <div class="row">
            <input type="submit" name="submit" value="lay chom sao">
        </div>
    </form>
    <div class="result">
        <img src="image/bd.jpg" alt="cung bạch dương">
        <p>cung bạch dương <span>()Aries 22/03- 20/04</span></p>
    </div>
</div>
</body>
</html>