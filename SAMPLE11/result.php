<?php
require_once('./Objects.php');
//var_dump($_POST);
//誤ってGETでアクセスされたら最初の画面に送り返す
if($_SERVER['REQUEST_METHOD'] == "GET"){
    header("location: ./gamestart.html");
    exit;
}
//POSTで送らて来た値はstringのためintに変換
//整数に変換(int)キャストでもOK
//Playerオブジェクトを生成(人間用)
$palyer = new MyPlayer(intval($_POST["myselect"]));

//Playerオブジェクトを生成(PC用)
$pc = new PCPlayer();

//審判オブジェクトを生成
$judge = new Judgement($palyer,$pc);

?>
<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>ジャンケンゲーム Object</title>
  </head>
  <body>
    <div class="container">
        <h1>ジャンケンゲーム Object Version</h1>
        <div class="alert alert-primary" role="alert">
            <ul>
                <li>あなたの手：<?=$palyer->showHand()?></li>
                <li>コンピューターの手：<?=$pc->showHand()?></li>
                <li>勝敗：<?=$judge->judge()?></li>
            </ul>
        </div>
        <p><a href="./game_start.html" class="btn btn-primary">もう一回勝負する</a></p>
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