<?php
/**
 * @author  XiaohuiTian.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 * Date: 2016/3/23
 * Time: 17:09
 */

namespace IMooc\Decorator;


/**
 * Class Concrete1Decorator
 *
 *
 * @package IMooc\Decorator
 */
class Concrete1Decorator extends Decorator
{
	public function __construct(Component $component)
	{
		parent::Decorator($component);
	}

	public function operate()
	{
		$this->decortor1();
		parent::operate(); // TODO: Change the autogenerated stub
		$this->decortor2();
	}

	private function decortor1(){

		echo "装饰器1的装饰方法1！\n";
	}

	private function decortor2(){

		echo "装饰器1的装饰方法2！\n";
	}
}