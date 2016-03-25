<?php
/**
 * @author  XiaohuiTian.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 * Date: 2016/3/21
 * Time: 13:07
 */
namespace IMooc\Register;
/**
 * Class Register
 *
 *
 */
class Register
{

	protected static $objects = null;

	/**
	 * 注册对象到注册树
	 * @param String $alias 别名
	 * @param Object $object 对象
	 * @author  XiaohuiTian.
	 * email: tianxh@jpgk.com.cn
	 * QQ:2018997757
	 */
	public static function set($alias,$object){

		self::$objects[$alias] = $object;
	}

	/**
	 * 从注册树中获取一个对象
	 * @param $alias
	 * @return mixed
	 * @author  XiaohuiTian.
	 * email: tianxh@jpgk.com.cn
	 * QQ:2018997757
	 */
	public static function get($alias){

		return self::$objects[$alias];
	}

	/**
	 * 从注册树种卸载一个对象
	 * @param $alias
	 * @author  XiaohuiTian.
	 * email: tianxh@jpgk.com.cn
	 * QQ:2018997757
	 */
	function _unset($alias){

		unset(self::$objects[$alias]);
	}
}