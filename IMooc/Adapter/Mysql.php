<?php
/**
 * @author  XiaohuiTian.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 * Date: 2016/3/21
 * Time: 13:24
 */
namespace IMooc\Adapter;
/**
 * Class Mysql
 *
 *
 */
class Mysql implements IDatabase
{
	protected $conn = null;

	public function connect($host, $port, $userName, $pass, $dbName)
	{
		// TODO: Implement connect() method.
		$conn = mysql_connect($host,$userName,$pass);
		mysql_select_db($dbName);

		$this->conn = $conn;
	}

	public function query($sql)
	{
		// TODO: Implement query() method.
		$res = mysql_query($sql,$this->conn);

		return $res;
	}

	public function close()
	{
		// TODO: Implement close() method.
		mysql_close($this->conn);
	}
}