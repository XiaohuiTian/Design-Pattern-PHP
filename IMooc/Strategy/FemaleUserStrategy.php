<?php
/**
 * @author  XiaohuiTian.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 * Date: 2016/3/21
 * Time: 17:57
 */

namespace IMooc\Strategy;


/**
 * Class FemaleUserStrategy
 *
 *
 * @package IMooc\Strategy
 */
class FemaleUserStrategy implements UserStrategy
{
	public function showAd()
	{
		// TODO: Implement showAd() method.
		echo "女性用户偏好的广告！\n";
	}

	public function showCategory()
	{
		// TODO: Implement showCategory() method.
		echo "女性用户偏好的分类！\n";
	}
}