<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOPS TUTs</title>
</head>

<body>

</body>

</html>

<?php
echo "<h1>Welcome to OOPS TUTORIALS...</h1>";
echo "<h2>Classes and Objects...</h2>";

class Player
{
    public $name;
    public $speed;
    public $run = false;

    function set_name($name)
    {
        $this->name = $name;
    }

    function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    function speed()
    {
        return $this->speed;
    }

    function get_name()
    {
        return $this->name;
    }

    function run()
    {
        $this->run = true;
    }

    function stopRun()
    {
        $this->run = false;
    }
}

//Objects are created...
$player1 = new Player();
$player2 = new Player();

$player1->set_name("Abhi");
$player1->setSpeed(20);
echo "<br>His name is " . $player1->get_name();
echo "<br>He moves with a Speed of " . $player1->speed() . " Km/hr";


$player1->set_name("Vijay");
$player1->setSpeed(30);
echo "<br>His name is " . $player1->get_name();
echo "<br>He moves with a Speed of " . $player1->speed() . " Km/hr";



// class Employee
// {
//     public $name, $role, $salary;

//     //Constructor without Arguments...
//     // function __construct()
//     // {
//     //     echo "<br>Constructor...Employee info...";
//     // }

//     //Constructor with Arguments...
//     function __construct($name, $role, $salary)
//     {
//         $this->name = $name;
//         $this->role = $role;
//         $this->salary = $salary;
//         echo "<br>" . $name . " is working as " . $role . " at the Salary of " . $salary . "<br>";
//     }
// }
// $emp1 = new Employee("Abhi", "Developer", 20000);
// $emp2 = new Employee("Anish", "Designer", 10000);

// echo "Name of Emp2 is $emp2->name";
// echo "<br>Salary of Emp1 is $emp1->salary";

//Practice...
class Student
{
    public $name, $age, $class, $hobby;

    function __construct($hobby)
    {
        $this->hobby = $hobby;
        echo "<br>His hobby is to play " . $hobby;
    }

    function setInfo($name, $age, $class)
    {
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    function disp()
    {
        echo "<br>Student name is " . $this->name . " His age is " . $this->age . " He studies in class " . $this->class;
    }

    //Destructor...
    // function __destruct()
    // {
    //     echo "<br>" . $this->name . " is Destructed who Studies in class" . $this->class;
    // }
}

$std1 = new Student('cricket');
$std2 = new Student('football');

$std1->setInfo('Vicky', 10, '5th');
$std2->setInfo('Vinay', 12, '7th');

$std1->disp();
$std2->disp();


//Inheritance...
class Employee
{
    public $name;
    public $role, $salary;

    function empInfo($name, $role, $salary)
    {
        echo "<br>Emp Info is " . $this->name = $name . ". His role is " . $this->role = $role . ". His Salary is " . $this->salary = $salary;
    }
}
$emp1 = new Employee();
$emp1->empInfo('Abhishek', 'Web Dev', 20000);

class Programmer extends Employee
{
    public $age;
    function empProg($name, $role, $salary, $age)
    {
        echo "<br>Programmer Name is " . $this->name = $name . " His role is " . $this->role = $role . " His Salary is " . $this->salary = $salary . " And His Age is " . $this->age = $age;
    }
}

$prog = new Programmer();
$emp1->empInfo('absh', 'dev', 10000);
$prog->empProg('Anish', 'Engineer', 30000, 28);


//OOPS with Vishal...
class class1
{
    public $name;
    public $x = 1, $m, $n, $y = 33, $z = 66;

    // function __construct()
    // {
    //     echo "<br>Class1 Constructor Called...";
    // }

    function fun1()
    {
        return $this->x++;
    }

    // function fun2()
    // {
    //     echo "<br>fun2<br>";
    // }

    // function fun3($name)
    // {
    //     return $this->name = $name;
    // }
    function dispNums($m, $n)
    {
        return $this->m = $m . " and " . $this->n = $n;
    }

    function dispNum2()
    {
        return $this->y . " and " . $this->z;
    }

    // function __destruct()
    // {
    //     echo "<br>Class1 Destroyed...";
    // }
}

$obj1 = new class1();
echo "<br>Value of X before Fun is " . $obj1->x;
$obj1->fun1();
echo "<br>Value of X After Fun is " . $obj1->x;
$obj1->fun1();
$obj1->fun1();
$obj1->fun1();
echo "<br>Value of X After 4 Funs is " . $obj1->x;
echo "<br>Values of m and n from Obj1 are " . $obj1->dispNums(44, 55);

$obj2 = new class1();
echo "<br>Values of Y and Z from Obj2 are " . $obj2->dispNum2();


//Inheritance...
class Base1
{
    public $x, $y;

