<?php
//var_dump($_POST);
//誤ってGETでアクセスされたら最初の画面に送り返す
if($_SERVER['REQUEST_METHOD'] == "GET"){
    header("location: ./gamestart.html");
    exit;
}
//POSTで送らて来た値はstringのためintに変換
//整数に変換(int)キャストでもOK
$myhand = intval($_POST["myselect"]);
//コンピューターの手は乱数で生成
$pchand = rand(0,2);

//関数定義
function showhand(int $hand):string{
  $janken_array = array("グー","チョキ","パー");
  return $janken_array[$hand];
}

function judge(int $player, int $computer):string{
  //勝敗判定を行う
  $result = ($player - $computer + 3) % 3;
  $result_array = array("引き分け","負け","勝ち");
  return $result_array[$result];
}

//判定条件分岐を使うパターン
function judge2(int $player, int $computer):string{
  $result = ($player - $computer + 3) % 3;
  $result_string = "";
  switch($result){
    case 0:
      $result_string = "引き分け";
      break;
    case 1:
      $result_string = "負け";
      break;
    default:
      $result_string = "勝ち";
  }
    return $result_string;
}
?>
<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>ジャンケンゲームVer.0</title>
  </head>
  <body>
    <div class="container">
        <h1>ジャンケンゲームVer.0</h1>
        <div class="alert alert-primary" role="alert">
            <ul>
                <li>あなたの手：<?=showhand($myhand)?></li>
                <li>コンピューターの手：<?=showhand($pchand)?></li>
                <li>勝敗：<?=judge($myhand,$pchand)?></li>
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