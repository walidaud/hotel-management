<?php

/*
BCS 501 - Database Systems
Group Assignment
Session: Feb 2021

        Members:
- WALID DELILECHE [20200175]
- WONG HAU KIT [20190033]
*/



/*
This php file is used for establishing a connection to the database
*/


$connection = mysqli_connect('localhost', 'root', '', 'hypnoshotel');
    
if(!$connection){
    die("Database connection failed!");
}

?>