<?php
/**
 * @author  XiaohuiTian.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 * Date: 2016/3/23
 * Time: 17:05
 */

namespace IMooc\Decorator;


/**
 * Class ConcreteComponent
 *
 *
 * @package IMooc\Decorator
 */
class ConcreteComponent extends Component
{
	public function operate()
	{
		// TODO: Implement operate() method.
		echo "Concrete Component execute this Method!\n";
	}

}