<?php
abstract class Base {
	public function __construct($conn) {
		$this->conn = $conn;
	}
	public function GetAllCustomFields($grouping) {
		$qs = "select CF.* from customfields CF
			where CF.grouping = '$grouping'
			order by `order`";
		$d = mysql_query($qs, $this->conn);
		while($row = mysql_fetch_assoc($d))
			$arr[$row['subgrouping']][] = array
				(
				 'type' => $row['type'],
				 'name' => $row['name'],
				 'label' => $row['label'],
				 'options' => $row['options'],
				 'maxlength' => $row['maxlength'],
				 'placeholder' => $row['placeholder'],
				 'default' => $row['default'],
				 'required' => $row['required'],
				 'key' => $row['id'],
				);
		return $arr;
	}
	public function GetCustomFields($grouping, $subgrouping, $id) {
		$qs = "select CF.*,KV.value from customfields CF
			left join keyvals KV on CF.id = KV.key and KV.record_id = '$id'
			where CF.grouping = '$grouping'
			and CF.subgrouping = '$subgrouping'
			order by `order`";
		$d = mysql_query($qs, $this->conn);
		while($row = mysql_fetch_assoc($d))
			$arr[] = array
				(
				 'type' => $row['type'],
				 'name' => $row['name'],
				 'label' => $row['label'],
				 'options' => $row['options'],
				 'maxlength' => $row['maxlength'],
				 'placeholder' => $row['placeholder'],
				 'default' => $row['default'],
				 'required' => $row['required'],
				 'key' => $row['id'],
				 'value' => $row['value'],
				);
		return $arr;
	}
}
