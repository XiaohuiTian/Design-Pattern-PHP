<?php
/**
 * @author  XiaohuiTian.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 * Date: 2016/3/21
 * Time: 13:24
 */

namespace IMooc\Adapter;


/**
 * Class Mysqli
 *
 *
 * @package IMooc\Adapter
 */
class Mysqli implements IDatabase
{
	protected $conn = null;

	public function connect($host, $port, $userName, $pass, $dbName)
	{
		// TODO: Implement connect() method.
		$conn = mysqli_connect($host,$userName,$pass,$dbName);
		$this->conn = $conn;
	}

	public function query($sql)
	{
		// TODO: Implement query() method.
		$res = mysqli_query($this->conn,$sql);

		return $res;
	}

	public function close()
	{
		// TODO: Implement close() method.
		mysqli_close($this->conn);
	}
}