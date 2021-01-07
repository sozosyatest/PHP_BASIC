<?php
//ログインセッションをセット
function set_auth_session(string $authuser):void{
    @session_start();
    $_SESSION['auth_user'] = $authuser;
}

//ログインセッションを確認
function verify_login():bool{
    @session_start();
    return (isset($_SESSION['auth_user']) && !empty($_SESSION['auth_user'])) ? true : false;
}

//ログインセッションを破棄
function remove_auth_session():void{
    @session_start();
    if(isset($_SESSION['auth_user'])){
        unset($_SESSION['auth_user']);
    }
}

//login済ならユーザーを取得
function get_login_user(){
    @session_start();
    return (isset($_SESSION['auth_user'])) ? $_SESSION['auth_user'] : null;
}

//エラー処理を取得
function get_error_msgs():array{
    @session_start();
    $err_msgs = array();
    if(isset($_SESSION['err_msgs'])){
        $err_msgs = $_SESSION['err_msgs'];
        unset($_SESSION['err_msgs']);
    }
    return $err_msgs;
}

//セッションから登録用user情報を取得
function get_userinfo(){
    @session_start();
    return (isset($_SESSION['user_info'])) ? $_SESSION['user_info'] : null;
}

//リダイレクト処理
function send_redirect(string $url){
    header('location:'.$url);
    exit();
}



