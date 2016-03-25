<?php
/**
 * @author  XiaohuiTian.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 * Date: 2016/3/23
 * Time: 13:22
 */
namespace IMooc\Prototype;
/**
 * Class Prototype
 * 原型模式通过克隆已经初始化过的对象来创建一个新的对象，从而减少消耗，提供性能。
 *
 */
class Prototype
{
	protected $data = [];

	/**
	 * 初始化画布
	 * @param int $width 宽
	 * @param int $height 高
	 * @author  XiaohuiTian.
	 * email: tianxh@jpgk.com.cn
	 * QQ:2018997757
	 */
	public function init($width = 20,$height = 10){

		for($i=0;$i<$height;$i++){

			for($j=0;$j<=$width;$j++){

				if($j == $width){

					$this->data[$i][$j] = "\n";
				}else{

					$this->data[$i][$j] = "*";
				}
			}
		}
	}

	/**
	 * 设置画的行和列
	 * @param $startRow
	 * @param $endRow
	 * @param $startCol
	 * @param $endCol
	 * @author  XiaohuiTian.
	 * email: tianxh@jpgk.com.cn
	 * QQ:2018997757
	 */
	public function set($startRow,$endRow,$startCol,$endCol){

		foreach($this->data as $i => &$column){

			foreach($column as $c => &$value){

				if($i>=($startRow-1) && $i<=($endRow-1)){

					if($c>=($startCol-1) && $c<=($endCol-1)){

						$value = " ";
					}
				}
			}
		}
	}

	/**
	 * 画出一个画布
	 * @author  XiaohuiTian.
	 * email: tianxh@jpgk.com.cn
	 * QQ:2018997757
	 */
	public function draw(){

		foreach($this->data as $i => $row){

			foreach($row as $c => $value){

				echo $value;
			}
		}
	}
}