<?php

/**
 * Description of evaluation
 *
 * @author wndessy
 */
class evaluation {

    function LengthOfService($applicantId) {
        include_once './DbModules.php';
        $db = new DbModules;
        $yearsServed = $db->getStafllenthOfService($applicantId);
        if ($yearsServed <= 0 && $yearsServed <= 3)
            return 1;
        elseif ($yearsServed <= 4 && $yearsServed <= 6)
            return 3;
        elseif ($yearsServed <= 7 && $yearsServed <= 9)
            return 5;
        elseif ($yearsServed <= 10 && $yearsServed <= 12)
            return 8;
        else
            return 10;
    }

    function MaritalStatus($applicantId) {
        include_once '../Config.php';
        include_once './DbModules.php';
        $db = new DbModules;
        $test = new Config;
        $conn = $db->getConnection();
        $cmd = "select maritalStatus from " . $test->getDB_NAME() . ".applicantsdetails where ApplicantId=\"" . $applicantId . "\"";
        $maritalStatus = mysql_query($cmd, $conn) or die(mysql_error());
        if ($maritalStatus == 'single')
            $points = 2;
        else
            $points = 4;
        return $points;
    }

    function AgesofChildren($applicantId) {
        include_once './DbModules.php';
        $db = new DbModules();
        $agediff = $db->getAgesofChildren($applicantId);
        $points = 0;
        $finalpoints = 0;
        while ($row = mysql_fetch_array($agediff)) {
            $daydiff = $row['DATEDIFF(CURRENT_DATE,dob)'];
            $age = round($daydiff / 364);
            $Between0to5 = FALSE;
            $Between6to13 = FALSE;
            $Between14to25 = FALSE;
            if ($age <= 5) {
                $Between0to5 = TRUE;
            }
            if ($age >= 6 and $age <= 13) {
                $Between6to13 = TRUE;
            }
            if ($age >= 14 and $age <= 25) {
                $Between14to25 = TRUE;
            }

            if ($Between0to5 = TRUE) {
                $points = 3;
            } else if ($Between0to5 = FALSE and $Between6to13 = TRUE) {
                $points = 2;
            } else if ($Between0to5 = FALSE and $Between6to13 = FALSE and $Between14to25 = TRUE) {
                $points = 1;
            } else {
                $points = 0;
            }

            if ($finalpoints < $points) {
                $finalpoints = $points;
            }
        }
        return $finalpoints;
    }

    function familySize($applicantId) {
        include_once './DbModules.php';
        $db = new DbModules();
        $noOfChildren = $db->getFamilySize($applicantId);
        if ($noOfChildren <= 1 and $noOfChildren <= 2) {
            $points = 3;
        } elseif ($noOfChildren > 2) {
            $points = 8;
        } else {
            $points = 0;
        }
        return $points;
    }

    function natureOfDuty($applicantId) {
        include_once './DbModules.php';
        $db = new DbModules();
        $natureOfDuty = $db->getnatureOfDuty($applicantId);
        if ($natureOfDuty == 2) { //2 for esential services
            return 10;
        } elseif ($natureOfDuty == 3) {// 3 for head of department
            return 5;
        } else {
            return 3; //1 for any other staff
        }
    }

    function TotalPoints($applicantId) {
        $LengthOfService = $this->LengthOfService($applicantId);
        $MaritalStatus = $this->MaritalStatus($applicantId);
        $AgesofChildren = $this->AgesofChildren($applicantId);
        $familySize = $this->familySize($applicantId);
        $natureOfDuty = $this->natureOfDuty($applicantId);
        $Total = $LengthOfService + $MaritalStatus + $AgesofChildren + $familySize + $natureOfDuty;
        // echo "Total".$Total;
        return $Total;
    }

    function appliedForAHOuse($houeCategory) {
        $cmd = "select ApplicantId,HouseAppliedFor from " . $test->getDB_NAME() . ".houseapplications where HouseAppliedFor=\"" . $FreeRoom . "\"";
        //find the house then return true
    }

    function houseAvailable($houseCategory) {
        //find out if a given house category is available
    }

    /*
     *  get vacant houses
     * 
     * //for each vacant house{
     * select applicants for that housetype
     * for each applicant compute points and compare to get the highest points return the applicant
     * add the applicant to the allocation table
     */

    function allocateHouse() {
        include_once './DbModules.php';

        $db = new DbModules();
        $resultset = $db->getVacantHouses();
        //select the vacant houses
        while ($row = mysql_fetch_array($resultset)) {
            $unit_id = $row['unit_index'];
            $house_id = $row['house_id'];
            //get applicants for each house 
            $resultset2 = $db->getApplicantsForAHouse($house_id);
            $bestAplicantId = 0;
            $maxPoints = 0;

            while ($row2 = mysql_fetch_array($resultset2)) {

                $applicantId = $row2['ApplicantId'];
                //compute each total points
                $points = $this->TotalPoints($applicantId);
                //get the best applicant points
                if ($maxPoints < $points) {
                    $maxPoints = $points;
                    $bestAplicantId = $applicantId;
                }
                $db->allocateAHouse($bestAplicantId, $unit_id, $house_id);
            }
        }
    }

    function houseRenewDetails($reqiredRow) {
        include_once '../Config.php';
        include_once './DbModules.php';
        $db = new DbModules;
        $test = new Config;
        $conn = $db->getConnection();
         $cmd="select * from  house_applications natural join house_allocation "
              . "where ApplicantId=\"" . $_SESSION['applicantId'] . "\" ";
            $result = mysql_query($cmd, $conn) or die(mysql_error());
            $row = mysql_fetch_array($result);
           $result = $row[$reqiredRow];
        return $result;
    }

}
