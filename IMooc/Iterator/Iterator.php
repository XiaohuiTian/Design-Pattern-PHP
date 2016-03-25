<?php
/**
 * @author  XiaohuiTian.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 * Date: 2016/3/25
 * Time: 17:47
 */
namespace IMooc\Iterator;
/**
 * Interface Iterator
 * @author  XiaohuiTian.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 */
interface Iterator
{
	public function next();

	public function isDone();

	public function first();

	public function current();
}