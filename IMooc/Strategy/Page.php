<?php
/**
 * @author  XiaohuiTian.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 * Date: 2016/3/21
 * Time: 17:59
 */

namespace IMooc\Strategy;


/**
 * Class Test
 *
 *
 * @package IMooc\Strategy
 */
class Page
{
	/**
	 * @var UserStrategy
	 * @author  XiaohuiTian.
	 * email: tianxh@jpgk.com.cn
	 * QQ:2018997757
	 */
	protected $strategy = null;

	public function index(){

		$this->strategy->showAd();
		$this->strategy->showCategory();
	}

	public function setUserStrategy(UserStrategy $strategy){

		$this->strategy = $strategy;
	}
}