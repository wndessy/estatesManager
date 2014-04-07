<?php

/**
 * Description of dataDispaly
 * * for desplay formating and the html outlook of the data from the database

 * @author wndessy
 */
class dataDispaly {

    private $eval;

    function __construct() {
        include_once '../modules/evaluation.php';
        $eval = new evaluation();
    }

    function applicantsList() {
        ?>
        <script type="text/javascript" src="../jquery/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="../js/general.js"></script>
        <link rel="stylesheet" href="../css/customAlerts.css" type="text/css"/>
        <script type="text/javascript" src="../js/customAlertWindows.js"></script>
        <div class="container" id="personalDetais">
            <div class = "header" > Applicants </div>
            <table>
                <tr>
                    <td> First name </td>
                    <td> Last name </td>
                    <td> Gender </td>
                    <td>Designation</td>
                    <td>Grade</td>
                    <td>Department</td>
                    <td>Approval Status</td>
                    <td>View Button</td > 
                </tr>
                <?php
                include_once './DbModules.php';
                $db = new DbModules();
                $x = $db->listAllApplicants();

                while ($row = mysql_fetch_array($x)) {
                    ?>


                    <tr >
                        <td ><?php echo $row['FirstName']; ?> </td>

                        <td ><?php echo $row['LastName']; ?> </td>
                        <td ><?php echo $row['Gender']; ?> </td>
                        <td ><?php echo $row['Designation']; ?> </td>
                        <td ><?php echo $row['Grade']; ?> </td>
                        <td><?php echo $row['Department']; ?> </td>
                        <td ><?php echo $row['aprovalStatus']; ?> </td>
                        <td > <input type = "button" class = "exploreUser" id = "<?php echo$row['ApplicantId']; ?>" value = "Explore" /> </td>
                    </tr>
                <?php } ?>
            </table>

        </div>
        <div class = "container" id = "exploreWindow" >
            <input type = "button" value = "Ok" onclick = "cancelDiv()" style = "float: right; margin-right: 20px;
                   font-weight: bold; width: 50px" />
            <input type = "button" value = "click me" onclick = "ShowDiv()" />
            <script type = "text/javascript" >
                $(document).ready(function() {
                    $("[type=button]").live('click', General.buttonClicked);
                });</script>
            <?php
        }

        function housesAppliedForList($applicantId) {
            include_once './DbModules.php';
            $db = new DbModules();
            $x = $db->getHousesAppliadFor($applicantId);
            if ($x == null) {
                echo"there is no  house applied for yet";
            } else {
                ?>

                <table>
                    <tr>
                        <td>House Type</td><td>Rent</td><td>description</td>
                    </tr>
                    <?php while ($row = mysql_fetch_array($x)) { ?>
                        <tr>
                            <td><?php $row ['houseType']; ?></td>
                            <td><?php $row ['rent']; ?></td>
                            <td><?php $row ['description']; ?></td>
                        </tr>
                    <?php } ?>
                </table>
                <?php
            }
        }

        function tenantsList() {
            ?>
            <script type="text/javascript" src="../jquery/jquery-1.8.3.min.js"></script>
            <script type="text/javascript" src="../js/general.js"></script>
            <script type="text/javascript" src="../jquery/jquery.leanModal.min.js"></script>
            <link rel="stylesheet" href="../css/customAlerts.css" type="text/css"/>
            <div class="container" id="personalDetais">
                <div class="header">Applicants</div>
                <table>
                    <tr><td>First name <td>Last name</td>View Button</td></tr>
                    <?php
                    include_once './DbModules.php';
                    $db = new DbModules();
                    $x = $db->listallTenants();

                    while ($row = mysql_fetch_array($x)) {
                        ?>


                        <tr>
                            <td><?php echo $row['FirstName']; ?></td>

                            <td><?php echo $row['LastName']; ?></td>
                            <td><?php echo $row['Gender']; ?></td>
                            <td><?php echo $row['Designation']; ?></td>
                            <td><?php echo $row['Grade']; ?></td>
                            <td><?php echo $row['Department']; ?></td>
                            <td><?php echo $row['aprovalStatus']; ?></td>
                            <td><input type="button" class="exploreUser" id="<?php echo$row['ApplicantId']; ?>" value="Explore"/></td>
                        </tr>
                    <?php } ?>
                </table>

            </div>
            <script type="text/javascript">
                $(document).ready(function() {
                    $("[type=button]").live('click', General.buttonClicked);
                });</script>
            <?php
        }

