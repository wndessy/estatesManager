<?php

/**
 * Description of evaluation
 *
 * @author wndessy
 */
class evaluation {

    function LengthOfService($applicantId) {
        include_once '../Config.php';
        include_once './DbModules.php';
        $db = new DbModules;
        $test = new Config;
        $conn = $db->getConnection();
        $cmd = "select CommencementOfDuty from " . $test->getDB_NAME() . ".applicantsdetails where ApplicantId=\"" . $applicantId . "\"";
        $results_set = mysql_query($cmd, $conn) or die(mysql_error());
        $yearsServed = date() - $results_set;
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
        include_once '../Config.php';
        include_once './DbModules.php';
        $db = new DbModules;
        $test = new Config;
        $conn = $db->getConnection();


        $cmd = "select dob from " . $test->getDB_NAME() . ".children where ApplicantId=\"" . $applicantId . "\"";
        $points = 0;
        $finalpoints = 0;
        while ($age = mysql_fetch_array($cmd)) {
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
        $cmd = "select count from " . $test->getDB_NAME() . ".applicantsdetails where ApplicantId=\"" . $applicantId . "\"";
        $noOfChildren = mysql_query($cmd, $conn) or die(mysql_error());
        if ($noOfChildren <= 1 and $noOfChildren <= 2) {
            $points = 3;
        } elseif ($noOfChildren > 2) {
            $points = 8;
        } else {
            $points = 0;
        }
        return $points;
    }

    function natureOfDuty($a) {
        $natureOfDuty = NULL;
        if ($natureOfDuty === 'Essential services') {
            return 10;
        } elseif ($natureOfDuty === 'Head of Department') {
            return 5;
        } else {
            return 3;
        }
    }

    function TotalPoints($applicantId) {
        $Total = LengthOfService($applicant) + MaritalStatus($applicant) + AgesofChildren($applicant) + familySize($applicant) + natureOfDuty($applicant);
        return $Total;
    }

    /*
     * for allocating a room
     */

    function alloacateRoom($FreeRoom) {
//query for individuals with the highest points 
//check the free houses
//select the highest house and allocate.if not any qualified move to the next individual       

        include_once '../Config.php';
        include_once './DbModules.php';
        $db = new DbModules;
        $test = new Config;
        $conn = $db->getConnection();

        if ($FreeRoom == CH) {
            allocateHouse(CH, $applicantId);
            //query for persons of category 1-6    
        } elseif ($FreeRoom == CF) {
            allocateHouse(CF, $applicantId);
            //query for category 7-10
        } elseif ($FreeRoom == BF) {
            if (appliedForAHOuse(BH) and appliedForAHOuse(AH) and houseAvailable(AH)) {
                allocateHouse(AH, $applicantId);
            } elseif (appliedForAHOuse(BH) and houseAvailable(BH)) {
                allocateHouse(BH, $applicantId);
            } elseif (appliedForAHOuse(AH) and houseAvailable(AH)) {
                allocateHouse(AH, $applicantId);
            } else {
                allocateHouse(BF, $applicantId);
            }
        } elseif ($FreeRoom == BH) {
            if (appliedForAHOuse(AH) and houseAvailable(AH)) {
                allocateHouse(AH, $applicantId);
            } else {
                allocateHouse(BH, $applicantId);
            }
        } elseif ($FreeRoom == AH) {
            allocateHouse(AH, $applicantId);
        }
    }

    function appliedForAHOuse($houeCategory) {
        $cmd = "select ApplicantId,HouseAppliedFor from " . $test->getDB_NAME() . ".houseapplications where HouseAppliedFor=\"" . $FreeRoom . "\"";
        //find the house then return true
    }

    function houseAvailable($houseCategory) {
        //find out if a given house category is available
    }

    function allocateHouse() {
        include_once './DbModules.php';
        $db = new DbModules();
        /*
         *  get vacant houses
         * 
         * //for each vacant house{
         * select applicants for that housetype
         * for each applicant compute points and compare to get the highest points return the applicant
         * add the applicant to the allocation table
         */

        $resultset = $db->getVacantHouses();
        while ($row = mysql_fetch_array($resultset)) {
            $unit_id = $row['unit_id'];
            $house_id = $row['house_id'];
            $resultset2 = $db->getApplicantForAHouse($row['house_id']);
            $bestAplicantId = 0;
            $maxPoints = 0;
            while ($row2 = mysql_fetch_array($resultset2)) {
                $applicantId = $row2['ApplicantId'];
                $points = $this->TotalPoints($applicantId);
                if ($maxPoints < $points) {
                    $maxPoints = $points;
                    $bestAplicantId = $applicantId;
                }
            }
            $db->allocateAHouse($applicantId, $unit_id, $house_id);
        }
    }

    function houseRenewDetails($applicantId, $reqiredRow) {
        include_once '../Config.php';
        include_once './DbModules.php';
        $db = new DbModules;
        $test = new Config;
        $conn = $db->getConnection();
        $cmd = "select * from " . $test->getDB_NAME() . ".housesletting where applicant id=\"" . $applicantId . "\"";
        $results_set = mysql_query($cmd, $conn) or die(mysql_error());
        $data = mysql_fetch_assoc($results_set);
        $result = $data[$reqiredRow];
        return $result;
    }

}
