<?php
/**
 * @author  XiaohuiTian.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 * Date: 2016/3/23
 * Time: 11:06
 */

namespace IMooc\Observer;


/**
 * Class Observer1
 *
 *
 * @package IMooc\Observer
 */
class Observer1 implements IObserver
{
	public function update()
	{
		// TODO: Implement update() method.
		echo "执行了Observer1观察者的逻辑！";
	}

}