<?php
namespace backend\util;

function encryptPassword(string $password):string{
    $hashed_password= \password_hash($password,PASSWORD_ARGON2ID);
    return $hashed_password;
}

function verifyPassword(string $hashed_password,string $p_password):bool{
    return \password_verify($p_password,$hashed_password);
}  
function decryptPassword(string $hashed_password, string $p_password):string|null{
    $verify = verifyPassword($hashed_password,$p_password);
    return $verify? $p_password:null;  
}

?>