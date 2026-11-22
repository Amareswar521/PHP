
 /*hp

$name="Siva";
$age=25;
echo "Hello $name,you are $age years old";

$name="Siva";
$age=25;
$salary=25000
$role="Developer";
echo " Name:$name,Age:$age,Salary:$salary,Role:$role";


//data types in php
$name="Siva";
$age=25;
$salary=25000.32;
$is_married=false;
$hobbies=["ricket","football","chess"];

//var_dump() it is used to check the what type of data is stored in the variable
echo var_dump($name);
echo var_dump($age);
echo var_dump($salary);
echo var_dump($is_married);
echo var_dump($hobbies);

$x=10;
$y=20;
echo $x+$y;
echo "<br>";
echo $x-$y;
echo "<br>";
echo $x*$y;
echo "<br>";
echo $x/$y;

$first_name="Amareswar";
$last_name="Karri";
echo $first_name." ".$last_name;//. is used to concatenate the strings

?>
*/

<?php
/*
  $num=10;
  if($num<0){
    echo "Negative number";
  }
    else if($num>0){
        echo "positive number";
  }
  else{
    echo "Zero";
  }
  
?>

<?php
  age=20;
  if($age>=18){
    echo "You are eligible to vote";
  }
  else{
    echo "You are not eligible to vote";
  }

?>
<?php
  $num1=10;
  $num2=20;
  if($num1>$num2){
    echo "$num1 is largest number";
  }
  else{
    echo "$num2 is largest number";
  }
?>
<? php 
 $day=2;
 switch($day){
    case 1:
        echo "monday";
        break;
    case 2:
        echo "tuesday";
        break;
    case 3:
        echo "wednesday";
        break;
    case 4:
        echo "thursday";
        break;
    case 5:
        echo "friday";
        break;
    case 6:
        echo "saturday";
        break;
    case 7:
        echo "sunday";
        break;
    default:
        echo "Invalid day";
 }


?>

<?php
  $marks=92;
  if($marks>=90){
    echo "A";
  }
  else if($marks>=80){
    echo "B";
  }
  else if ($marks>=70){
    echo "C";
  }
  else if($marks>=60){
    echo "D";
  }
  else{
    echo "F";
  }

?>
<?php
 num=5;
 if($num%2==0){
    echo "$num is even";
 }
 else{
    echo "$num is odd";
 }

*/
?>
<?php
/*
  $num=5;
  for($i=1;$i<=10;$i++){
    echo "$num * $i =".($num*$i)."<br>";
  }
    
  $num=10;
  $i=1;
  while($i!=10){
    echo  $i."<br>";
    $i++;
  }
    
  $programming_languages=["Pyhon","Java","C++","Js","Php"];
  //foreach($programming_languages as $pl){
    //echo $pl."<br>";
    
  }
    //indexed array
    $pl=["python","java","c++","js","php"];
    echo $pl[0]."<br>";
    echo $pl[1]."<br>";
    */
    //Associative array -it is used to store the data in key value pair.
   /* $employee=[
      "name"=>"siva",
      "age"=>25,
      "Salary"=>25000
    ];
    /*echo $employee["name"]."<br>";
    echo $employee["age"]."<br>";
    echo $employee["Salary"]."<br>";
    foreach($employee as $key=>$value){
      echo $key.":".$value."<br>";

    }
      
    //multidimensional arra
    $employees=[
      [
        "name"=>"Siva",
        "age"=>25,
        "salary"=>25000
      ],
      [
        "name"=>"Lokesh",
        "age"=>20,
        "salary"=>20000
      ],
      [
        "name"=>"Amareswar",
        "age"=>25,
        "salary"=>20000
      ]
    ];
    //1st row 
    echo $employees[0]["name"]."<br>";
    echo $employees[0]["age"]."<br>";
    echo $employees[0]["salary"]."<br>";
    //2nd row
    echo $employees[1]["name"]."<br>";
    echo $employees[1]["age"]."<br>";
    echo $employees[1]["salary"]."<br>";
    //3rd row
    echo $employees[2]["name"]."<br>";
    echo $employees[2]["age"]."<br>";
    echo $employees[2]["salary"]."<br>";
    */
?>
<?php 
/*
  function show(){
    echo "hi";
  }
  show();
  
  function add($a,$b){
    echo $a+$b;
  }
  add(2,3);
  
  function multiply($x,$y){
    return $x*$y;
  }
  $result=multiply(2,3);
  echo $result;
  
  function factorial($n){
    if($n==0){
      return 1;
    }
    else{
      return $n*factorial($n-1);
    }
  }
  $result=factorial(5);
  echo $result;
  
  //default parameters.
  function data($name="Siva",$age=21){
    echo "Name:$name,Age:$age";
  }
  data("Eswar",22);
  
  function calculateSalary($basic,$bonus){
    $total=$basic+$bonus;
    return $total;
  }
  $employee="Siva";
  $basic=250000;
  $bonus=5000;
  $totalSalary=calculateSalary($basic,$bonus);
  echo "Employee:$employee,Total Salary:$totalSalary";
  */
  ?>
  