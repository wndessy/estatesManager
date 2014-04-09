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
         $yearsServed= $db->getStafllenthOfService($applicantId);
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
        $db=new DbModules();
        $agediff=$db->getAgesofChildren($applicantId);
        $points = 0;
        $finalpoints = 0;
        while($row=  mysql_fetch_array($agediff)){
           $daydiff = $row['DATEDIFF(CURRENT_TIMESTAMP,dob)'];
           $age=round($daydiff/364);
    
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
        $noOfChildren=$db->getFamilySize($applicantId);
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
        $db= new DbModules();
        $natureOfDuty = $db->getnatureOfDuty($applicantId);
        echo $natureOfDuty;
        if ($natureOfDuty ==2) { //2 for esential services
            return 10;
        } elseif ($natureOfDuty ==3) {// 3 for head of department
            return 5;
        } else {
            return 3;//1 for any other staff
        }
    }

    function TotalPoints($applicantId) { 
       
      echo $this->LengthOfService($applicantId) ;
             // + $this->MaritalStatus($applicantId) +
            //  $this->AgesofChildren($applicantId) + $this->familySize($applicantId) 
             // + $this->natureOfDuty($applicantId);
        
       // $Total = $this->LengthOfService($applicantId) + $this->MaritalStatus($applicantId) + $this->AgesofChildren($applicantId) + $this->familySize($applicantId) + $this->natureOfDuty($applicantId);
      // echo "Total".$bestAplicantId;
        // return $Total;
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
           $resultset2 = $db->getApplicantsForAHouse($row['house_id']);
            $bestAplicantId = 0;
            $maxPoints = 0;
                while ($row2 = mysql_fetch_array($resultset2)){ 
                $applicantId = $row2['ApplicantId'];
               //compute each total points
                $points = $this->TotalPoints($applicantId);
                //get the best applicant points
                if ($maxPoints < $points) {
                    $maxPoints = $points;
                    $bestAplicantId = $applicantId;
                }
            }
            $db->allocateAHouse($bestAplicantId, $unit_id, $house_id);
            echo"brrr";
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
