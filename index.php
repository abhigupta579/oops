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

$emp2 = new Programmer();
$emp2->empInfo('absh', 'dev', 10000);
$emp2->empProg('Anish', 'Engineer', 30000, 28);
?>