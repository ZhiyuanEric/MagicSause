<!DOCTYPE html>
<!--
Creating students and display all the informations in the web page.
-->
<html>
        <head>
                <meta charset="UTF-8">
                <title></title>
        </head>
        <body>
                <?php
                //including the student type.
                include('Student.php');

                //Creating a student array.
                $students = array();
                
                //First student added.
                $first = new Student();
                $first->surname = "Doe";
                $first->first_name = "John";
                $first->add_email('home','john@doe.com');
                $first->add_email('work','jdoe@mcdonalds.com');
                $first->add_grade(65);
                $first->add_grade(75);
                $first->add_grade(55);
                $students['j123'] = $first;
                
                //Second student added.
                $second = new Student();
                $second->surname = "Einstein";
                $second->first_name = "Albert";
                $second->add_email('home','albert@braniacs.com');
                $second->add_email('work1','a_einstein@bcit.ca');
                $second->add_email('work2','albert@physics.mit.edu');
                $second->add_grade(95);
                $second->add_grade(80);
                $second->add_grade(50);
                $students['a456'] = $second;
                
                //Third student added.
                $third = new Student();
                $third->surname = "Jim";
                $third->first_name = "Parry";
                $third->add_email('work','jim_parry@bcit.ca');
                $third->add_grade(100);
                $third->add_grade(85);
                $third->add_grade(70);
                $students['c789'] = $third;
                
                ksort($students);
                
                echo "<h2>Student List</h2>";
                echo "<ol>";
                foreach($students as $student) {
                        echo "<li>". $student->toString(). "</li>";
                }
                echo "</ol>";
                ?>
        </body>
</html>
