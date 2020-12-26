<?php
//フォーム受取り
//name変数とmail変数にフォームの中身に入れる
//$timeに加えて、フォームからくる、名前とメールの内容をdata.txtに記録する。

var_dump($_POST);

$name=$_POST['name'];
$mail=$_POST['mail'];
$hobby=$_POST['hobby'];
$birthplace=$_POST['birthplace'];
$Profession=$_POST['Profession'];


$time=date('Y-m-d H:i:s');

$a=$time.",".$name.",".$mail.",".$hobby.",".$birthplace.",".$Profession.",";

echo $a;

$first_name = 'Srinivasa';
$last_name = 'Ramanujan';
$name = "$first_name $last_name";
print $name;
print strlen($name);

$n = 1; $p = 2;
print "$n, $p\n";
$n++; $p *= 2;
print "$n, $p\n";
$n++; $p *= 2;
print "$n, $p\n";
$n++; $p *= 2;
print "$n, $p\n";
$n++; $p *= 2;
print "$n, $p\n";

$f = -50;
while ($f <= 50) {
$c = ($f - 32) * (5/9);
printf("%d degrees F = %d degrees C\n", $f, $c);
$f += 5;
}


// ファイルに書き込み


$file=fopen('./data/data.csv', 'a');
fwrite($file,$a."\n");
fclose($file);

// 1行ごとにの場合は、write($file, $time."\n");

?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <p>data/data.txt を確認しましょう！</p>

    <ul>
        <li><a href="input.php">戻る</a></li>
    </ul>
    <ul>
        <li><a href="read.php">リスト</a></li>
    </ul>
</body>

</html>
