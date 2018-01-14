<?php

/*
 * This class stores the basic information of a student.
 */

/**
 * This class defines a type of student.
 *
 * @author Eric
 */
class Student {
        /**
         * The constructor of student classes.
         */
        function __construct() {
                $this->surname = ' ';
                $this->first_name = ' ';
                $this->emails = array();
                $this->grades = array();
        }
        
        /**
         * Getting the email of the student.
         * @param String $which the type of the email
         * @param String $address the email address
         */
        function add_email($which,$address) {
                $this->emails[$which] = $address;
        }

        /**
         * Getting all the marks of the student.
         * @param integer $grade the marks student gets.
         */
        function add_grade($grade) {
                $this->grades[] = $grade;
        }
        
        /**
         * Calculating the average mark of the student.
         * @return integer the average mark of the student.
         */
        function average() {
                $total = 0;
                foreach ($this->grades as $value) {
                        $total += $value;
                }
                return $total / count($this->grades);
        }
        
        /**
         * Showing all the information of the student.
         * @return String readable paragraph about student.
         */
        function toString() {
                $result = $this->first_name . ' ' . $this->surname;
                $result .= ' ('.$this->average().")\n";
                foreach($this->emails as $which=>$what) {
                        $result .= $which . ': '. $what. "\n";
                }
                $result .= "\n";
                return '<pre>'.$result.'</pre>';
        }
}
