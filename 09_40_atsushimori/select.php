<?php
session_start();
include "funcs.php";
sessChk();

$pdo = db_con();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_an_table");
$status = $stmt->execute();

//３．データ表示
$view = "";
if ($status == false) {
    sqlError($stmt);
} else {
    //Selectデータの数だけ自動でループしてくれる
    //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $view .= '<p>';


        if($_SESSION["kanri_flg"]=="1"){
            $view .= '<a href="detail.php?id=' . $result["id"] . '">';
            $view .= $result["name"] . "," . $result["email"] . "<br>";
            $view .= '</a>';
        }else{
            $view .= $result["name"] . "," . $result["email"]."<br>" ;   
        }


        if($_SESSION["kanri_flg"]=="1"){
            $view .= '<a href="delete.php?id=' . $result["id"] . '">';
            $view .= "[削除]";
            $view .= '</a>';
        }


        $view .= '</p>';

    }

}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>フリーアンケート表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <?php echo $_SESSION["name"]; ?>さん
      <a class="navbar-brand" href="bm_select.php">BMデータ一覧画面へ</a>
      <a class="navbar-brand" href="logout.php">ログアウト</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron"><?=$view?></div>
</div>
<!-- Main[End] -->

</body>
</html>
