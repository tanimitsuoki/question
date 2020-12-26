<html>

<head>
    <meta charset="utf-8">
    <style>
        .menu {
            background-color: #2FA6E9;
        }
    </style>

     <link rel="stylesheet" href="style1.css">

    <title>POST練習</title>
</head>

<body>
<!--  
    <div class="menu">
        <h3>menu</h3>
        <ul>
            <li>サンプルフォームに必要な情報を入れる(POST)</li>
            <li>(演習)password欄を作って受け取る。</li>
            <li><a href="index.php">index.php</a></li>
        </ul>
    </div>
    <P>※post_confirm.phpにpostで送ってください。</P>
 -->

    <P class=a>アンケートフォーム</P>
    <form action="write.php" method="post" class=b>
     <dl>
        <dt>お名前:</dt> 
        <dd><input type="text" name="name"></dd>
        <dt>EMAIL:</dt> 
        <dd><input type="text" name="mail"></dd>
        <dt>趣味:</dt> 
        <dd><input type="text" name="hobby"></dd>
        <dt>出身地:</dt> 
        <dd><input type="text" name="birthplace"></dd>
        <dt>職業:</dt> 
        <dd><input type="text" name="Profession"></dd>
            <!-- パスワード欄を追加してみる。 -->
     </dl>
     <input type="submit" value="送信">
    </form>
</body>

</html>
