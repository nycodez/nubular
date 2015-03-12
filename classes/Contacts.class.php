<?php
class Contacts extends Base {
	public function __construct($conn) {
		parent::__construct($conn);
	}
	public function GetInfo($id) {
		$qs = "select E.id,E.parent_id,E.type,E.login,B.credit,B.unpaid from `entity` E
			left join `balance` B on E.id = B.entity_id
			where `active` = 1
			and `id` = '$id'";
		$d = mysql_query($qs, $this->conn);
		while($row = mysql_fetch_assoc($d))
			$arr = $row;
		$arr['custom'] = $this->GetCustomFields('entity', $arr['type'], $id);
		return $arr;
	}
	public function GetCatalog() {
		$qs = "select * from `entity` E
			left join `balance` B on E.id = B.entity_id
			where `active` = 1
			order by `type`,`name`";
		$d = mysql_query($qs, $this->conn);
		while($row = mysql_fetch_assoc($d))
			$arr[] = $row;
		return $arr;
	}
}
