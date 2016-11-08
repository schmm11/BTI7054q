<?php
class DB extends mysqli{
	const HOST="localhost", USER="root", PW="", DB_NAME="theshop";
	static private $instance;
	private function __construct() {
		parent::__construct(self::HOST, self::USER, self::PW, self::DB_NAME);
	}
	static public function getInstance() {
		if ( !self::$instance )
		@self::$instance = new DB();
		// error handling ...
		// set charset to utf8
		return self::$instance;
	}
	static public function doQuery($sql) {
	return self::getInstance()->query($sql);
	}
}
?>