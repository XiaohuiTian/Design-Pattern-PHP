<?php
/**
 * @author  XiaohuiTian.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 * Date: 2016/3/17
 * Time: 14:19
 */

namespace IMooc;


/**
 * Class MagicMethod
 *
 *
 * @package IMooc
 */
class MagicMethod
{
	protected $array = null;

	function __set($name, $value)
	{
		echo __METHOD__."\n";
		$this->array[$name] = $value;
	}

	function __get($name)
	{
		echo __METHOD__."\n";
		return $this->array[$name];
	}

	function __call($name, $arguments)
	{
		echo "call {$name} method not found,params is ".json_encode($arguments)."\n";
	}

	static function __callStatic($name, $arguments)
	{
		echo "call static {$name} method not found,params is ".json_encode($arguments)."\n";
	}

	function __invoke()
	{
		echo "Will echo this message when call the object of this class!\n";
	}

	function __toString()
	{
		return (String)self::class;
	}

	/*function __clone()
	{

	}

	function __debugInfo()
	{
		// TODO: Implement __debugInfo() method.
	}

	function __isset($name)
	{
		// TODO: Implement __isset() method.
	}

	function __destruct()
	{
		// TODO: Implement __destruct() method.
	}

	function __sleep()
	{
		// TODO: Implement __sleep() method.
	}*/
}