<?php
// code goes here
// $myName = "Kevin Munene ";
// $finaloutput="My name is".' '.$myName;

// echo $finaloutput;

// $num1 =1;
// $num2 ="1";

// $compare = $sum1==$num2
// echo $compare

//Arrays
// $students = array("sheila "," caleb "," kevin ","fosi ", "jose");
// echo $students[2];
// echo count($students);

$programMarks = array("assignments" =>25, 
                        "CAT "=>20, 
                        "attendance"=>20, 
                        "projects"=>45
);
echo "CAT: " .$programMarks["CAT "] ;

// Multidimentional Arrays
$webTechnologies =array(
    'frontend'=>array( ' HTML ', 'CSS', ' JS ',' Bootstrap '),
    'backend'=>array(' PHP ', ' JS ', ' python ',' java'),
    'database'=>array(' mnysql ', ' postgresql ',' mangoDB ',' firebase ')
);
echo $webTechnologies['frontend'][2];
echo $webTechnologies['backend'][0];
echo $webTechnologies['database'][2];
?>

