<?php
/**
 * @author  XiaohuiTian.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 * Date: 2016/3/23
 * Time: 10:57
 */
namespace IMooc\Observer;
/**
 * Class AEventTrigger
 *
 *
 */
abstract class AEventTrigger
{
	private $observers = [];

	public function addObserver(IObserver $observer){

		$this->observers[] = $observer;
	}

	public abstract function trigger();


	public function notify(){

		foreach($this->observers as $observer){

			$observer->update();
		}
	}
}
