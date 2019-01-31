<?php
$id =$_GET["id"];
// echo $id;
// --------------------------------
// 以下、select.phpをコピーしてきました
// --------------------------------
include "funcs.php";
$pdo = db_con();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_user_table where id =:id");
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
  <title>管理ユーザー情報更新</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="user_select.php">データ一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="user_update.php">
  <div class="jumbotron">
   <fieldset>
    <legend>更新</legend>
     <label>名前：<input type="text" name="name" value="<?php echo $row["name"]; ?>"></label><br>
     <label>ログインID：<input type="text" name="lid" value="<?php echo $row["lid"]; ?>"></label><br>
     <label>ログインパスワード：<input type="text" name="lpw" value="<?php echo $row["lpw"]; ?>"></label><br>
     <label>管理者区分：<input type="text" name="kanri_flg" value="<?php echo $row["kanri_flg"]; ?>"></label><br>
     <input type ="hidden" name ="id" value ="<?php echo $id; ?>">
     <input type="submit" value="登録">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
