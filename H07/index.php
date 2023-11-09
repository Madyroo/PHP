<?php

$koekie = 'zo maar iets';
setcookie('testcookie', $koekie);
setcookie('testcookie', $koekie, time() + 3600);
setcookie("TestCookie", $koekje, time() + 3600, "/~rasmus/", "example.com", 1, 1);