<?php

class DbModules {

    function __construct() {
        
    }

    function getConnection() {
        include_once '../Config.php';
        $test = new Config();
        error_reporting(0);
        $conn = mysql_connect($test->getDB_HOST(), $test->getDB_USER(), $test->getDB_PASSWORD());

        mysql_select_db($test->getDB_NAME(), $conn);

        return $conn;
    }

    /*
     * for block or group of a[pplicants querrying 
     */

    function listAllApplicants() {
        include_once '../Config.php';
        $test = new Config;
        $conn = $this->getConnection();
        $cmd = "select * from applicantsdetails ";
        $results_set = mysql_query($cmd, $conn) or die(mysql_error());
        $row = mysql_fetch_array($results_set);
        return $results_set;
    }

    function listAllHouseApplications() {
        include_once '../Config.php';
        $test = new Config;
        $conn = $this->getConnection();
        $cmd = "select * from applicantsdetails "
                . "inner join houseapplicatiions ";
        $results_set = mysql_query($cmd, $conn) or die(mysql_error());
        return $results_set;
    }

    function listAllAllocation() {
        include_once '../Config.php';
        $test = new Config;
        $conn = $this->getConnection();
        $cmd = "select * from applicantsdetails "
                . "inner join houseapplicatiions "
                . "inner join houseallocation ";
        $results_set = mysql_query($cmd, $conn) or die(mysql_error());
        return $results_set;
    }

    function listallTenants() {
        include_once '../Config.php';
        $test = new Config;
        $conn = $this->getConnection();
        $cmd = "select * from applicantsdetails "
                . "inner join houseapplicatiions "
                . "inner join houseallocation "
                . "inner join housesletting";
        $results_set = mysql_query($cmd, $conn) or die(mysql_error());
        $row = mysql_fetch_array($results_set);
        return $row;
    }

    /*
     * for individual detail querying
     */

    function viewApplicantDetails($applicantId) {
        include_once '../Config.php';
        $test = new Config;
        $conn = $this->getConnection();
        $cmd = "select * from " . $test->getDB_NAME() . ".children where ApplicantId=\"" . $applicantId . "\" ";
        $row = mysql_query($cmd, $conn) or die(mysql_error());
        return $row;
    }

    function viewApplicantsChildren($applicantId) {
        include_once '../Config.php';
        $test = new Config;
        $conn = $this->getConnection();
        $cmd = "select * from " . $test->getDB_NAME() . ".children where ApplicantId=\"" . $applicantId . "\" ";
        $row = mysql_query($cmd, $conn) or die(mysql_error());
        return $row;
    }

    function applicantApprpovalStatus() {
        $test = new Config;
        $conn = $this->getConnection();
        $cmd = "select aprovalStatus from " . $test->getDB_NAME() . ".applicantsdetails where ApplicantId=\"" . $applicantId . "\" ";
        $results_set = mysql_query($cmd, $conn) or die(mysql_error());
        $row = mysql_fetch_array($results_set);
        return $row;
    }

    /*
     * actions by the applicants 
     */

    function addHouseApplication($house) {
        include_once '../Config.php';
        session_start();
        $test = new Config;
        $conn = $this->getConnection();

        $cmd = "select * from " . $test->getDB_NAME() . ".houseapplicatiions where ApplicantId=\"" . $_SESSION['applicantId'] . "\" and houseType =\"" . $house . "\"";
        $results_set = mysql_query($cmd, $conn) or die(mysql_error());

        if (mysql_num_rows($results_set) > 0) {
            echo "you have already aplied forthe selected  house";
        } else {
            $cmd = "insert Into " . $test->getDB_NAME() . ".houseapplicatiions(ApplicantId,houseType)"
                    . "VALUES ('" . $_SESSION['applicantId'] . "','" . $house . "')";
            mysql_query($cmd, $conn) or die(mysql_error());
        }
    }

    function applyForHouseRepair() {
        
    }

    /* actions on the applicant status 
     * 
     */

    function approveApplicant($applicantId) {
        include_once '../Config.php';
        $test = new Config;
        $conn = $this->getConnection();
        $cmd = "update table " . $test->getDB_NAME() . ".applicantsdetails set aprovalStatus='Approved' "
                . " where ApplicantId=\"" . $applicantId . "\"";
        mysql_query($cmd, $conn) or die(mysql_error());
    }

    function deApproveApplicant($applicantId) {
        include_once '../Config.php';
        session_start();
        $test = new Config;
        $conn = $this->getConnection();
        $cmd = "update table " . $test->getDB_NAME() . ".applicantsdetails set aprovalStatus='Not'  where ApplicantId=\"" . $applicantId . "\"";
        mysql_query($cmd, $conn) or die(mysql_error());
    }

    function approveHouseRepair($param) {
        
    }

    function disaproveHouseRepair($param) {
        
    }

    function getHousesAppliadFor($applicantId) {
        include_once '../Config.php';
        session_start();
        $test = new Config;
        $conn = $this->getConnection();
        $cmd = "select * from " . $test->getDB_NAME() . ".house_applications "
                . "inner join " . $test->getDB_NAME() . ".house_category "
                . "  where ApplicantId=\"" . $_SESSION['applicantId'] . "\" ";
        $results_set = mysql_query($cmd, $conn) or die(mysql_error());
        return $results_set;
    }

    /*
     * dealing with houses
     */

    function getHouseTypes() {
        include_once '../Config.php';
        $test = new Config;
        $conn = $this->getConnection();
        $cmd = "select * from " . $test->getDB_NAME() . ".house_types ";
        $results_set = mysql_query($cmd, $conn) or die(mysql_error());
        return $results_set;
    }
    

    function getHouseIndex($houseId) {
        include_once '../Config.php';
        $test = new Config;
        $conn = $this->getConnection();
        $cmd = "select * from " . $test->getDB_NAME() . ".house_types NATURAL JOIN ". $test->getDB_NAME() . ".house_units where  house_id=\"" . $houseId . "\"";
        $results_set = mysql_query($cmd, $conn) or die(mysql_error());
     return $results_set;
    }
 function getAHouseTypeDetail($houseId) {
        include_once '../Config.php';
        $test = new Config;
        $conn = $this->getConnection();
        $cmd = "select * from " . $test->getDB_NAME() . ".house_types "
                . " where  house_id=\"" . $houseId . "\"";
        $results_set = mysql_query($cmd, $conn) or die(mysql_error());
        return $results_set;
    }  
    
    
}
