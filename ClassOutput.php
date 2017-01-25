<?php 
/*********************************************************** 
Author: Bart O'Shea
Assignment: BScPHP Web App Assignment, Digital Skills Academy* 
Student ID: ?????* 
Date : 2016/07/23* 
Ref: N/A/
***********************************************************/
    /*include ClassLookup.php file so displayOutput()  method can build table based on return values of 
    function build_Array($tempUserName,$tempUserPassword)*/
    include 'ClassLookup.php';
Class Output{
	
    public function display_Output(){
    $myName = new GetDetails; // create instance of GetDetails class that will be used with getUserName() method as a parameter passed in to build_Array method
    $myPassword = new GetDetails; // create another instance of GetDetails class that will be used with getUserPassword() method as a parameter passed in to build_Array method
    $lookup = new Lookup; //create instance of Lookup class that will be used to kick of build_Array method in the Lookup class
    //below echos draw and style the output page
    echo '<body bgcolor="#073380" style="vertical-align:middle">';
    echo '<table border="1" width="80%" height="80%" align="center" style="vertical-align:middle display:inline-block"><center>';
    echo '<th colspan="3" bgcolor="#7B00FF"><font color ="white" size="25">Student Results</th>';
    echo    '<tr bgcolor="#444C53">';
    echo      '<td width="30%"><strong><center><font color ="white" size="25">';
    echo        'Name';
    echo      '</td></strong></center>';
    echo      '<td width="30%"><strong><center><font color ="white" size="25">';
    echo        'Mark';
    echo      '</td></strong></center>';
    echo      '<td width="30%"><strong><center><font color ="white" size="25">';
    echo        'Grade';
    echo      '</td></strong></center>';
    echo    '</tr>';
    echo    '<tr bgcolor="#3595FE"><center>';
    echo      '<td width="30%"><strong><center><font color ="white" size="25">';
    /*instance of Lookup class used to kick of build_Array method. 
    3 paramters passed in to method call, username, password and 
    first element of the array returned by the build_Array method
    which is the User Name
    */
    echo        $lookup->build_Array($myName->getUserName(),$myPassword->getUserPassword())[0];
    echo      '</td></strong></center>';
    echo      '<td width="30%"><strong><center><font color ="white" size="25">';
    /*instance of Lookup class used to kick of build_Array method. 
    3 paramters passed in to method call, username, password and 
    second element of the array returned by the build_Array method
    which is the Mark the user achieved
    */
    echo        $lookup->build_Array($myName->getUserName(),$myPassword->getUserPassword())[1];
    echo      '</td></strong>';
    echo      '<td width="30%"><strong><center><font color ="white" size="25">';
    /*instance of Lookup class used to kick of build_Array method. 
    3 paramters passed in to method call, username, password and 
    third element of the array returned by the build_Array method
    which is the Grade the user achieved
    */
    echo        $lookup->build_Array($myName->getUserName(),$myPassword->getUserPassword())[2];
    echo      '</td></strong></center>';
    echo    '</tr>';
    echo '</center></table>';
    }
}
$myOutput = new Output; //instance created of Output class
$myOutput->display_Output(); // instance of Output class used to kick off display_Output() method
//adding a comment here to test github