    function __construct()
    {
        echo "<br>Base Const Called...";
    }

    function getNums($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}

$objB = new Base1();

class Derived extends Base1
{
    function __construct()
    {
        parent::__construct();
        echo "<br>Derived Const Called...";
    }

    function dispNums()
    {
        echo "<br>Values Of X and Y inherited from Class A in class B are " . $this->x . " and  " . $this->y;
    }
}

$objD = new Derived();
$objD->getNums(33, 44);
$objD->dispNums();

$objD->getNums(22, 77);
$objD->dispNums();


//Encapsulation...
class En1
{
    public $x, $y, $name;
    protected $z, $n = 99; //Protected cannot be accessed directly...can be Accessed by Fxn only...

    function __construct()
    {
        $this->x = 1;
        $this->y = 77;
    }

    function getProtect()
    {
        return $this->n;
    }

    function getInfo($x, $name)
    {
        $this->x = $x;
        $this->name = $name;
    }

    function dispInfo()
    {
        echo "<br>ID and Name is " . $this->x . " and " . $this->name;
    }

    function show()
    {
        echo "<br>Same fxn but in Base class...";
    }
}

class EnD1 extends En1
{
    function getNumFromBase($z)
    {
        return $this->z = $z;
    }

    function show()
    {
        echo "<br>Same fxn but in Derived class...";
    }
}

$objEnD = new EnD1();
echo "<br>Public Number from Base in derived class is " . $objEnD->y;
echo "<br>Protected Number from Base in derived class is " . $objEnD->getNumFromBase(66);

$objEn = new En1();
echo "<br>" . $objEn->x;

$objEn->x = 5;
echo "<br>", $objEn->x;

$objEn->getInfo(22, 'Vikas');
$objEn->dispInfo();
echo "<br>Protected Member is " . $objEn->getProtect();
// $objEn->n; Cannot access Protected member Directly...

//PRIVATE members can be Accessed within a Class only...

$objEnD->show();


//Abstraction...
abstract class BaseA
{
    abstract function disp();
    //Normal Fxn can be defined as usual in Abstract Class...
}

class DeriveA extends BaseA
{
    function disp()
    {
        echo "<br>This is Abstract Fxn in Derived Class...";
    }
}
$objA = new DeriveA();
$objA->disp();


abstract class Bank
{
    abstract function deposit();
    abstract function withdraw();
}

class BankOperation extends Bank
{
    function deposit()
    {
        echo "<br>Deposit Money...";
    }
    function withdraw()
    {
        echo "<br>You can Withdraw Money...";
    }
}

class hdfc extends Bank
{
    function deposit()
    {
        echo "<br>You can Deposit now in HDFC bank...";
    }

    function withdraw()
    {
        echo "<br>You can withdraw from HDFC Bank...";
    }
}

$objBankOperation = new BankOperation();
$objBankOperation->deposit();
$objBankOperation->withdraw();

$objHdfc = new hdfc();
$objHdfc->deposit();
$objHdfc->withdraw();


//Interface...It supports Multiple Inheritence...but we cant define Variables here... 
interface BaseIn1
{
    function test();
}

interface BaseIn2
{
    function test2();
}

class DerivedIn implements BaseIn1, BaseIn2
{
    function test()
    {
        echo "<br>Test1 fxn in Base1 class...";
    }

    function test2()
    {
        echo "<br>Test2 fxn in Base2 class...";
    }
}

$objDerInter = new DerivedIn();
$objDerInter->test();
$objDerInter->test2();


//Static Members...
class Stat1
{
    static public $num = 10;
    static function statDisp()
    {
        echo "<br>This is Static Fxn called...";
        echo "<br>Static Member in Fxn is " . self::$num; //Static Variable is called using Self not this under Fxn...Here, we cant set variable to this bcz no Object is created...
    }
} //Static Members are called directly by Class :: ,no need to create objects...
echo "<br>Static Member is " . Stat1::$num;
Stat1::statDisp();


//TRAITS...this is used when we need class acc to our req.
trait a
{
    function fun1()
    {
        echo "<br>fun1 called...";
    }
}

class b extends a
{
    function fun2()
    {
        echo "<br>fun2 called...";
    }
}

class c
{

    function fun3()
    {
        echo "<br>fun3 called...";
    }
}

class d extends c
{
    function fun4()
    {
        echo "<br>fun4 called...";
    }
}

?>