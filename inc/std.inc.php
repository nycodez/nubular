<?php
function connect()
{
	$conn = mysql_connect('localhost', 'nubular', 'cl0udus3r');
	mysql_select_db('www_nubular_com', $conn);
	return $conn;
}
$conn = connect();
if(!$conn)
{
	echo 'No database connection.';
die();
}

function showElement($arr)
{
	$str = '';
	if(isset($arr['label']))
		$str .= '<label for="'. $arr['key'] .'">'. $arr['label'] .'</label>';
	switch($arr['type'])
	{
		case 'checkbox';
		$str .= '<input type=checkbox name=contact[custom]["'. $arr['key'] .']" id="'. $arr['key'] .'" />';
		break;
		case 'radio';
		$str .= '<input type=radio name=contact[custom]["'. $arr['key'] .']" id="'. $arr['key'] .'" />';
		break;
		case 'select';
		$str .= '<select name="contact[custom]['. $arr['key'] .']" id="'. $arr['key'] .'">';
		$options = explode(',', $arr['options']);
		foreach($options as $k => $v)
		{
			$str .= '<option>'. $v .'</option>';
		}
		$str .= '</select>';
		break;
		case 'text';
		$str .= '<input type=text name="contact[custom]['. $arr['key'] .']" id="'. $arr['key'] .'" maxlength="'. $arr['maxlength'] .'" value="'. $arr['value'] .'" placeholder="'. $arr['placeholder'] .'" />';
		break;
		case 'textarea';
		$str .= '<textarea name="contact[custom]['. $arr['key'] .']" id="'. $arr['key'] .'" placeholder="'. $arr['placeholder'] .'">'. $arr['value'] .'</textarea>';
		break;
	}
	return $str;
}
