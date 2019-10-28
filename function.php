<?php
declare(strict_types=1);
// This is where all the functions is.

//function that takes in an array and then prints it out.
// It uses array index for  chosing what authors to be printed as full name.

function authorFullName(array $names,int $index):string
{            
        $fullname = $names[$index]['fname']. " " . $names[$index]['lname'] ;     
        
        return $fullname;
}

function addContent(array $content ,array $names, int $int):string

    {
    $fullname ="<h4>" . $names[$int]['fname'] . " " . $names[$int]['lname']. "</h4>";  
     
     $title ="<h3>". $content[$int]['title'] ."</h3><br>";
     
      $text = "<p>". $content[$int]['content'] ."</p><br>";
      $likes = "<p>" .$content[$int]['likes']. " Peopele likes this ". "</p>";
      return $title.$fullname . $text .$likes;
}


function addingstyle(int $num):string{
        switch ($num){
        case 0;
        return 'Sience';
        case 1;
        return 'Art';
        case 2;
        return 'Sport';
        case 3;
        return 'Tech';
        case 4;
        return 'Devlopers';
       
        }
    }
/*
it's a function for taking the string dates from array
and then turn them to normal dates.
and then sort from smalles date to bigges
*/

function sortByDate(array $dates, int $int):string
{
    $dateArray = []; // a empty array for the new dates to be orderd
    foreach($dates as $date){ 
        
        //string to date
        
         $dateArray [] = $date["date"];
        
         //sort smal to big 
         rsort($dateArray) ;
        
    }
    return $dateArray[$int];
  
}


