<?php

class DbModules {

    function __construct() {
        
    }

    function getConnection() {
        include_once '../Config.php';
        $test = new Config();
        //error_reporting(0);
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
        //theta join house alocation;
        $results_set = mysql_query($cmd, $conn) or die(mysql_error());
        $row = mysql_fetch_array($results_set);
        return $results_set;
    }

    function listAllHouseApplications() {
        include_once '../Config.php';
        $test = new Config;
        $conn = $this->getConnection();
        $cmd = "select * from applicantsdetails "
                . "natural join  house_applications "
                . "natural join  house_types ";
        $results_set = mysql_query($cmd, $conn) or die(mysql_error());
        return $results_set;
    }

    function listAllAllocation() {
        include_once '../Config.php';
        $test = new Config;
        $conn = $this->getConnection();
        $cmd = "select * from applicantsdetails "
                . "inner join house_applications "
                . "inner join houseallocation ";
        $results_set = mysql_query($cmd, $conn) or die(mysql_error());
        return $results_set;
    }

    function listallTenants() {
        include_once '../Config.php';
        $test = new Config;
        $conn = $this->getConnection();
        $cmd = "select * from applicantsdetails "
                . "inner join house_applications "
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

        $cmd = "select * from " . $test->getDB_NAME() . ".house_applications where ApplicantId=\"" . $_SESSION['applicantId'] . "\" and houseType =\"" . $house . "\"";
        $results_set = mysql_query($cmd, $conn) or die(mysql_error());

        if (mysql_num_rows($results_set) > 0) {
            echo "you have already aplied forthe selected  house";
        } else {
            $cmd = "insert Into " . $test->getDB_NAME() . ".house_applications(ApplicantId,houseType)"
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

    function houseToAplyFor() {

        include_once '../Config.php';
        $test = new Config;
        $conn = $this->getConnection();
        $cmd = "select * from " . $test->getDB_NAME() . ".house_qualifying_grade "
                . "inner join " . $test->getDB_NAME() . ".house_types "
                . "where grade=\"" . $_SESSION['Grade'] . "\" ";
        $results_set = mysql_query($cmd, $conn) or die(mysql_error());
        return $results_set;
    }

    function getHousesAppliadFor($applicantId) {
        include_once '../Config.php';
        $test = new Config;
        $conn = $this->getConnection();
        $cmd = "select * from " . $test->getDB_NAME() . ".house_applications "
                . "natural join " . $test->getDB_NAME() . ".house_types "
                . "where ApplicantId=\"" . $applicantId . "\" ";
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
        $cmd = "select * from " . $test->getDB_NAME() . ".house_types NATURAL JOIN " . $test->getDB_NAME() . ".house_units where  house_id=\"" . $houseId . "\"";
        $results_set = mysql_query($cmd, $conn) or die(mysql_error());
        return $results_set;
    }

    function getAHouseTypeDetail($id) {
        include_once '../Config.php';
        $test = new Config;
        $conn = $this->getConnection();
        $cmd = "select * from  " . $test->getDB_NAME() . ".house_types"
                . " where  house_id = \"" . $id . "\"";
        $results_set = mysql_query($cmd, $conn) or die(mysql_error());
        return $results_set;
    }

    function getVacantHouses() {
        include_once '../Config.php';
        $test = new Config;
        $conn = $this->getConnection();
        $cmd = "select * from  " . $test->getDB_NAME() . ".house_units"
                . " where  ocupy_status='vacant'";
        $results_set = mysql_query($cmd, $conn) or die(mysql_error());
        return $results_set;
    }

    function getApplicantsForAHouse($houseTypeId) {
        include_once '../Config.php';
        $test = new Config;
        $conn = $this->getConnection();
        $cmd="select * from"
                . " applicantsdetails natural join house_applications "
                . "left join house_allocation natural join house_types "
                . "on house_applications.aplicationId=house_allocation.applicationId"
                . " where house_allocation.applicationId is null "
                . "and house_applications.house_id=\"" . $houseTypeId . "\"";
             
        $results_set = mysql_query($cmd, $conn) or die(mysql_error());
        return $results_set;
    }

    function allocateAHouse($applicantId, $unit_Id, $houseTypeId) {
        //echo $applicantId;
        include_once '../Config.php';
        $test = new Config;
        $conn = $this->getConnection();
        $cmd1 = "select aplicationId from  " . $test->getDB_NAME() . ".house_applications "
                . " where ApplicantId=\"" . $applicantId . "\" and  house_id=\"" . $houseTypeId . "\"";
        $result = mysql_query($cmd1, $conn) or die(mysql_error());
        $row1 = mysql_fetch_array($result);
        $applicationId = $row1['aplicationId'];

        $cmd = "insert into " . $test->getDB_NAME() . ".house_allocation "
                . "(applicationId,unit_id)"
                . " values ('" . $applicationId . "','" . $applicantId . "')";
        $results_set = mysql_query($cmd, $conn) or die(mysql_error());
        return $results_set;
    }

    /*
     * gets the commencement duty and rounds it off to the nererest
     */

    function getStafllenthOfService($applicantId) {
        include_once '../Config.php';
        $db = new DbModules;
        $test = new Config;
        $conn = $db->getConnection();
        $cmd = "SELECT CommencementOfDuty,DATEDIFF(CURRENT_TIMESTAMP,CommencementOfDuty) FROM " . $test->getDB_NAME() . ".applicantsdetails "
                . " where ApplicantId=\"" . $applicantId . "\"";

        $result = mysql_query($cmd, $conn) or die(mysql_error());

        return $result;
    }

    function getAgesofChildren($applicantId) {
        include_once '../Config.php';
        $test = new Config;
        $conn = $this->getConnection();
        $cmd = "SELECT fname, dob,DATEDIFF(CURRENT_DATE,dob) FROM " . $test->getDB_NAME() . ".children "
                . " where ApplicantId=\"" . $applicantId . "\"";
        $result = mysql_query($cmd, $conn) or die(mysql_error());
        return $result;
    }

    function getFamilySize($applicantId) {
        include_once '../Config.php';
        $test = new Config;
        $conn = $this->getConnection();
        $cmd = "select count(*) from " . $test->getDB_NAME() . ".children"
                . " where ApplicantId=\"" . $applicantId . "\"";
        $result = mysql_query($cmd, $conn) or die(mysql_error());
        $row = mysql_fetch_array($result);
        $noOfChildren = $row['count(*)'];
        return $noOfChildren;
    }

    function getnatureOfDuty($applicantId) {
        $test = new Config;
        $conn = $this->getConnection();
        $cmd = "select nature_of_duty  from " . $test->getDB_NAME() . ".applicantsdetails where ApplicantId=\"" . $applicantId . "\"";
        $result = mysql_query($cmd, $conn) or die(mysql_error());
        $row = mysql_fetch_array($result);
        $natureOfDuty = $row['nature_of_duty'];
        return $natureOfDuty;
    }

}
