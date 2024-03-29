<?php
try{
include_once("../database/connection.php");
}catch(Exception $e){
    echo "DB INIT ERROR";
    exit();
}

/*
 * @param string $username
 * @param string $password
 * @return bool result
 * @todo email
 * */
function signup($username, $password, $email, $role){
    if(!preg_match("/^[a-zA-Z0-9_]+$/",$username)){
        echo "現在ユーザー名に使用出来る文字列はa-zA-Z0-9です。";
        return false;
    }

    if($username == null || $password == null){
        return false;
    }
    if(strlen($username) > 30){
        echo "ユーザー名が長すぎます。";
        return false;
    }

    $con = new DBC();
    //is there username
    try{
        $rec = $con->prepare_execute("SELECT uid FROM users WHERE username=? ", array($username))[0];
    }catch(Exception $e){
        echo "DB SELECT ERROR";
        exit();
    }
    if ($rec["uid"] != null){
        echo "すでに同名のユーザーがいます。";
        return false; 
    }
    //insert
    try{
        $con->prepare_execute("INSERT INTO users (uid, username, password_hash, role) VALUES (?, ?, ?, ?)", array(md5(rand()), $username, $con->sha256hash($password),$role));
    }catch(Exception $e){
        echo "エラーが発生しました。";
        return false;
    }
    return true;
}

    if(isset($_POST["username"]) && isset($_POST["password"])){
	$username = htmlspecialchars($_POST["username"], ENT_QUOTES);
        if(signup($username, $_POST["password"], "", "user")){
	    mkdir("./users/".$username);
	    copy("../template/userpage/template.php","users/".$username."/index.php");
        echo "登録が完了しました。<br /><a href=\"signin.php\">サインイン</a>";
        }
    }
?>
