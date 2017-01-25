<?php 
/*********************************************************** 
Author: Bart O'Shea
Assignment: BScPHP Web App Assignment, Digital Skills Academy* 
Student ID: ?????* 
Date : 2016/07/23* 
Ref: N/A/
***********************************************************/
/*set up the GetDetails Class. This class is has a getter method that gets the username and 
password from the HTML submission*/
Class GetDetails{
	private $name;//name field is private to ensure encapsulation
	private $password; //password field is private to ensure encapsulation
//public method to get Username from HTML submission. This function will be called in future classes
	public function getUserName() {
        $name = $_GET['thisUserName'];
        return $name;
    }
//public method to get Password from HTML submission. This function will be called in future classes   
	public function getUserPassword() {
        $password= $_GET['thisUserPassword'];
        return $password;
    }
    
}



