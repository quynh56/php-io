<?php
//cach 1:
//require ("child.php") ;
//require "child.php";

//cach 2:

/*
 * nếu file trong require bị lỗi thì tất cả chương trình đều không chạy đcược ,
 * require ngường chương trình khi bị lỗi
 * nếu fle trong include bị lỗi thì chương trình đúng vẫn cho phép chạy được hiển thị nội dung bên dưới còn chương trình sai hiển thị lỗi
 * include vẫn chạy chương trình khi bị lỗi
 * include kéo được 1 file nhiều lần trong 1 chương trình
 * include_one chỉ kéo được file được 1 lần, nếu file đó đã được kéo r thì include_once sẽ k kéo nữa
 *  */
include_once ("child.php");
include ("child.php");
include ("child.php");
echo  "parent file";