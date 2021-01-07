# PHP基礎 07
## リクエストを跨いだデータの受け渡し(1)
ユーザー登録プログラムを作成します。
### ファイル構成
- 登録ページ(signup.php)
- 確認ページ(confirm.php)
- 完了ページ(done.php)
を作成します。
## 登録項目
- 名前(文字列)
- 年齢(数字)
- 性別(文字列)
## 作成手順
1. テンプレート(HTML)部分の作成  
    1. 登録ページを作る(signup.php)  
        1. 氏名の入力(1行テキスト)
        1. 年齢の入力(1行テキスト)
        1. 性別の入力(ラジオボタンによる選択)
    1. 確認画面を作る(confirm.php)
        1. 登録ページで入力された項目の表示
    1. 登録完了画面を作成(done.php)
        1. 登録は行わず、完了したと表示
1. PHPプログラムの作成  
    1. 画面遷移を完了する。ボタンをクリックすると画面が遷移していく
    1. データ処理を加えて行く
作成例はSAMPLE04にあります。(10月29日現在)

## ヒント
第一段階では　&lt;input type="hidden"&gt;　を使用しリクエストを跨ぐデータ処理を行う。(POST)  
入力値は正しいものとしエラー制御(バリデーション)は考慮しない。  
再入力のための戻るリンクは表示しない。  
https://github.com/takujiozaki/PHP_BASIC/tree/main/SAMPLE04  

### htmlspecialchars関数
スクリプトインサーション、クロスサイトスクリプティングについて確認  

## リクエストを跨いだデータの受け渡し(2)
### sessionの利用
```
//セッションスタート
session_start();

//sessionに登録
$_SESSION['name'] = $name;
$_SESSION['age'] = $age;
$_SESSION['gender'] = $gender;
```
### 戻るリンクを考える
入力の修正のための戻るリンクを考える  
セッションとリクエストメソッドの組み合わせを考える  
https://github.com/takujiozaki/PHP_BASIC/tree/main/SAMPLE05  

## リクエストを跨いだデータの受け渡し(3)
### 入力制御(バリデーション)
https://github.com/takujiozaki/PHP_BASIC/tree/main/SAMPLE06   
