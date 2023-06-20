<?php


namespace luguohuakai\func\base;


interface Rsa
{
    public function sign($str);

    public function verify($str, $sign);

    public function encode($str);

    public function decode($str);

    public function privateEncode($str);

    public function publicEncode($str);
}