<?php
require_once('./Student.php');
//インスタンス化
$s1 = new Student();
$s1->num = 1;
$s1->name = "阿部　健一郎";
$s1->livein = "大阪市";
$s1->gender = "男性";

$s2 = new Student();
$s2->num = 2;
$s2->name = "石田　瞳";
$s2->livein = "吹田市";
$s2->gender = "女性";

$s3 = new Student();
$s3->num = 3;
$s3->name = "加藤　千賀子";
$s3->livein = "奈良市";
$s3->gender = "女性";

$s4 = new Student();
$s4->num = 4;
$s4->name = "島田　興蔵";
$s4->livein = "高槻市";
$s4->gender = "男性";

$students = array($s1,$s2,$s3,$s4);
?>
<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>連想配列でリストを生成</title>
  </head>
  <body>
        <div class="container">
            <h1>連想配列でリストを生成</h1>
            <table class="table">
                <tr>
                    <th>番号</th>
                    <th>氏名</th>
                    <th>住まい</th>
                    <th>性別</th>
                </tr>
                <?php foreach($students as $student):?>
                <tr>
                    <td><?=$student->num ?></td>
                    <td><?=$student->name ?></td>
                    <td><?=$student->livein ?></td>
                    <td><?=$student->gender ?></td>
                </tr>
                <?php endforeach ?>
            </table>
        </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>