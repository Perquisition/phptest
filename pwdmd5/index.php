<?php

$passowrd = "password";

echo $hash = password_hash($passowrd, PASSWORD_BCRYPT,["cost"=>12]);

if(password_verify($passowrd,$hash)){
    echo "Verifié";
}
?>
