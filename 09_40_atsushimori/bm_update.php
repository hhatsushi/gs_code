<?php
//1.POSTでParamを取得
$book_name = $_POST["book_name"];
$author = $_POST["author"];
$url = $_POST["url"];
$comment = $_POST["comment"];
$recommended = $_POST["recommended"];
$id = $_POST["id"];

//2. DB接続します
include "funcs.php";
$pdo = db_con();

//３．データ登録SQL作成
// 
$sql = "UPDATE gs_bm_table SET book_name = :book_name, author = :author,url =:url,comment =:comment,recommended =:recommended WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':book_name',   $book_name,   PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':author',  $author,  PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':url', $url, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);
$stmt->bindValue(':recommended', $recommended, PDO::PARAM_STR);
$stmt->bindValue(':id',     $id,     PDO::PARAM_INT);

$status = $stmt->execute();

//４．データ登録処理後
if ($status == false) {
    sqlError($stmt);
} else {
    //５．index.phpへリダイレクト
    header("Location: bm_select.php");
    exit;
}

//2.DB接続など


//3.UPDATE gs_an_table SET ....; で更新(bindValue)
//　基本的にinsert.phpの処理の流れです。




?>