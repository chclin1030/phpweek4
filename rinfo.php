<?php
    $uname = $_POST["uname"];
    $umail = $_POST["umail"];
    $utel = $_POST["utel"];
    $ubir = $_POST["ubir"];
    $ugender = $_POST["ugender"];
    $ufood = $_POST["ufood"];
    $foods = count($ufood);
    //$foods = implode(",",$ufood);#將陣列組合起來
    $usize = $_POST["usize"];

    $ticket = $_POST["ticket"];
    
    /*$comment = $_POST["comment"];
    $comment = strip_tags($comment);
    $comment = nl2br("comment");*/



    echo "<h1>墾丁三日遊報名資料</h1>";
    echo "<b>名字：</b> ".$uname." 先生/小姐";
    echo "<p><b>Email：</b> ".$umail;
    echo "<p><b>電話：</b> ".$utel;
    echo "<p><b>生日：</b> ".$ubir;
    
    if($ugender == '1'){
        echo "<p><b>性別：</b>男生</br> ";
    }
    else if($ugender == '0'){
        echo "<p><b>性別：</b>女生</br> ";
    }
    else{
        echo "<p><b>性別：</b>雙性</br> ";
    }
    
    //echo "<p><b>食物偏好：</b> ".$foods;

    for($i = 0 ; $i < $foods ; $i++){
        echo "<p><b>飲食偏好：</b> ".$ufood[$i];
    }

    /*for($i = 0 ; $i < $foods ; $i++){
        if($i == 0){
            echo $foods[$i];
        }
        else{
            echo ",".$foods;
        }
    }*/

    echo "<p><b>衣服尺寸：</b> ";
    switch ($usize) {

        case 1:

            echo "S</br>";

            break;

        case 2:

            echo "M</br>";

            break;

        case 3:

            echo "L</br>";

            break;

        case 4:

            echo "XL</br>";

            break;

        case 5:

            echo "2XL</br>";

            break;

    }   
       
    echo "<p><b>票數：</b> ".$ticket."</br>";

    /*echo $_FILES["uphoto"]["name"]."<br/>";
    echo $_FILES["uphoto"]["tmp_name"]."<br/>";
    echo $_FILES["uphoto"]["size"]."<br/>";
    echo $_FILES["uphoto"]["type"]."<br/>";

    copy($_FILES["uphoto"]["tmp_name"],$_FILES["uphoto"]["name"]);*/


?>