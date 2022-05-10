<?php
namespace func\src;

require_once '../base/Func.php';
require_once 'Func.php';

Func::dd('hello world!',false);
Func::dd(1,false);
Func::dd(true,false);
Func::dd("1",false);
Func::dd(['h'],false);
Func::dd(1.02,false);
Func::dd(1.88888888888888888888888888888888888888888888888888888888888888888888888888888888,false);
Func::dd(json_decode(json_encode(['h'])),false);
//Func::dd();
