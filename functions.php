<?php
$passLength = $_GET['passLength'];
var_dump($passLength);
/* function password_generator($passLength){
    $pass_characters=["1", "2", "3", "4", "5", "6", "7", "8", "9", "0","A", "B", "C", "D", "E", "F", "G", "H", "I", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "a", "b", "c", "d", "e", "f", "g", "h", "i", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "!", "£", "$", "%", "&", "/", "(", ")", "=", "?", "+", "-", "@", "#", ".", ","];
    $user_generated_password= "";

    for ($i=0; $i < $passLegth; $i++)
    
        /* $pass_alphaNum = array_merge($pass_numbers, $pass_alphabet_small, $pass_alphabet_big, $pass_symbols); */
        /* ^^^ Erano array che avevo creato per il bonus, che non faccio */
        /* $user_generated_password .= $pass_characters[random_int(0, strlen($pass_characters) - 1)]; */
        /* ^^^ vecchio tentativo */
    /*     $randomIndex = array_rand($pass_characters, $passLength);
        var_dump($randomIndex); */
    /* while (strlen($user_generated_password) < $passLength) {
        
        $user_generated_password .= $pass_characters[$randomIndex];
        var_dump($user_generated_password);
    }; */
   /*  return $user_generated_password; */

/* password_generator($passLength);  */
    function password_generator($length){
        $pass_characters=["1", "2", "3", "4", "5", "6", "7", "8", "9", "0","A", "B", "C", "D", "E", "F", "G", "H", "I", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "a", "b", "c", "d", "e", "f", "g", "h", "i", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "!", "£", "$", "%", "&", "/", "(", ")", "=", "?", "+", "-", "@", "#", ".", ","];
        /* return $pass_characters; */
        $user_generated_password= "";
        $randomIndex = array_rand($pass_characters);
        /* var_dump($pass_characters[$randomIndex]); */

        while (strlen($user_generated_password) < $length){
            $randomIndex = array_rand($pass_characters);
            $user_generated_password .= $pass_characters[$randomIndex];
        }
        /* var_dump($user_generated_password); */
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
           echo password_generator($passLength);
       ?>
       "
   </p>
</body>
</html>