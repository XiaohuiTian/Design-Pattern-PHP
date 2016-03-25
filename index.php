<?php
define("basedir",__DIR__);

require basedir.DIRECTORY_SEPARATOR.'IMooc'.DIRECTORY_SEPARATOR.'Atuload.php';

spl_autoload_register('\IMooc\Atuload::loader');

(new App\Controller\Home\IndexController())->index();

(new \IMooc\Spl())->index();

$magicMethod = (new \IMooc\MagicMethod());
$magicMethod -> className = "MagicMethod\n";
$magicMethod -> className;

$magicMethod->magic("abc",'123');
$magicMethod::magic("abc",'123');

$magicMethod();
echo $magicMethod;

$operateFactory = new \IMooc\Operate\Factory();
echo "\n";
echo $operateFactory::getInstance('-')->getValue(4,1);
echo "\n";
echo $operateFactory::getInstance('*')->getValue(4,1);
echo "\n";
echo $operateFactory::getInstance('+')->getValue(4,1);
echo "\n";

echo "\n";
var_dump(\IMooc\Singleton\Database::getInstance());
echo "\n";
var_dump(\IMooc\Singleton\Database::getInstance());
echo "\n";

\IMooc\Register\Register::set('db',\IMooc\Singleton\Database::getInstance());
echo "从注册树中打印一个对象\n";
var_dump(\IMooc\Register\Register::get('db'));
echo "\n";

echo "适配器模式\n";
$db = new \IMooc\Adapter\Mysqli();
$db->connect("127.0.0.1","3306","root","mysql","lz517_backup");
$db->query("show database");
$db->close();
echo "\n";


echo "\n\n策略模式！\n";
$page = new \IMooc\Strategy\Page();
$page->setUserStrategy(new \IMooc\Strategy\MaleUserStrategy());
$page->index();

echo "\n";
$page->setUserStrategy(new \IMooc\Strategy\FemaleUserStrategy());
$page->index();

echo "\n";
echo "\n";
echo "观察者模式--定义对象间一种一对多的依赖关系，使得当每一个对象改变状态，则所有依赖于它的对象都会得到通知并自动更新。\n\n";

$event = new \IMooc\Observer\Event();
$observer1 = new \IMooc\Observer\Observer1();
$event->addObserver($observer1);

$event->trigger();


echo "\n\n\n";
echo "原型模式\n";
$prototype = new \IMooc\Prototype\Prototype();
$prototype->init();

$prototype1 = clone $prototype;

$prototype->set(3,9,4,8);
$prototype->draw();

echo "\n";
$prototype1->set(5,6,5,6);
$prototype1->draw();

echo "\n\n\n";
echo "装饰器模式 -- 装饰模式能够实现动态的为对象添加功能，是从一个对象外部来给对象添加功能\n";
$concrete = new \IMooc\Decorator\ConcreteComponent();

$decorator1 = new \IMooc\Decorator\Concrete1Decorator($concrete);
$decorator1->operate();

echo "\n";

$decorator2 = new \IMooc\Decorator\Concrete2Decortor($decorator1);
$decorator2->operate();
