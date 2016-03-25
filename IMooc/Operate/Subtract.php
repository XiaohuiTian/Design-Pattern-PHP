<?php
/**
 * @author  XiaohuiTian.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 * Date: 2016/3/18
 * Time: 11:15
 */

namespace IMooc\Operate;


/**
 * Class Subtract
 *
 *
 * @package IMooc\Operate
 */
class Subtract implements IOperate
{
	public function getValue($num1, $num2)
	{
		return $num1-$num2;
	}
}