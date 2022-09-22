<?php
    require "vendor/autoload.php";
    use App\Fireball\Http\Controller;

    $input = (new Controller());
    var_dump($input);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER["SELF_PHP"] ?>" method="post">
      <input type="text" name="username" id="">
      <input type="submit" value="send">
    </form>
</body>
</html>
