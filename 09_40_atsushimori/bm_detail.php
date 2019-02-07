<?php
session_start();
include "funcs.php";
sessChk();

$pdo = db_con();


$id =$_GET["id"];
// echo $id;
// --------------------------------
// 以下、select.phpをコピーしてきました
// --------------------------------


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
    // while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
    //     $view .= '<p>';
    //     $view .= '<a href="detail.php?id='.$result["id"].'">';
    //     $view .= $result["name"] . "," . $result["email"] . "<br>";
    //     $view .= '</a>';
    //     $view .= '</p>';
    // }
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
  <title>データ更新</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="bm_select.php">更新データ</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="bm_update.php">
  <div class="jumbotron">
   <fieldset>
    <legend>更新</legend>
    <label>書籍名：<input type="text" name="book_name"value="<?php echo $row["book_name"]; ?>"></label><br>
     <label>著者名：<input type="text" name="author"value="<?php echo $row["author"]; ?>"></label><br>
     <label>url：<input type="text" name="url"value="<?php echo $row["url"]; ?>"></label><br>
     <label><textArea name="comment" rows="4" cols="40"><?php echo $row["comment"]; ?></textArea></label><br>
     <label>オススメ度★：<input type="text" name="recommended"value="<?php echo $row["recommended"]; ?>"></label><br>
     <input type ="hidden" name ="id" value ="<?php echo $id; ?>">
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
