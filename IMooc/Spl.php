<?php
/**
 * @author  XiaohuiTian.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 * Date: 2016/3/17
 * Time: 13:43
 */

namespace IMooc;


/**
 * Class Spl
 *
 *
 * @package IMooc
 */
class Spl
{
	public function index(){

		self::splStack();
		self::splQuee();
		self::splHeap();
		self::splFixedArray();
	}

	private function splStack(){

		echo "splstack useage\n";

		$stack = new \SplStack();

		$stack->push("name\n");
		$stack->push("age\n");

		echo $stack->pop();
		echo $stack->pop();

	}

	private function splQuee(){

		$quee = new \SplQueue();
		$quee->push("abc\n");
		$quee->push("def\n");
		$quee->push("ghi\n");

		echo $quee->dequeue();
		echo $quee->dequeue();
		echo $quee->dequeue();
	}

	private function splHeap(){

		$heap = new \SplMaxHeap();
		$heap->insert("1\n");
		$heap->insert("2\n");
		$heap->insert("3\n");

		echo $heap->extract();
		echo $heap->extract();
		echo $heap->extract();
	}

	private function splFixedArray(){

		$fixedArray = new \SplFixedArray(10);

		$fixedArray[1] = '321';

		$fixedArray[8] = '456';

		var_dump($fixedArray);
	}
}
