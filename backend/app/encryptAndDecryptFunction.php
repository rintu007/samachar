<?php

function encryptionFunction($value){
    // Store the cipher method 
$ciphering = "AES-128-CTR"; 
  
// Use OpenSSl Encryption method 
$iv_length = openssl_cipher_iv_length($ciphering); 
$options = 0; 
  
// Non-NULL Initialization Vector for encryption 
// $encryption_iv = '1234567891011121'; 
$encryption_iv = '9860094198609977'; 
  
// Store the encryption key 
$encryption_key = "SubinShreedharAvisek"; 
  
// Use openssl_encrypt() function to encrypt the data 
$encryption = openssl_encrypt($value, $ciphering, 
            $encryption_key, $options, $encryption_iv);

            return $encryption;
}



function decryptionFunction($value){
    // Non-NULL Initialization Vector for decryption 

$ciphering = "AES-128-CTR"; 
  
// Use OpenSSl Encryption method 
$iv_length = openssl_cipher_iv_length($ciphering); 
$options = 0; 

$decryption_iv = '9860094198609977'; 
  
// Store the decryption key 
$decryption_key = "SubinShreedharAvisek"; 
  
// Use openssl_decrypt() function to decrypt the data 
$decryption=openssl_decrypt ($value, $ciphering,  
        $decryption_key, $options, $decryption_iv); 
  
return $decryption;
}


?>