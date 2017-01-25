<?php 
/*********************************************************** 
Author: Bart O'Shea
Assignment: BScPHP Web App Assignment, Digital Skills Academy* 
Student ID: ?????* 
Date : 2016/07/23* 
Ref: N/A/
***********************************************************/
    //including ClassGetDetails.php file so we can use getUserName() and getPassword() methods in this class
    include 'ClassGetDetails.php';
//create the Lookup Class
Class Lookup{
	/*public method that creates the array of users,passwords,Marks and Grades. 
    Method also gets username and password from the getUserName() and getPassword() methods in the ClassGetDetails class */
    //public method that accepts 2 parameters, a username and a password
    public function build_Array($tempUserName,$tempUserPassword){
    $mark = 0;//variable mark set to 0
    $grade ='';//variable grade set to blank
    // buid array of 11 users with username, password,mark and grade
    $results = array
      (
      array("Bart O'Shea","Password1",85,"A"),
      array("John Murphy","Password2",65,"C"),
      array("Lisa Dunne","Password3",45,"D"),
      array("Patrick Falvey","Password4",87,"A"),
      array("Sharon Daly","Password5",74,"B"),
      array("David Harle","Password6",20,"F"),
      array("John Bowler","Password7",35,"E"),
      array("Tommy Dowling","Password8",55,"D"),
      array("Micheal O'Shea","Password9",81,"B"),
      array("Mary Mulcahy","Password10",95,"A"),
      array("Daniel Griffin","Password11",100,"A"),
      );
      /*Loop through the array, if the name and the password match the name and password passed in to the method then 
      return corresponding mark and grade from array*/
        for ($i = 0; $i < 11; $i++) {
          if ( $results[$i][0] == $tempUserName &&
               $results[$i][1] == $tempUserPassword ){
                $mark  = $results[$i][2];
                $grade = $results[$i][3];
                return array($results[$i][0],$mark,$grade);
          } else {
        // if iterations through array are complete and no match is found, return username and invalid credentials as an array from the method
           if ($mark == 0 && $i == 10){
            return array( $tempUserName,'Invalid Credentials', 'Invalid Credentials');
            }          
        }
        
        }
    }
}

 