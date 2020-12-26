<?php
// ファイルを開く
$openFile = fopen('./data/data.csv','r');
// ファイル内容を1行ずつ読み込んで出力

echo "<table>
        <tr>
            <th>入力日時</th>
            <th>名前</th>
            <th>メールアドレス</th>
            <th>趣味</th>
            <th>出身</th>
            <th>職業</th>
        </tr>";

        while($line = fgetcsv($openFile)) {
            echo "<tr>";
            for ($i=0;$i<count($line);$i++) {
                echo "<td>" . $line[$i] . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";

// ファイルを閉じる 一番上から1行読み込む→fgets nl2br=関数（改行）
fclose($openFile);


// while($line = fgets($openFile)){
//  echo nl2br($line);
// }
// 
