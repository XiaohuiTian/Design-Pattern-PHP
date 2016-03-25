<?php
/**
 * @author  XiaohuiTian.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 * Date: 2016/3/21
 * Time: 13:25
 */

namespace IMooc\Adapter;


/**
 * Class PDO
 *
 *
 * @package IMooc\Adapter
 */
class PDO implements IDatabase
{
	protected $conn;

	public function connect($host, $port, $userName, $pass, $dbName)
	{
		// TODO: Implement connect() method.
		$conn = new \PDO("mysql:host=$host;dbname=$dbName",$userName,$pass);

		$this->conn = $conn;
	}

	public function query($sql)
	{
		// TODO: Implement query() method.
		$res = $this->conn->query($sql);
		return $res;
	}

	public function close()
	{
		// TODO: Implement close() method.
		$this->conn->close();
	}
}