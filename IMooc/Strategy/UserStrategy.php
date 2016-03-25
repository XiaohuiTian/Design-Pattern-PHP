<?php
/**
 * @author  XiaohuiTian.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 * Date: 2016/3/21
 * Time: 17:54
 */
namespace IMooc\Strategy;
/**
 * Interface UserStrategy
 * @author  XiaohuiTian.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 */
interface UserStrategy
{
	public function showAd();
	public function showCategory();
}