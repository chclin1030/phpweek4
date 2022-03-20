<html>
<head>
    <title>墾丁三日遊註冊</title>
    <link rel="icon" href="/img/sunny.png" type="image/x-icon" />
</head>
<body>
    <?php
        echo "<body bgcolor='#faf0e6'>"
    ?>
 
    <h2>註冊</h2>
    <form action="register_material.php" method="post">
        <p>帳號： <input type="text" name="uaccount" placeholder="帳號"></p>
        <p>密碼： <input type="password" name="upasswd" placeholder="密碼"></p> 
        <p>Email：  <input type="mail" name="umail" placeholder="12345@gmail.com" ></p>
        <p>電話：  <input type="text" name="utel" placeholder="0912345678" ></p>

        <br><button input type="submit">註冊</button>
    </form>

</body>
</html>