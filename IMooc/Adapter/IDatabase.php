<?php
/**
 * @author  XiaohuiTian.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 * Date: 2016/3/21
 * Time: 13:25
 */

namespace IMooc\Adapter;


/**
 * Class IDatabase
 *
 *
 * @package IMooc\Adapter
 */
interface IDatabase
{
	public function connect($host,$port,$userName,$pass,$dbName);

	public function query($sql);

	public function close();
}