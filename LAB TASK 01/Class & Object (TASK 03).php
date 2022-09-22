<!DOCTYPE html>
<html>
    <head>
    <title>
        Class & Object
    </title>
    </head>
    <body>
        <h1 align="center">
            <?php

                     
            class person
            {
                private $name;
                private $age;

                function setName($name)
                {
                    $this->name= $name;
                }

                function setAge($age)
                {
                    $this->age=$age;
                }

                function getName()
                {
                    return $this->name;
                }

                function getAge()
                {
                    return $this->age;
                }      
                
                function showInfo()
                {
                    echo "My Name is ".$this->getName()." "."I am"." ".$this->getAge()." "."Years.<br>";
                }
            }
            
            $obj1 = new person();
            $obj2 = new person();

            $obj1->setName("Rahim Uddin");
            $obj1->setAge(23);
            $obj1->showInfo();

            $obj2->setName("Samiha Hussain");
            $obj2->setAge(23);
            $obj2->showInfo();

            ?>
        </h1>
    </body>
</html>
