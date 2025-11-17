<?php
    // add these 2 lines of code to your PHP files so you can see the errors
    // once a webpage goes into "production" (where users actually use your website), you would probably want to turn these off or use custom error handling to log the errors
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics</title>
</head>
<body>
    <header>
        <h1><?php echo "This is PHP code!"; ?></h1>
    </header>
    <?php
        // this is a PHP comment
        // echo allows you to print stuff that will appear on the webpage
        /* multi line comment */
        

        // 4 core concepts in programming:
        // variables
        // types - string, integer (whole numbers), float (numbers with decimal points), boolean (true/false), array, object

        // create a variable to hold number of hours worked this week
        // php variables start with the $ - use descriptive variable names whenever possible
        $numHoursWorked = 40;

        /* variable scope
            - local : example, if you create a variable in a loop, that variable only exists in the loop
            - global : example, create a variable outside of a function, then use the variable in a function
            - static : example, have a counter in a login function that tracks how many attempts the user has made to login
            - function parameters : example, passing in 2 variables to a function that adds numbers together
        */
        
        // functions
        /*
            4 types of functions:
             - no parameter(s), no return value
             - parameter(s), no return value
             - no parameter(s), return value
             - parameter(s), return value
        */
        // this function will calculate pay : no parameter(s), no return value
        function calPay(){
            // setting a reference to our $numHoursWorked variable that we created outside of this function
            global $numHoursWorked;

            // multiply the hours worked by our payrate
            // $totalPay is a local variable - it only exists in this function
            $totalPay = $numHoursWorked * 20;

            // use the . to concatenate value together, for example, when printing out a string
            echo "<p>Total pay: $" . $totalPay . "</p>";
        }

        // call the calculate pay function
        calPay();

        // function to calculate pay: parameter(s), no return value
        function calculatePay($hourlyPay){
            global $numHoursWorked;
            // multiply the hours worked by our payrate
            // $totalPay is a local variable - it only exists in this function
            $totalPay = $numHoursWorked * $hourlyPay;

            echo "<p>Total pay: $" . $totalPay . "</p>";
        }

        // call the function, pass in the hourly rate
        calculatePay(30);

        // function to calculate pay and return a value: no parameter(s), return value
        function calcTotalPay(){
            // setting a reference to our $numHoursWorked variable that we created outside of this function
            global $numHoursWorked;

            // multiply the hours worked by our payrate
            // $totalPay is a local variable - it only exists in this function
            $totalPay = $numHoursWorked * 20;

            // use the . to concatenate value together, for example, when printing out a string
            return "<p>Total pay: $" . $totalPay . "</p>";
        }

        // call the function 
        echo calcTotalPay();

        // function to calculate pay: parameter(s), return value
        function calculateTotalPay($hourlyPay){
            global $numHoursWorked;
            // multiply the hours worked by our payrate
            // $totalPay is a local variable - it only exists in this function
            $totalPay = $numHoursWorked * $hourlyPay;

            return "<p>Total pay: $" . $totalPay . "</p>";
        }

        // call the function
        echo calculateTotalPay(40);

        // example of using a static variable
        function loginAttempts(){
            static $loginAttempts = 0;

            $loginAttempts = $loginAttempts + 1;

            echo "<p>loginAttempts=" . $loginAttempts . "<p>";

        }

        // call loginAttempts function multiple times
        loginAttempts();
        loginAttempts();
        loginAttempts();

        // include files
        /* 4 ways to include other PHP files in your webpage
            - include - add the file; if it can't be found - PHP moves along with displaying the rest of the content
            - require - add the file; it it can't be found - PHP stops rendering the page
            - include_once - add the file only 1 time - PHP moves along with displaying the rest of the content
            - require_once - add the file only 1 time -  it it can't be found - PHP stops rendering the page
        */

        include "external.php";

        require "external.php";

        include_once "external.php";

        require_once "external.php";

        // decision logic
        echo "<BR>";
        $age = 540;

        // if condition - less than 1, this is an infant
        if ($age < 1){
            echo "This person is an infant";
        }
        // between 1 and 17 is a child
        elseif($age < 18){
            echo "This person is a child";
        }
        // catchall, default condition would be for an adult
        else{
            echo "This person is an adult";
        }
        
        // loops
        // for loop - if the code knows how many times the loop should run
        // counter ; condition that while true the loop will run ; increase the counter by 1
        for ($i = 0; $i < 5; $i++){
            echo "<br>i = " . $i;
        }

        // while loop - if the loop may run an undetermined number of times
        $counter = 1;

        // this while loop will run as long as counter is less than 4
        // watch out for those infinite loops - they are bad
        while($counter < 4){
            echo "<br>counter = " . $counter;

            // increase the value of counter so we got out of this loop
            $counter++;
        }

        // arrays are variables that hold multiple pieces of information
        $arrCars = array("Jeep", "Honda", "Toyota", "Ford", "Fiat");

        // get the number of items in the array
        echo "<br># of items in the cars array: " . count($arrCars);

        echo "<br>the 2nd item in the array: " . $arrCars[1]; // Honda is the 2nd item in the array; in the index slot of 1 because arrays are 0 based

        // loop through and show all items of the array
        foreach ($arrCars as $car){
            echo "<br>Car: " . $car;
        }
  

        // shortcut to creating an array - this is equivalent to:
        // $arrCars2 = array("Honda", "Toyota", "Ford", "Fiat");
        $arrCars2 = ["Honda", "Toyota", "Ford", "Fiat"];

        // loop through and show all items of the array
        foreach ($arrCars2 as $car){
            echo "<br>Car: " . $car;
        }


         // associative arrays - key / value pairs
        $arrEmployees = array("Sally"=>"Jeep", "Fred"=>"Honda", "Sam"=>"Fiat");

        // loop through to show the employee and their vehicle
        foreach($arrEmployees as $key => $value){
            // output the employee name (key) and vehicle (value)
            echo "<BR>Employee: " . $key . " Vehicle: " . $value;
        }
    ?>
</body>
</html>