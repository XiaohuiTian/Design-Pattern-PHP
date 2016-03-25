<?php
/**
 * @author  XiaohuiTian.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 * Date: 2016/3/25
 * Time: 17:50
 */

namespace IMooc\Iterator;


/**
 * Class ConcreteAggregate
 *
 *
 * @package IMooc\Iterator
 */
class ConcreteAggregate extends Aggregate
{
	public $list = [];

	public function createIterator()
	{
		// TODO: Implement createIterator() method.

	}

	public function count(){

		return count($this->list);
	}

	/**
	 *
	 * @return array
	 */
	public function getList()
	{
		return $this->list;
	}

	/**
	 *
	 * @param array $list
	 */
	public function setList($list)
	{
		$this->list = $list;
	}
}