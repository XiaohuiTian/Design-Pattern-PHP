<?php
/**
 * @author  XiaohuiTian.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 * Date: 2016/3/18
 * Time: 11:16
 */

namespace IMooc\Operate;


/**
 * Class Mutiply
 *
 *
 * @package IMooc\Operate
 */
class Mutiply implements IOperate
{
	public function getValue($num1, $num2)
	{
		return $num1*$num2;
	}
}