<?php
class Calendar extends Base {
	public function __construct($conn) {
		parent::__construct($conn);
	}
	public function GetCatalog() {
		$qs = "select C.*,EO.name as ownerName,EC.name as customerName from `calendar` C
			left join `entity` EO on C.owner_id = EO.id
			left join `entity` EC on C.customer_id = EC.id
			where C.`active` = 1
			order by C.`eventDate`,C.`eventTime`,C.`name`";
		$d = mysql_query($qs, $this->conn);
		while($row = mysql_fetch_assoc($d))
			$arr[] = $row;
		return $arr;
	}
}
