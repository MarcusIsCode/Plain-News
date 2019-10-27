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

/* function content(array $contens, int $index): string
{
    $fullname = $contens[$index]['fname'] 

    return;
} */

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
