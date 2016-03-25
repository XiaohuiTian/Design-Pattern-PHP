<?php
/**
 * @author  XiaohuiTian.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 * Date: 2016/3/21
 * Time: 11:56
 */
namespace IMooc\Singleton;
/**
 * Class Database
 *
 *
 */
class Database
{
	protected static $db = null;

	/**
	 * 防止被其他类创建
	 * Database constructor.
	 */
	protected function __construct()
	{

	}

	public static function getInstance(){

		if(!self::$db){

			echo "11\n";
			self::$db = new self();
		}

		return self::$db;
	}
}