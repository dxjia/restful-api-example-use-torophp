<?php

require("handlers/HelloHandler.php");
require("handlers/UserHandler.php");
require("handlers/UsersHandler.php");
require("handlers/BookHandler.php");

require("Toro.php");

Toro::serve(array(
	"/" => "HelloHandler",
	"/users" => "UsersHandler", // 获取所有用户列表
	"/users/:number" => "UserHandler", // 获取指定id的用户信息
	"/users/:number/book/:alpha" => "BookHandler" // 获取指定id的用户所拥有的指定名字的book信息
));

?>