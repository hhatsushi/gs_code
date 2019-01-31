<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>USER登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="user_select.php">管理ユーザー登録画面</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="user_insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>USER登録</legend>
     <label>管理者名：<input type="text" name="name"></label><br>
     <label>ログインID：<input type="text" name="lid"></label><br>
     <label>ログインパスワード：<input type="text" name="lpw"></label><br> 
     <label>管理区分（０＝管理者,1＝S管理者）：<input type="text" name="kanri_flg"></label><br> 
     <input type="submit" value="登録">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
