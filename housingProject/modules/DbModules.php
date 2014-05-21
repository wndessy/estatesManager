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
        $cmd = "select * from " . $test->getDB_NAME() . ".applicantsdetails where ApplicantId=\"" . $applicantId . "\" ";
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

        $cmd = "select * from " . $test->getDB_NAME() . ".house_applications where ApplicantId=\"" . $_SESSION['applicantId'] . "\" and house_id =\"" . $house . "\"";
        $results_set = mysql_query($cmd, $conn) or die(mysql_error());

        if (mysql_num_rows($results_set) > 0) {
            echo "you have already aplied forthe selected  house";
        } else {
            $cmd = "insert Into " . $test->getDB_NAME() . ".house_applications(ApplicantId,house_id)"
                    . "VALUES ('" . $_SESSION['applicantId'] . "','" . $house . "')";
            mysql_query($cmd, $conn) or die(mysql_error());
        }
    }

    function applyForHouseRepair($category,$description) {
                include_once '../Config.php';
        session_start();
        $test = new Config;
        $conn = $this->getConnection();
      $cmd="select distinct let_id from  house_applications natural join house_allocation "
              . "natural join house_let_in_and_out where ApplicantId=\"" . $_SESSION['applicantId'] . "\" ";
            $result = mysql_query($cmd, $conn) or die(mysql_error());
            $row = mysql_fetch_array($result);
            $letId = $row['let_id'];
///has got a bug to be done later        
        $cmd = "insert Into " . $test->getDB_NAME() . ".houserepair(repair_type,tenant_description)values('".$category."','".$description. "')";
            mysql_query($cmd, $conn) or die(mysql_error());
            echo 'Succesfully applied for repair.check to see when the repair shall have been approved by estates department ';

        
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
                . "natural join " . $test->getDB_NAME() . ".house_types "
                . "where grade=\"" . $_SESSION['Grade'] . "\" ";
        $results_set = mysql_query($cmd, $conn) or die(mysql_error());
        return $results_set;
    }

    function getHousesAppliadFor() {
        include_once '../Config.php';
        $test = new Config;
        $conn = $this->getConnection();
        $cmd = "select * from " . $test->getDB_NAME() . ".house_applications "
                . "natural join " . $test->getDB_NAME() . ".house_types "
                . "where ApplicantId=\"" . $_SESSION['applicantId'] . "\" ";
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
        $cmd = "select * from"
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
        include_once '../Config.php';
        $test = new Config;
        $conn = $this->getConnection();
        $cmd = "select nature_of_duty  from " . $test->getDB_NAME() . ".applicantsdetails where ApplicantId=\"" . $applicantId . "\"";
        $result = mysql_query($cmd, $conn) or die(mysql_error());
        $row = mysql_fetch_array($result);
        $natureOfDuty = $row['nature_of_duty'];
        return $natureOfDuty;
    }
    
    
    
    function getLetinOrOutIndividuals($occupyStatus) {
             include_once '../Config.php';
        $test = new Config;
        $conn = $this->getConnection();
        $cmd = "select FirstName,LastName,allocation_Id,unit_id,house_id,name,unit_index from " . $test->getDB_NAME() .". applicantsdetails natural join house_applications natural join house_allocation natural join house_units natural join house_types "
             . "where house_units.ocupy_status =\"" .$occupyStatus. "\"";
        $result = mysql_query($cmd, $conn) or die(mysql_error());
        return $result;
    }

    function addLetintDetails($details) {
       
        include_once '../Config.php';
        $test = new Config;
        $conn = $this->getConnection(); 
        $p = json_decode($details, true);
        $details=$p['otherDetailString'];
       //an array in which allocationId=array[0];unitId=array[1];houseId=array[2];
        $array= explode(",",$details);
        
     
        $allocationId=$array[0];
        $letinOrOut="in";
        $unitId=$array[1];
        $officerIncharge="satiti sitati";
         $endDate = date('Y-m-d', mktime(0, 0, 0, date('d'), date('m') , date('Y')+5));
         
        $house_let_in_and_out = "insert into " . $test->getDB_NAME() . ".house_let_in_and_out "
                . "(allocation_Id,in_or_out,end_date,officer_incharge)"
                . " values('" . $allocationId. "','" . $letinOrOut. "','" . $endDate . "','" . $officerIncharge . "')";
         mysql_query($house_let_in_and_out, $conn) or die(mysql_error());
         
         $cmd = "select max(let_id)as myLetId from " . $test->getDB_NAME() . ".house_let_in_and_out";
        $result = mysql_query($cmd, $conn) or die(mysql_error());
        $row = mysql_fetch_array($result);
       $letid = $row['myLetId'];
           

        $house_general_condition = "insert into " . $test->getDB_NAME() . ".house_general_condition "
                . "(let_id,sockets,ceiling,switches,lights,floor,doorLock,wals,no_of_keys) values"
                . "('" . $letid . "','" . $p['wholeHouseDetails:Sockets'] . "','" . $p['wholeHouseDetails:Ceilings'] . "',"
                . "'" . $p['wholeHouseDetails:Switches'] . "','" . $p['wholeHouseDetails:Lights'] . "','" . $p['wholeHouseDetails:Floor'] . "',"
                . "'" . $p['wholeHouseDetails:Door'] . "','" . $p['wholeHouseDetails:Walls'] . "','" . $p['wholeHouseDetails:noOfKeys'] . "')";
        mysql_query($house_general_condition, $conn) or die(mysql_error());
        $rooms_sittingroom = "insert into " . $test->getDB_NAME() . ".rooms_sittingroom "
                . "(let_id,sockets,ceiling,switches,lights,floor,door,walls) values"
                . "('" . $letid . "','" . $p['Sittingroom:Sockets'] . "','" . $p['Sittingroom:Ceiling'] . "',"
                . "'" . $p['Sittingroom:Switches'] . "','" . $p['Sittingroom:Lights'] . "',"
                . "'" . $p['Sittingroom:Floor'] ."','" . $p['Sittingroom:Door'] ."','" . $p['Sittingroom:Walls'] ."')";
        mysql_query($rooms_sittingroom, $conn) or die(mysql_error());

        $rooms_kitchen = "insert into " . $test->getDB_NAME() . ".rooms_kitchen "
                . "(let_id,electrical,plumbing,tiles) values"
                . "('" . $letid . "','" . $p['Kitchen:Electrical'] . "','" . $p['Kitchen:Plumbing'] . "',"
                . "'" . $p['Kitchen:Tiles'] . "')";
        mysql_query($rooms_kitchen, $conn) or die(mysql_error());

        $rooms_toilet = "insert into " . $test->getDB_NAME() . ".rooms_toilet "
                . "(let_id,electrical,plumbing,tiles) values"
                . "('" . $letid . "','" . $p['Toilet:Electrical'] . "','" . $p['Toilet:Plumbing'] . "',"
                . "'" . $p['Toilet:Tiles'] . "')";
        mysql_query($rooms_toilet, $conn) or die(mysql_error());

        $rooms_bathroom = "insert into " . $test->getDB_NAME() . ".rooms_bathroom "
                . "(let_id,electrical,plumbing,tiles) values"
                . "('" . $letid . "','" . $p['Bathroom:Electrical'] . "','" . $p['Bathroom:Plumbing'] . "',"
                . "'" . $p['Bathroom:Tiles'] . "')";
        mysql_query($rooms_bathroom, $conn) or die(mysql_error());
        
       

        if (array_key_exists('Bedroom1:Sockets', $p)) {
            $rooms_bedroom_1 = "insert into " . $test->getDB_NAME() . ".rooms_bedroom_1 "
                . "(let_id,sockets,ceiling,switches,lights,floor,door,walls) values"
                . "('" . $letid . "','" . $p['Bedroom1:Sockets'] . "','" . $p['Bedroom1:Ceilings'] . "',"
                . "'" . $p['Bedroom1:Switches'] . "','" . $p['Bedroom1:Lights'] . "',"
                    . "'" . $p['Bedroom1:Floor'] ."','" . $p['Bedroom1:Door'] ."','" . $p['Bedroom1:Walls'] ."')";
        mysql_query($rooms_bedroom_1, $conn) or die(mysql_error());

            
        }

        if (array_key_exists('Bedroom2:Sockets', $p)) {
            $rooms_bedroom_2 = "insert into " . $test->getDB_NAME() . ".rooms_bedroom_2 "
                . "(let_id,sockets,ceiling,switches,lights,floor,door,walls) values"
                . "('" . $letid . "','" . $p['Bedroom2:Sockets'] . "','" . $p['Bedroom2:Ceilings'] . "',"
                . "'" . $p['Bedroom2:Switches'] . "','" . $p['Bedroom2:Lights'] . "',"
                    . "'" . $p['Bedroom2:Floor'] ."','" . $p['Bedroom2:Door'] ."','" . $p['Bedroom2:Walls'] ."')";
        mysql_query($rooms_bedroom_2, $conn) or die(mysql_error());

            
        }
         if (array_key_exists('Bedroom3:Sockets', $p)) {
              $rooms_bedroom_3 = "insert into " . $test->getDB_NAME() . ".rooms_bedroom_3 "
                . "(let_id,sockets,ceiling,switches,lights,floor,door,walls) values"
                . "('" . $letid . "','" . $p['Bedroom3:Sockets'] . "','" . $p['Bedroom3:Ceilings'] . "',"
                . "'" . $p['Bedroom3:Switches'] . "','" . $p['Bedroom3:Lights'] . "',"
                . "'" . $p['Bedroom3:Floor'] ."','" . $p['Bedroom3:Door'] ."','" . $p['Bedroom3:Walls'] ."')";
        mysql_query($rooms_bedroom_3, $conn) or die(mysql_error());
            
        }
        if (array_key_exists('Bedroom4:Sockets', $p)) {
          $rooms_bedroom_4 = "insert into " . $test->getDB_NAME() . ".rooms_bedroom_4 "
                . "(let_id,sockets,ceiling,switches,lights,floor,door,walls) values"
                . "('" . $letid . "','" . $p['Bedroom4:Sockets'] . "','" . $p['Bedroom4:Ceilings'] . "',"
                . "'" . $p['Bedroom4:Switches'] . "','" . $p['Bedroom4:Lights'] . "',"
                  . "'" . $p['Bedroom4:Floor'] ."','" . $p['Bedroom4:Door'] ."','" . $p['Bedroom4:Walls'] ."')";
        mysql_query($rooms_bedroom_4, $conn) or die(mysql_error());   
            
            
        }
        if (array_key_exists('Bedroom5:Sockets', $p)) {
            $rooms_bedroom_5 = "insert into " . $test->getDB_NAME() . ".rooms_bedroom_5 "
                . "(let_id,sockets,ceiling,switches,lights,floor,door,walls) values"
                . "('" . $letid . "','" . $p['Bedroom5:Sockets'] . "','" . $p['Bedroom5:Ceilings'] . "',"
                . "'" . $p['Bedroom5:Switches'] . "','" . $p['Bedroom5:Lights'] . "',"
                    . "'" . $p['Bedroom5:Floor'] ."','" . $p['Bedroom5:Door'] ."','" . $p['Bedroom5:Walls'] ."')";
        mysql_query($rooms_bedroom_5, $conn) or die(mysql_error());   
          
        }

        if (array_key_exists('SQ:Sockets', $p)) {
             $rooms_servant_quaters= "insert into " . $test->getDB_NAME() . ".rooms_servant_quaters "
                . "(let_id,sockets,ceiling,switches,lights,floor,door,walls,plumbing) values"
                . "('" . $letid . "','" . $p['SQ:Sockets'] . "','" . $p['SQ:Ceilings'] . "',"
                . "'" . $p['SQ:Switches'] . "','" . $p['SQ:Lights'] . "',"
                     . "'" . $p['SQ:Floor'] ."','" . $p['SQ:Door'] ."','" . $p['SQ:Walls'] ."','" . $p['SQ:Plumbing'] ."')";
        mysql_query($rooms_servant_quaters, $conn) or die(mysql_error());   
          
        }

       if (array_key_exists('compound:fence', $p)) {
            
           $house_compound= "insert into " . $test->getDB_NAME() .".rooms_servant_quaters "
                . "(let_id,fence,garden,roof,etc) values"
                . "('" . $letid . "','" . $p['compound:fence'] . "','" . $p['compound:garden'] . "',"
                . "'" . $p['compound:roof'] . "','" . $p['compound:etc'] . "'";
             mysql_query($house_compound, $conn) or die(mysql_error());  
          
          
        }
        
       if ($letinOrOut==="in") {
           $ocupyStatus="occupied";   
       }
       else {
           $ocupyStatus="vacant";
       }
    //change the status of a house to occupied
         $changeOcupyStatus= "update  " . $test->getDB_NAME() . ".house_units set"
                 . " ocupy_status=\"".$ocupyStatus."\" where unit_id=\"".$unitId."\"";
          mysql_query($changeOcupyStatus, $conn) or die(mysql_error());   
          
          
        
        }
     
    }
