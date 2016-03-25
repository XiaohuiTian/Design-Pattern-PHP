<?php
/**
 * @author  XiaohuiTian.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 * Date: 2016/3/25
 * Time: 17:52
 */

namespace IMooc\Iterator;


/**
 * Class ConcreteIterator
 *
 *
 * @package IMooc\Iterator
 */
class ConcreteIterator implements Iterator
{
	private $aggregate = null;
	private $currentIndex = 0;

	public function __construct(ConcreteAggregate $aggregate)
	{

		$this->aggregate = $aggregate;
	}

	public function next()
	{
		// TODO: Implement next() method.
		// 得到聚集的下一个对象
		$tmp = null;

        if($this->currentIndex < $this->aggregate->count()){
			$tmp = $this->aggregate->getList()[$this->currentIndex];
		}

		$this->currentIndex++;

        return $tmp;
	}

	public function isDone()
	{
		// TODO: Implement isDone() method.
		return $this->aggregate->count() <= $this->currentIndex?false:true;
	}

	public function first()
	{
		// TODO: Implement first() method.
		return $this->aggregate->getList()[0];
	}

	public function current()
	{
		// TODO: Implement current() method.
		return $this->aggregate->getList()[$this->currentIndex];
	}
}