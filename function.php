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
    

