<?php
    $account = $_POST["uaccount"];
    $password = $_POST["upasswd"];
    $mail = $_POST["umail"];
    $tel = $_POST["utel"];

    echo "<h2>註冊資料</h2>";
    echo "<b>帳號：</b> ".$account."<br>";
    echo "<b>密碼：</b> ".$password."<br>";
    echo "<b>Email：</b> ".$mail."<br>";
    echo "<b>電話：</b> ".$tel."<br>";

?>