<?php
$legth = $_GET['passLegth'];

function password_generator($passLength){
    $pass_alphaNum=[];
    $pass_numbers=["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];
    $pass_alphabet_big=["A", "B", "C", "D", "E", "F", "G", "H", "I", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
    $pass_alphabet_small=["a", "b", "c", "d", "e", "f", "g", "h", "i", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
    $pass_symbols=["!", "£", "$", "%", "&", "/", "(", ")", "=", "?", "+", "-", "@", "#", ".", ","];
    $user_generated_password= "";

    for ($i=0; $i <= $passLegth; $i++) {
        
        $pass_alphaNum = array_merge($pass_numbers, $pass_alphabet_small, $pass_alphabet_big, $pass_symbols);
        $alphaNum = rand(o, count($pass_alphaNum));

        $user_generated_password .= $pass_element[$element];
    }
    return $user_generated_password;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>La password è stata generata</h1>
   
   <p style="font-size: 2rem">
       La tua nuova password è: "
       <?php 
           echo $user_generated_password;
       ?>
       "
   </p>
</body>
</html>