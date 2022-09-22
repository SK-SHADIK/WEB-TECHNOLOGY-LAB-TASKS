<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TASK-02</title>
</head>
<body>
<p align="center">
<?php
    class student
    {
        private $Student_name;
        private $Student_id;
        private $Student_dept;
         private $Student_B_group;

        function setStudent_name($Student_name)
        {
            $this->student_name=$Student_name;
        }
        
 
        function setStudent_id($Student_id)
        {
            $this->Student_id=$Student_id;
        }
        
 
        function setStudent_dept($Student_dept)
        {
            $this->Student_dept= $Student_dept;
        }
        
 
        function setStudent_B_group($Student_B_group)
        {
            $this->Student_B_group=$Student_B_group;
        }
        

        function getStudent_name()
        {
            return $this->student_name;
        }

        function getStudent_id()
        {
            return $this->Student_id;
        }

        function getStudent_dept()
        {
            return $this->Student_dept;
        }

        function getStudent_B_group()
        {
            return $this->Student_B_group;
        }

        function ShowInfo()
        {
            echo "Student Name is ".$this->getStudent_name()."."."Student Id is "." ".$this->getStudent_id().".Student Dept is "." ".$this->getStudent_dept().".Student Blood Group is "." ".$this->getStudent_B_group().".<br>";
        }
    }

    $S = new student();
    $S->setStudent_name("HASAN, SHADIK");
    $S->setStudent_id("19-39357-1");
    $S->setStudent_dept("CSE");
    $S->setStudent_B_group("O+");
    $S->ShowInfo();
               
 
?></p>
</body>
</html>