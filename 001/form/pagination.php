<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        #tnt_pagination{
            display:inline-block;
            text-align:left;
            height:22px;
            line-height:21px;
            clear:both;
            padding-top:3px;
            font-family:arial,Helvetica,sans-serif;
            font-size:12px;
            font-weight:normal;
        }
        #tnt_pagination a:link,#tnt_pagination a:visited{
            padding:7px;
            padding-top:2px;
            padding-bottom:2px;
            border: 1px solid #ebebeb;
            margin-left:10px;
            text-decoration:none;
            background-color:#f5f5f5;
            color:#0072bc;
            width:22px;
            font-weight:normal;
        }
        #tnt_pagination a:hover{
            background:#ddeeff;
            border:1px solid #bbddff;
            color:#0072bc;
        }
        #tnt_pagination .active_tnt_link{
            padding:7px;
            padding-top:2px;
            padding-bottom:2px;
            border:1px solid #bbddff;
            margin-left:10px;
            text-decoration:none;
            background:#f5f5f5;
            color: #d7d7d7;
            cursor: default;
        }
        #tnt_pagination .disabled_tnt_pagination{
            padding: 2px 6px;
            background: #f5f5f5;
            border: 1px solid #ebebeb;
            color:#d7d7d7;


        }
        .content{
            margin:10px auto;
            width: 800px;
            border:1px solid #dfd;
            text-align:center;
            padding:20px;
        }
    </style>
</head>
<body>
<div class="content">
<div id="tnt_pagination">
    <span class="disabled_tnt_pagination">Prew</span>
    <a href="pagination.php?page=1">1</a>
    <a href="pagination.php?page=2">2</a>
    <a href="pagination.php?page=3">3</a>
    <!--<span class="active_tnt_link">4</span>-->
    <a href="pagination.php?page=4">4</a>
    <a href="pagination.php?page=5">5</a>
    <a href="pagination.php?page=6">6</a>
    <a href="pagination.php?page=7">7</a>
    <a href="pagination.php?page=8">8</a>
    <a href="pagination.php?page=9">9</a>
    <a href="pagination.php?page=10">10</a>
    <a href="#forward">Next</a>
</div>
    <?php
    $page = (isset($_GET["page"])==true) ? $_GET["page"] : 0;
    ?>
    <p class="result">bạn đang ở trang thứ <?php echo $page; ?></p>
</div>
</body>
</html>