        function houseAallocationList() {
            ?>
            <script type="text/javascript" src="../jquery/jquery-1.8.3.min.js"></script>
            <script type="text/javascript" src="../js/general.js"></script>
            <script type="text/javascript" src="../jquery/jquery.leanModal.min.js"></script>
            <link rel="stylesheet" href="../css/customAlerts.css" type="text/css"/>
            <div><input type="button" class="triggerHouseAllocation">allocate houses</div></div>
        <div class="container" id="personalDetais">
            <div class="header">Applicants</div>
            <table>
               <tr>
                    <td> First name </td>
                    <td> Last name </td>
                    <td>Designation</td>
                    <td>Grade</td>
                    <td>houses applied for</td>
                    <td>View Button</td > 
                </tr>
                <?php
                include_once './DbModules.php';
                $db = new DbModules();
                $x = $db->listAllHouseApplications();

                while ($row = mysql_fetch_array($x)) {
                    ?>


                    <tr>
                        <td><?php echo $row['FirstName']; ?></td>
                        <td><?php echo $row['LastName']; ?></td>
                        <td><?php echo $row['Designation']; ?></td>
                        <td><?php echo $row['Grade']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><input type="button" class="exploreUser" id="<?php echo$row['ApplicantId']; ?>" value="Explore"/></td>
                    </tr>
                <?php } ?>
            </table>

        </div>
        <script type="text/javascript">
                $(document).ready(function() {
                    $("[type=button]").live('click', General.buttonClicked);
                });
        </script>
        <?php
    }

    /*
     * for displaying the results after computing the points for each individual 
     * 
     */

    function computedpointsDisplay($applicantId) {
        include_once '../modules/evaluation.php.php';
        $eval = new evaluation();
        ?>
        <link rel="stylesheet" href="../css/customAlerts.css" type="text/css"/>
        <div class="container" id="personalDetais">
            <div class="header">Applicants</div>
            <table>
                <tr><td> <td>Length Of Service</td><?php $eval->LengthOfService($applicantId) ?></td></tr>
                <tr><td> <td>Marital Status</td><?php $eval->MaritalStatus($applicantId) ?></td></tr>
                <tr><td> <td>Ages of Children</td><?php $eval->AgesofChildren($applicantId) ?></td></tr>
                <tr><td> <td>family Size</td><?php $eval->familySize($applicantId) ?></td></tr>
                <tr><td> <td>nature Of Duty</td><?php $eval->natureOfDuty($applicantId) ?></td></tr>
                <tr><td> <td>Total Points</td><?php $eval->TotalPoints($applicantId) ?></td></tr>
            </table>
        </div>

        <?php
    }

    /*
     * for displaying the housing officers pages
     */

    function pageForHouseCondition() {
        include_once '../modules/DbModules.php';
        $db = new DbModules();
        ?>
        <script src="../js/general.js" type="text/javascript"></script>
        <script src="../jquery/jquery-1.8.3.min.js" type="text/javascript"></script>
        <div class="container">
            <label >House Type</label>
            <select id="houseTypeselect">
                <option value='-1' selected='true '> --Choose--</option>
                <?php
                $result = $db->getHouseTypes();
                while ($row = mysql_fetch_array($result)) {
                    $houseType = $row ['name'];
                    $houseId = $row['house_id'];
                    ?>
                    <option  value='<?php echo $houseId; ?>'> <?php echo $houseType; ?> </option>
                <?php }
                ?>
            </select>
            <div id="houseNumberDiv">

            </div>
            <div id="DisplayettingForm">

            </div>
        </div>

        <script type="text/javascript">
                $(document).ready(function() {
                    $("div select").live('change', General.selectionChanged);
                });
        </script>
        <?php
    }

    function getHouseNumberSelectBox($houseType) {
        include_once './DbModules.php';
        $db = new DbModules();
        $result = $db->getHouseIndex($houseType);
        $values = "<label>House Number</label>\n"
                . "<select id=\"houseNumberSelect\">"
                . "<option  value='-1'> --Choose--</option>\n";

        while ($row = mysql_fetch_array($result)) {
            $unitIndex = $row ['unit_index'];
            $values .="<option value=\"" . $unitIndex . "\">" . $unitIndex . "</option>\n";
        }
        $values.="</select>";
        echo $values;
        ?>
        <script type="text/javascript">
            $(document).ready(function() {
                $("div select").live('change', General.selectionChanged);
            });
        </script>


    <?php
    }

    function displayLettingForm($houseType, $houseId) {
        include_once '../modules/DbModules.php';
        include_once './houseClasses/houseSpecific.php';
        $db = new DbModules();
        $result = $db->getAHouseTypeDetail($houseType);
        $row = mysql_fetch_array($result);
        /* print_r($row); 
          echo$row['name'];
          echo $row['hasCompound'];
          echo$row['noOfUnits'];
          echo$row['noOfBedroms'];
          echo$row['hasSQ'];
          echo$row['qualifyingGrade']; */
        ?>
        <script src="../js/general.js" type="text/javascript"></script>
        <script src="../jquery/jquery-1.8.3.min.js" type="text/javascript"></script>
        <div class="container">        
            <div class="header"> house type specific details  </div>
            <?php
            $hasSQ = trim($row['hasSQ']);
            echo $hasSQ;
            echo $row['hasCompound'];
            $hasCompound = trim($row['hasCompound']);
            $hs = new houseSpecific($houseType, $houseId);

            if ($hasCompound === 'true' and $hasSQ === 'true') {
                $hs->houseConditionNoCompoundNoSq();
            } else if ($hasCompound == 'true' and $hasSQ == 'false') {
                $hs->houseConditionNoCompoundNoSq();
            } else if ($hasCompound == 'false') {
                $hs->houseConditionNoCompoundNoSq();
            }
            ?>
        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                $("div select").live('change', General.selectionChanged);
            });
        </script>
        <?php
    }

}
