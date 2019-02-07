<?php

$id =$_GET["id"];
// echo $id;
// --------------------------------
// 以下、select.phpをコピーしてきました
// --------------------------------
include "funcs.php";
$pdo = db_con();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table where id =:id");
$stmt->bindValue(":id",$id,PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
$view = "";
if ($status == false) {
    sqlError($stmt);
} else {
    //Selectデータの数だけ自動でループしてくれる
    //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php



$row = $stmt->fetch();


}
// ----------------------------------
// ----------------------------------
//index.php（登録フォームの画面ソースコードを全コピーして、このファイルをまるっと上書き保存）
?>



<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>詳細データ</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><h1>詳細データ</h1></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->
<!-- Main[Start] -->

  <div>
   <fieldset>
    <legend></legend>
    <label>書籍名：<?php echo $row["book_name"]; ?></label><br>
     <label>著者名：<?php echo $row["author"]; ?></label><br>
     <label>url：<?php echo $row["url"]; ?></label><br>
     <label><?php echo $row["comment"]; ?></label><br>
     <label>オススメ度：<?php echo $row["recommended"]; ?></label><br>
     <input type ="hidden" name ="id" value ="<?php echo $id; ?>">
    </fieldset>
  </div>

<!-- Main[End] -->



</body>
</html>
