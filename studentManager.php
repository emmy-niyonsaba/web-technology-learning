<?php

class Student
{
    // Properties
    public $No;
    public $Fname;
    public $Lname;
    public $DOB;
    public $Tel;
    public $Email;

    // Constructor
    public function __construct($No, $Fname, $Lname, $DOB, $Tel, $Email)
    {
        $this->No = $No;
        $this->Fname = $Fname;
        $this->Lname = $Lname;
        $this->DOB = $DOB;
        $this->Tel = $Tel;
        $this->Email = $Email;
    }

    // Function to display student information
    public function displayInfo()
    {
        echo "Student Number: " . $this->No . "<br>";
        echo "First Name: " . $this->Fname . "<br>";
        echo "Last Name: " . $this->Lname . "<br>";
        echo "Date of Birth: " . $this->DOB . "<br>";
        echo "Telephone: " . $this->Tel . "<br>";
        echo "Email: " . $this->Email . "<br>";
        echo "<hr>";
    }
}

// Create student objects
$student1 = new Student(
    1,
    "Jean",
    "Mugisha",
    "2005-04-12",
    "0781234567",
    "jean@gmail.com"
);

$student2 = new Student(
    2,
    "Alice",
    "Uwase",
    "2004-08-20",
    "0791234567",
    "alice@gmail.com"
);

// Display all students
$student1->displayInfo();
$student2->displayInfo();

?>