<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$myStudents = new Student('Oussama','Lghachi', 1997, 1997, ["PHP", "JavaScript", "Math"] , 5);
echo '<h2>Student</h2>';
echo 'My first name is '.' '.$myStudents->getFName();
echo '<br>';
echo 'My last name is '.' '.$myStudents->getLName();
echo '<br>';
echo 'My year of birth is '.' '.$myStudents->getYearOfBirth();
echo '<br>';
echo 'My age is '.' '.$myStudents->getAge();
echo '<br>';
echo 'My courses is'.' ';
print_r($myStudents->getCourses());
echo '<br>';
echo 'My credit points is '.' '.$myStudents->getPoints();
echo '<br>';

$myTeachers = new Teacher('Kari','Laitinen', 1956, 1956, ["JavaScript" , "C++", "Python"], 'Kotkantie 1, 90250 Oulu, FINLAND');
echo '<h2>Teacher</h2>';
echo 'My teacher is'. ' '.$myTeachers->getFName();
echo '<br>';
echo 'My teacher is'.' '.$myTeachers->getLName();
echo '<br>';
echo 'My teacher is'.' '.$myTeachers->getYearOfBirth();
echo '<br>';
echo 'the age of my teacher is '.' '.$myTeachers->getAge();
echo '<br>';
echo 'the subjects of my teacher is'.' ';
print_r($myTeachers->getSubjects());
echo '<br>';
echo 'My department of my teacher is'.' '.$myTeachers->getdepartment();
echo '<br>';

$myFirstStaff = new Staff('Tai','Nguyen', 1976, 1976, 'Caretaker');
echo '<h2>First Staff</h2>';
echo 'The first name of my staff is'.' '.$myFirstStaff->getFName();
echo '<br>';
echo 'The last name of my staff is'.' '.$myFirstStaff->getLName();
echo '<br>';
echo 'The year of birth of my staff is'.' '.$myFirstStaff->getYearOfBirth();
echo '<br>';
echo 'The age of my staff is '.' '.$myFirstStaff->getAge();
echo '<br>';
echo 'The vacancy of my staff is'.' '.$myFirstStaff->getvacancy();
echo '<br>';

$mySecondStaff = new Staff('Nam','Pham', 2000, 2000, 'Cleaner');
echo '<h2>Second Staff</h2>';
echo 'The first name of my staff is'.' '.$mySecondStaff->getFName();
echo '<br>';
echo 'The last name of my staff is'.' '.$mySecondStaff->getLName();
echo '<br>';
echo 'The year of birth of my staff is'.' '.$mySecondStaff->getYearOfBirth();
echo '<br>';
echo 'The age of my satff is '.' '.$mySecondStaff->getAge();
echo '<br>';
echo 'The vacancy of my staff is'.' '.$mySecondStaff->getvacancy();
echo '<br>';
?>
