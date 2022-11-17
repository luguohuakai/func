<?php


namespace func\src;


class Rsa implements \func\base\Rsa
{
    private $privateKey;
    private $publicKey;

    public function __construct($privateKeyFile, $publicKeyFile)
    {
        $this->privateKey = openssl_pkey_get_private("file://$privateKeyFile");
        $this->publicKey = openssl_pkey_get_public("file://$publicKeyFile");
    }

    public function Sign($str)
    {
        if (!is_string($str)) return null;
        return openssl_sign($str, $sign, $this->privateKey) ? base64_encode($sign) : null;
    }

    public function verify($str, $sign)
    {
        if (!is_string($str)) return null;
        $rs = openssl_verify($str, $sign, $this->publicKey);
        if ($rs == 1) return true;
        return false;
    }

    public function encode($str)
    {
        if (!is_string($str)) return null;
        return openssl_public_encrypt($str, $data, $this->publicKey) ? base64_encode($data) : null;
    }

    public function decode($str)
    {
        if (!is_string($str)) return null;
        return openssl_private_decrypt(base64_decode($str), $data, $this->privateKey) ? $data : null;
    }

    public function privateEncode($str)
    {
        if (!is_string($str)) return null;
        return openssl_private_encrypt($str, $data, $this->privateKey) ? base64_encode($data) : null;
    }

    public function publicEncode($str)
    {
        if (!is_string($str)) return null;
        return openssl_public_decrypt(base64_decode($str), $data, $this->publicKey) ? base64_encode($data) : null;
    }
}