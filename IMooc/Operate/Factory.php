<?php
/**
 * @author  XiaohuiTian.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 * Date: 2016/3/17
 * Time: 15:28
 */

namespace IMooc\Operate;
use IMooc\Operate\Mutiply;
use IMooc\Operate\Plus;
use IMooc\Operate\Subtract;


/**
 * Class Factory
 *
 *
 * @package IMooc
 */
class Factory
{
	public static function getInstance($operate){

		if(!in_array($operate,["+","-","*"])){

			throw new \Exception("没有针对此操作符的运算！");
		}
		switch($operate){
			case "+":
				return new Plus();
			break;
			case "-":
				return new Subtract();
			break;
			case "*":
				return new Mutiply();
			break;
		}
	}
}