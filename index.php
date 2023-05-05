<?php include_once "/functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="functions.php" method="GET">
        <h1>STRONG PASSWORD GENERATOR</h1>
        <h2>>Inserire il numero di caratteri della tua futura password</h2>
        <label for="passLength"></label>
        <input id="passLength" type="text" name="passLength">

        <button type="submit">Genera</button>

   </form>
</body>
</html>