<?php
class Records extends Base {
	public function __construct($conn) {
		parent::__construct($conn);
	}
	public function GetCatalog() {
		$qs = "select R.*,EE.id as entity_id,EE.name as entity_name,EC.id as created_id,EC.name as created_name,EA.id as assigned_id,EA.name as assigned_name from `record` R
			left join `entity` EE on R.entity_id = EE.id
			left join `entity` EC on R.created_id = EC.id
			left join `entity` EA on R.assigned_id = EA.id
			where R.`active` = 1
			order by R.`status`,R.`name`";
		$d = mysql_query($qs, $this->conn);
		while($row = mysql_fetch_assoc($d))
			$arr[] = $row;
		return $arr;
	}
}
