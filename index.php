<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>リンク一覧</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            text-align: center;
        }
        h1 {
            margin: 20px auto;
        }
        li {
            list-style: none;
            margin-top: 8px;
        }
        a {
            color: blue;
        }
    </style>
</head>
<body>
    <h1>リンク一覧</h1>
    <hr>
    <ul>
        <?php
            $files = glob('./*.*');

            // 最終更新日時順にソート
            usort($files, function ($a, $b) {
                return filemtime($b) - filemtime($a);
            });

            foreach($files as $key => $value) {
                echo "<li><a href=\"" . $value . "\">" . substr($value, 2) . "</a></li>";
            }
        ?>
    </ul>
</body>
</html>