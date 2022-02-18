<?php require_once 'anEvilClown.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../layout/styles.css">
    <title>Document</title>
</head>
<body>
<div>
<form method="post">
    <input class="message" type="text" name="message" placeholder="WRITE ">
    <input class="message" type="submit" name="submit" value="SEND">
</form>
<div class="result"><?= parenthesisRemoval($_POST['message']) ?></div>
</div>

</body>
</html>
