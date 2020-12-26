

<?php
// POSTを受け取る
var_dump($_POST);

// POSTの場合はパスワードも送ってみる。

$name=$_POST['name'];
$mail=$_POST['mail'];
$hobby=$_POST['hobby'];
$birthplace=$_POST['birthplace'];
$Profession=$_POST['Profession'];

function h($str)
{
   return htmlspecialchars($str,ENT_QUOTES);
}

?>

<html>

<head>
    <meta charset="utf-8">
    <title>POST（受信）</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    </p> お名前：<?= h($name)?></p> 
    </p>  EMAIL：<?= h($mail)?></p> 
    </p>  趣味：<?= h($hobby)?></p> 
    </p>  出身地：<?= h($birthplace)?></p> 
    </p>  職業：<?= h($Profession)?></p> 

    <ul>
        <li><a href="index.php">index.php</a></li>
    </ul>
</body>

</html>
