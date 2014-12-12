<?php
class Items extends Base {
	public function __construct($conn) {
		parent::__construct($conn);
	}
	public function GetCatalog() {
		$qs = "select * from `itemservice` 
			where `active` = 1
			order by `type`,`name`";
		$d = mysql_query($qs, $this->conn);
		while($row = mysql_fetch_assoc($d))
			$arr[] = $row;
		return $arr;
	}
}
