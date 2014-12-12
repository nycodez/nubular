<?php

session_start();

$auth = new Auth();

if($_REQUEST['logout'])
{
	$auth->Logout();
}
elseif(isset($_REQUEST['func']) && $_REQUEST['func'] == 'Login')
{
	$auth->Authenticate($_POST['login'], $_POST['pass']);
}
elseif(isset($_SESSION) && $_SESSION['authenticated'] && $_SESSION['username'] && $_SESSION['password'])
{
	$auth->Confirm($_SESSION['username'], $_SESSION['password'], session_id());
}
else
{
	$auth->Login();
exit;
}

class Auth
{
	public function Login()
	{
		echo '<form method=post name="loginForm">
			<input type=text name=login class=login placeholder="login" />
			<input type=password name=pass class=login placeholder="password" />
			<input type=submit name=func value=Login class=inputButton />
			</form>';
	}
	public function Authenticate($login, $secret)
	{
		global $conn;
		$secret = md5($secret);
		$login = strtolower($login);
		$qs = "select * from entity where login = '$login' and secret = '$secret' and active = 1";
		$result = mysql_query($qs, $conn);
		if(mysql_num_rows($result) == 1)
		{
			while($row = mysql_fetch_assoc($result))
				$v = $row;
			$session = session_id();

			$_SESSION['authenticated'] = TRUE;
			$_SESSION['username'] = $login;
			$_SESSION['password'] = $secret;
			$_SESSION['name'] = $v['name'];
			$_SESSION['session'] = $session;
			$_SESSION['uid'] = $v['id'];

			$qt = "update `entity` set `session`='$session',`ip`='{$_SERVER['REMOTE_ADDR']}' where `id` = '{$v['id']}'";
			mysql_query($qt, $conn);
			unset($_REQUEST);

			return true;
		}
		else
		{
			$line = $_SERVER['HTTP_HOST'] .'|'. $_SERVER['REMOTE_ADDR'] .'|'. $login .'|'. date("Y-m-d h:i:s") .'|'. $_SERVER['HTTP_USER_AGENT'] ."\n";
			$f = fopen("logs/failedLogin", "a");
			fwrite($f, $line, strlen($line)); 
			fclose($f); 

			$this->Login();
			exit;
		}
	}
	public function Confirm($login, $secret, $session)
	{
		global $conn;
		$login = strtolower($login);
		$qs = "select * from entity where login = '$login' and secret = '$secret' and active = 1 and `session` = '$session'";
		$result = mysql_query($qs, $conn);
		
		if(mysql_num_rows($result) !== 1)
		{
			$this->Login();
			exit;
		}
		return true;
	}
	public function Logout()
	{
		unset($_SESSION['username']);
		unset($_SESSION['password']);
		$_SESSION = array();
		session_destroy();
		unset($_REQUEST['logout']);
		$url = $_SERVER['HTTP_HOST'];
		header("Location: http://{$url}");
		exit;
	}
}
