<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/jupiter.css">
    <title>Jupiter</title>
</head>
<body>
    <main class="welcome">
       <div class="content">
           <h1>{{project}}</h1>
       </div> 
    </main>

    <form action="/register" method="POST">
        <input type="text" name="user" id="">
        <input type="submit" value="Send">
    </form>
</body>
</html>
