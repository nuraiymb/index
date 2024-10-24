<?php

class Car
{
    public string $marka;
    public string $model; // property // свойства

    public float $volume;

    public string $kuzov;

    public string $dateProduced;

}

class Motorcycle
{

}

$car1 = new Car(); // экземпляр ,обьект
$car1->marka = 'mercedes';
$car1->model = 'CLS';
$car1->volume = 5.5;
$car1->kuzov = "w164";
$car1->dateProduced = '24.09.2015';

$car2 = new Car();
$car2->marka = 'BMW';
$car2->model = 'm5';
$car2->volume = 5;
$car2->kuzov = "x drive";
$car2->dateProduced = '05.05.2022';



class Human
{
    public string $name;

    public string $surname;
    public int $age;
    public string $gender;
    private int $weight;
    public int $height;

    public function __construct(string $name, string $surname)
    {
        $this->name         = $name;
        $this->surname      = $surname;

    }
    //public function __destruct()
    //{
       // echo "\n hello";

    //}
    public function getFullName() : string
    {
        return $this->name . ' ' . $this->surname;
    }
    public function getAge() : string
    {
        return "Жасы: " . $this->age;
    }

    public function getWeight()
    {
        return $this->weight;
    }

}

class Student extends Human // Human-суперкласс,родительский класс, Student-подкласс,дочерний класс
{
    public function __construct(string $name, string $surname,int $kurs, string $speciality)
    {
        parent::__construct($name, $surname);
        $this->kurs         = $kurs;
        $this->speciality   = $speciality;
    }
  public int $kurs;
  public bool $isGranted;
  public string $speciality;
  public float $gpa;
   public function setgpa(float $gpa)
   {
       $this->gpa = $gpa;
   }
    public function setisgranted(bool $isGranted)
    {
        $this->isGranted = $isGranted;
    }
}

class Teacher extends Human
{

}

class TaxiDriver extends Human
{

}

class Builder extends Human
{

}

//$student1 = new Student('Nuraiym', 'Baktygaliyeva', 1, 'OilGirl');

//echo $student1->getFullName() . "\n";

//$student1->setgpa('3.51');

//$student1->setisgranted(true);

//echo "GPA: " . $student1->gpa . "\n";
//echo "kurs: " . $student1->kurs . "\n";
//echo "мамандығы: " . $student1->speciality . "\n";

$studentsData = [
  [
    'name' =>'Leila',
    'surname' => 'Milano',
    'kurs' => 1,
    'speciality' => 'Teacher',
]
  [     'name' =>'Ilon',
    'surname' => 'Mask',
    'kurs' => 2,
    'speciality' => 'Management',
  ]
]
foreach ($studentsData as $studentData)
{
    $s = new Student($studentData['name'], $studentData['surname'], $studentData['kurs'], $studentData['speciality']);
    echo $s->getFullName();
}