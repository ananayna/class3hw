<?php 

//if-else condition use                                     1st condition
echo "number: 1 <br>";
$a= 487510;

if($a<=487509 && $a>=487485){
    echo "hall no is 309";
}elseif($a<=487526 && $a>=487510){
    echo "hall no is 310";
}else{
    echo "who are you?";
}
echo "<br>";
echo "<br>";

//roll                                                       2nd condition
echo "number: 2<br>";
$roll= 18;

if($roll<=10){
    echo "you are a good girl";
}else{
    echo "dur ho cokher shame theke..";
}
echo "<br>";
echo "<br>";

//bigger and equal of 3numbers                                        3rd condition
echo "number: 3<br>";
$a=10;
$b=20;
$c=30;

if($a>$b && $a>$c){
    echo "a is bigger then b & c";
}elseif($b>$a && $b>$c){
    echo "b is bigger then a & c";
}elseif($c>$a && $c>$b) {
    echo "c is bigger then a & b";
}else{
    echo "equal numbers";
}
echo "<br>";
echo "<br>";

// timer system                                                     4th condition
echo "number: 4<br>";
$time= date("h");

if($time>'1'){
    echo "its a day";
}else{
    echo "its night";
}
echo "<br>";
echo "<br>";

// odd and even number                                                    5th condition 
echo "number: 5<br>";
$num = 25;
 
if($num % 2==0){
    echo "is an even number";
}elseif($num % 2==1){
    echo "is an odd number";
}
echo "<br>";
echo "<br>";

//username & pass                                                          6th condition
echo "number: 6<br>";

function uset($usern,$userp){

    $dbn= 'ana';
    $dbp= '010';

    if($usern==$dbn){

        if($userp==$dbp){
            echo "login complete";   
        }else{
            echo "incarrect password";
        }

    }else{
        echo "incarrect username";
    }
}
uset('ana', '0170');
echo "<br>";
echo "<br>";

//leap year                                                         7th condition
echo "number: 7<br>";


function year_check($my_year){
    if ($my_year % 400 == 0)
       print("It is a leap year");
    else if ($my_year % 100 == 0)
       print("It is not a leap year");
    else if ($my_year % 4 == 0)
       print("It is a leap year");
    else
       print("It is not a leap year");
 }
 
 year_check(2004);
 echo "<br>";
 echo "<br>";

 //numeric                                                            8th condition
 echo "number: 8<br>";

 $num= 1243224;

 if(is_numeric($num)){
    echo "valid number";
 }else{
    echo "invalid number";
 }
 echo "<br>";
 echo "<br>";

 
 //numeric                                                            9th condition
 echo "number: 9<br>";

 $num= 5780;

 if(is_int($num)){
    echo "valid number";
 }else{
    echo "invalid number";
 }
 echo "<br>";
 echo "<br>";

//product price                                                     10th condition                                               
echo "number: 10<br>";

 $price=500;

 if($price<=700){
    echo "its perfect";
 }elseif($price<=1000){
    echo "its ok";
 }else{
    echo "too much....";
 }
