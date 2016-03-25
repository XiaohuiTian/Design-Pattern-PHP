<?php
/**
 * @author  XiaohuiTian.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 * Date: 2016/3/23
 * Time: 11:05
 */

namespace IMooc\Observer;


/**
 * Class Event
 *
 *
 * @package IMooc\Observer
 */
class Event extends AEventTrigger
{
	public function trigger()
	{
		// TODO: Implement trigger() method.
		echo "事件触发了！\n";
		$this->notify();
	}
}