<?php
/**
 * @author  XiaohuiTian.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 * Date: 2016/3/23
 * Time: 10:59
 */

namespace IMooc\Observer;


/**
 * 定义对象间一种一对多的依赖关系，使得当每一个对象改变状态，则所有依赖于它的对象都会得到通知并自动更新。
 * Interface IObserver
 * @package IMooc\Observer
 * @author  XiaohuiTian.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 */
interface IObserver
{
	/**
	 * 当事件发生时，每个观察者要更新的内容。
	 * @return mixed
	 * @author  XiaohuiTian.
	 * email: tianxh@jpgk.com.cn
	 * QQ:2018997757
	 */
	public function update();
}