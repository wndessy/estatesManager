<?php

/**
 * The generic class that handles functions that apply to all the users.
 *
 * @author root
 */
class Users {

    function addUsser($jsonSting) {
        include_once '../Config.php';
        include_once './DbModules.php';
        $db= new DbModules();
        $test = new Config;
        $p = json_decode($jsonSting, true);
        //echo $p['fname'];
        $conn = $db->getConnection();
        $cmd = "select * from " . $test->getDB_NAME() . ".applicantsdetails where EmailAddress=\"" . $p['Email'] . "\"";
        $result = mysql_query($cmd);
        if (mysql_fetch_array($result) != null) {
            echo "you are already registered";
        } else {

            $qeury = "INSERT INTO " . $test->getDB_NAME() . ".applicantsdetails  (FirstName,LastName,Gender,maritalStatus,IdOrPassport,EmailAddress,Password,PayrollNumber,Designation,Grade,CommencementOfDuty,Department,HeadOfDepartment)"
                    . "VALUES ('" . $p['fname'] . "','" . $p['lname'] . "','" . $p['gender'] . "','" . $p['Mstatus'] . "','" . $p['IdOrPasport'] . "','" . $p['Email'] . "','" . $p['password'] . "','" . $p['PayrolNumber'] . "','" . $p['Designation'] . "','" . $p['Grade'] . "','" . $p['CommencementOfDuty'] . "','" . $p['Department'] . "','" . $p['HeadOfDepartment'] . "')";
            mysql_query($qeury, $conn) or die(mysql_error());

            $cmd = "select max(ApplicantId)as applicant from " . $test->getDB_NAME() . ".applicantsdetails";
            $result = mysql_query($cmd, $conn) or die(mysql_error());
            $row = mysql_fetch_array($result);
            $applicant = $row['applicant'];
            $i = $p['CountParser'];
            $count = 0;
            while ($count <= $i) {
                $fname = "f_name_" . $count;
                $mname = "m_name_" . $count;
                $dob = "dob_" . $count;
                $disabled = "disabled_" . $count;
                $addChild = "INSERT INTO " . $test->getDB_NAME() . ".children(ApplicantId,fname,sname,dob)VALUES "
                        . "('" .$applicant . "','" . $p[$fname] . "','" . $p[$mname] . "','" . $p[$dob] . "')";
                
                 mysql_query($addChild, $conn) or die(mysql_error());
                
                $count++;
            }
             echo"registration successful";
        }
       
    }

    function updateUser($jsonSting) {
        include_once '../Config.php';
        include_once './DbModules.php';
       $db=new DbModules();
         $test = new Config;
        $p = json_decode($jsonSting, true);
    
        session_start();
        $applicant = $_SESSION['applicantId'];
        
        
        $conn = $db->getConnection();
        $cmd = "update  " . $test->getDB_NAME() . ".applicantsdetails "
                . "set Designation=\"" . $p['Designation'] . "\",   Grade=\"" . $p['Grade'] . "\", Department=\"" . $p['Department'] . "\""
                . " where ApplicantId=\"" .$applicant . "\"";
        mysql_query($cmd, $conn) or die(mysql_error());
        
            $i = $p['CountParser'];
            $count = 0;
            while ($count <= $i) {
                $fname = "f_name_" . $count;
                $mname = "m_name_" . $count;
                $dob = "dob_" . $count;
                $disabled = "disabled_" . $count;
                $addChild = "INSERT INTO " . $test->getDB_NAME() . ".children(ApplicantId,fname,sname,dob)VALUES "
                        . "('" .$applicant . "','" . $p[$fname] . "','" . $p[$mname] . "','" . $p[$dob] . "')";
                
                 mysql_query($addChild, $conn) or die(mysql_error());
                
                $count++;
            }
             echo"Update successful";
        
    }

    function deleteUser() {
        
    }

    /**
     * 
     * @param type $email
     * @param type $password
     * @return boolean
     */
    function validateUser($email, $password) {
        include_once '../Config.php';
        include_once './DbModules.php';

        $db = new DbModules;
        $test = new Config;
        $conn = $db->getConnection();
        $cmd = "select * from " . $test->getDB_NAME() . ".applicantsdetails where EmailAddress=\"" . $email . "\" and password =\"" . $password . "\"";
        $results_set = mysql_query($cmd, $conn) or die(mysql_error());

        if (mysql_num_rows($results_set) > 0) {
            $row = mysql_fetch_array($results_set);
            session_start();
            $_SESSION['email'] = $row['EmailAddress'];
            $_SESSION['applicantId'] = $row['ApplicantId'];
            $_SESSION['Grade'] = $row['Grade'];
            $_SESSION['userLevel']=$row['user_stage'];

            return true;
        } else {
            return false;
        }
    }

    /**
     * for validating staff by querying from staff db
     * @param type $email
     * @param type $password
     * @return boolean
     */
    function validateStaff($email, $password) {
        include_once '../Config.php';
        include_once './DbModules.php';

        $db = new DbModules;
        $test = new Config;

        $conn = $db->getConnection();
        $cmd = "select * from " . $test->getDB_NAME() . ".staffDetails"
                . " where email=\"" . $email . "\" and password =DES_ENCRYPT(\"" . $password . "\",'mine')";
        // $cmd=" select * from  " . $test->getDB_NAME() . ".staffDetails where email='mimi@mimi.com' and password =DES_ENCRYPT('123','mine')";
        $results_set = mysql_query($cmd, $conn) or die(mysql_error());
        if (mysql_num_rows($results_set) > 0) {
            $row = mysql_fetch_array($results_set);
            $name = $row['name'];
            $email = $row['email'];
            $userLevel = $row['userLevel'];
            
            session_start();
            $_SESSION['staff_id']
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
            $_SESSION['userLevel'] = $userLevel;


            return true;
        } else {
            return false;
        }
    }

    function addStaff($jsonSting) {

        include_once '../Config.php';
        include_once './DbModules.php';
        $db = new DbModules;
        $test = new Config;
        $p = json_decode($jsonSting, true);
        //echo $p['fname'];
        foreach ($p as $value) {
            echo $value;
        }
        $conn = $db->getConnection();
        $cmd = "select * from " . $test->getDB_NAME() . ".staffDetails where email=\"" . $p['email'] . "\"";
        $result = mysql_query($cmd);
        if (mysql_fetch_array($result) != null) {
            echo "The staff is  already registered";
        } else {

            $qeury = "INSERT INTO " . $test->getDB_NAME() . ".staffDetails (name,email,password,userLevel) "
                    . "VALUES ('" . $p['name'] . "','" . $p['email'] . "',DES_ENCRYPT('" . $p['password'] . "','mine'),'" . $p['userLevel'] . "')";
            mysql_query($qeury, $conn) or die(mysql_error());
            echo"registration successful";
        }
    }

    function setStaffSession($name, $email, $userLevel) {
        session_start();
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['userLevel'] = $userLevel;
    }

    function destroySession() {
        session_destroy();
    }

    function moreUserDetail($userId, $reqiredRow) {
        include_once '../Config.php';
        include_once './DbModules.php';
        $db = new DbModules;
        $test = new Config;

        $conn = $db->getConnection();
        $cmd = "select * from " . $test->getDB_NAME() . "applicantsdetails where ApplicantId=\"" . $userId . "\"";
        $results_set = mysql_query($cmd, $conn) or die(mysql_error());
        $data = mysql_fetch_assoc($results_set);
        $result = $data['$reqiredRow'];
        return $result;
    }

    function logout() {
        session_start();
        session_destroy();
       header("location:../index.php");
        
    }
}
