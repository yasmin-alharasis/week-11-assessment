<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
/* Question 1 : Write a PHP script to display names 
and the salaries amounts, within a table. ou should 
use `echo ` 
to generate your table. */
//////////////////////// Your Code Here /////////////////////

$name= ['yasmin','jamil'];
$salaries = ['700$','400$'];

//      echo '<table>';
//     foreach($names as $name){
//         foreach($salaries as $salary)
//     echo '<tr><td>';
//      echo 'salary for MR'.$name;     
//     echo '<td></td>';
//         //  <td>$salary</td>
//     </tr>
//     <tr>
//         <td>'salary for MR'.$name</td>
//         <td>$salary</td>
//      </tr>
//  </table>

// echo '<table>';
// ?>


<!-- 
/*Question 2 : Write a PHP script which displays 
the capital and country name from the below array 
$c. as unordered list after sorting the array list 
by countries names  */
//////////////////////// Your Code Here ///////////////////// -->
<?php
$countries = array( "Italy"=>"Rome",
              "Luxembourg"=>"Luxembourg",
               "Belgium"=> "Brussels",
               "Denmark"=>"Copenhagen",
               "Finland"=>"Helsinki",
               "France" => "Paris",
               "Slovakia"=>"Bratislava" ) ;

asort($countries);
foreach($countries as $country => $capital)
{
echo " $country is $capital"."</br>" ;
}
?>

<!-- /*Question 3 : Write a script to build the following stars pattern, using a nested for loop.

*
* *
* * *
* * * *
* * * * *
* * * * *
* * * *
* * *
* *
*

*/ -->
   

<?php

for($i=1; $i<=5; $i++)
{
for($j=1; $j<=$i; $j++)
{
echo ' * ';
}
echo '</br>';
}
for($i=5; $i>=1; $i--)
{
for($j=1; $j<=$i; $j++)
{
echo ' * ';
}
echo '</br> ';
}
?>


<!-- /*Question 4 : Write a PHP script to calculate the difference between two dates.
Input : 1981-11-04, 2013-09-04
Output : 31 years, 10 months, 11 days -->


<!-- /*Question 5 : Create a simple HTML form that accept the user name after submitting display the name using PHP echo statement under the form. */ -->


<form method='POST'>
 <input type="text" name="name">
 <input type="submit" >
 </form>
<?php
$name = $_POST['name'];
echo " Hello $name ";
?>

    
</body>
</html>
<?php

