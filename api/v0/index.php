<?php

require("handlers/HelloHandler.php");
require("handlers/UserHandler.php");
require("handlers/UsersHandler.php");
require("handlers/BookHandler.php");

require("Toro.php");

Toro::serve(array(
	"/" => "HelloHandler",
	"/users" => "UsersHandler", // ��ȡ�����û��б�
	"/users/:number" => "UserHandler", // ��ȡָ��id���û���Ϣ
	"/users/:number/book/:alpha" => "BookHandler" // ��ȡָ��id���û���ӵ�е�ָ�����ֵ�book��Ϣ
));

?>