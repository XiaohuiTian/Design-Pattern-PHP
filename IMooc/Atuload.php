<?php
/**
 * @author  XiaohuiTian.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 * Date: 2016/3/17
 * Time: 11:03
 */
namespace IMooc;
/**
 * Class Atuload
 *
 *
 */
class Atuload
{
	public static function loader($class){
		require basedir.DIRECTORY_SEPARATOR.str_replace('/',DIRECTORY_SEPARATOR,$class).'.php';
	}
}