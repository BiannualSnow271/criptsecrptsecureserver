<?php
$simple_string = $argv[1];

  
// Store cipher method
$ciphering = "AES-128-CTR";
  
// Use OpenSSl encryption method
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;
  

$encryption_iv = '1234567891011121';
  
// Alternatively, we can use any 16 digit
// characters or numeric for iv
$encryption_key = "codespace";
  
// Encryption of string process starts
$decription = openssl_decrypt($simple_string, $ciphering,
        $encryption_key, $options, $encryption_iv);
echo $decription;
