<?php
//1. POSTデータ取得
//$name = filter_input( INPUT_GET, ","name" ); //こういうのもあるよ
//$email = filter_input( INPUT_POST, "email" ); //こういうのもあるよ
$book_name = $_POST["book_name"];
$author = $_POST["author"];
$url = $_POST["url"];
$comment = $_POST["comment"];
$recommended = $_POST["recommended"];

//2. DB接続します
include "funcs.php";
$pdo = db_con();


//３．データ登録SQL作成
$sql = " INSERT INTO gs_bm_table (id,book_name,author,url,comment,recommended,indate )
VALUES (NULL,:a1,:a2,:a3,:a4,:a5,sysdate() )";

$stmt = $pdo->prepare($sql);

$stmt->bindValue(':a1', $book_name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $author, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $url, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a4', $comment, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a5', $recommended, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  sqlError($stmt);
}else{
  //５．index.phpへリダイレクト
  header("Location: bm_insert_view.php");
  exit;

}
?>
