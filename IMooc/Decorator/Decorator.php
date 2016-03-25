<?php
/**
 * @author  XiaohuiTian.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 * Date: 2016/3/23
 * Time: 17:06
 */

namespace IMooc\Decorator;


/**
 * Interface Decorator
 * @package IMooc\Decorator
 * @author  XiaohuiTian.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 */
abstract class Decorator extends Component
{
	protected $component;

	public function Decorator(Component $component){

		$this->component = $component;
	}

	public function operate()
	{
		// TODO: Implement operate() method.
		$this->component->operate();
	}


}