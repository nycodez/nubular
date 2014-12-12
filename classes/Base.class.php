<?php
abstract class Base {
	public function __construct($conn) {
		$this->conn = $conn;
	}
}
