<?php
$password="rimba";

$encrypt_password=password_hash($password,PASSWORD_BCRYPT);


// echo $encrypt_password;

if(password_verify('rimba',$encrypt_password))
{
    echo "You have access to this page";
}else{
    echo "ora iso";
}

function RPL()
{
    echo "assalamualaikum";
}

echo RPL();