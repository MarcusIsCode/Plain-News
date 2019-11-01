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
 // used in usort() for sorting one array
function sortMetod(array $a, array $b):int
{    //to get date to int in seconds to easily compare
    $aDate = strtotime($a['date']);
    $bDate = strtotime($b['date']);

    //the function used in usort()
    if ($aDate == $bDate) return 0;
    return ($aDate > $bDate) ? -1 : 1; 

}
function addContent(array $content ,array $names, int $int, int $authorint):string
    {
       
        
      $title ="<h2>". $content[$int]['title'] ."</h2><br>";
      $fullname ="<p>" . $names[$authorint]['fname'] . " " . $names[$authorint]['lname']. "</p><br>";  
      $date = "<p>" ."Published: ". $content[$int]['date'] . "</p><br>";
      $text = "<p>". $content[$int]['content'] ."</p><br>";
      $likes = "<p>" .$content[$int]['likes']. " Peopele likes this ". "</p>";
      
      return $title  . $fullname . $text . $date . $likes;
}


function addingstyle(int $num):string{
        switch ($num){
        case 0;
        return 'sience';
        case 1;
        return 'culture';
        case 2;
        return 'sport';
        case 3;
        return 'tech';
        case 4;
        return 'devlopers';
       
        }
    }




