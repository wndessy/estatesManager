<?php

/**
 * Description of dataDispaly
 * * for desplay formating and the html outlook of the data from the database

 * @author wndessy
 */
class dataDispaly {

    function applicantsList() {
        ?>

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
                });
            </script>
            <?php
        }

        function housesAppliedForList() {
            include_once './Forms.php';
            include_once './DbModules.php';
            $db = new DbModules();
            $forms = new Forms();
            $forms->login("user");
            ?>
            <div class="main_container">
                <div class="center_content">
                    <?php
                    $result_set = $db->getHousesAppliadFor();
                    if ($x = NULL) {
                        echo"you have not applied for any house yet";
                    } else {
                        ?>
                        <table>
                            <tr>
                                <td>House Type</td><td>Rent</td><td>description</td>
                            </tr> 
                            <?php while ($row = mysql_fetch_array($result_set)) {
                                ?>

                                <tr>
                                    <td><?php echo $row ['name']; ?></td>
                                    <td><?php echo $row ['rent']; ?></td>
                                    <td><?php echo $row ['description']; ?></td>
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

                function houseApplicationList() {
                    ?>
                    <script type="text/javascript" src="../jquery/jquery-1.8.3.min.js"></script>
                    <script type="text/javascript" src="../js/general.js"></script>
                    <script type="text/javascript" src="../jquery/jquery.leanModal.min.js"></script>
                    <link rel="stylesheet" href="../css/customAlerts.css" type="text/css"/>
                    <div class="container" id="personalDetais">
                        <div class="header">Applicants</div>
                        <table>
                            <tr><td>First name </td>
                                <td>Last name</td>
                                <td>Designation</td>
                                <td>Department</td>
                                <td>Houses Applied</td>
                                <td>View Button</td>
                            </tr>

                            <?php
                            include_once './DbModules.php';
                            $db = new DbModules();
                            $x = $db->listAllApplicants();


                            while ($row = mysql_fetch_array($x)) {
                                ?>
                                <tr>
                                    <td><?php echo $row['FirstName']; ?></td>
                                    <td><?php echo $row['LastName']; ?></td>
                                    <td><?php echo $row['Designation']; ?></td>
                                    <td><?php echo $row['Department']; ?></td>
                                    <td>
                                        <?php
                                        $house = $db->getHousesAppliadFor($row['ApplicantId']);
                                        while ($row2 = mysql_fetch_array($house)) {
                                            echo $row2['name'] . ",";
                                        }
                                        ?>
                                    </td>
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
                    <div><input type="button" class="triggerHouseAllocation"value="allocate houses"/></div></div>
                <div class="container" id="personalDetais">
                    <div class="header">Applicants</div>
                    <table>
                        <tr>
                            <td> First name </td>
                            <td> Last name </td>
                            <td> Designation</td>
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
                <html>
                    <head>
                        <meta charset="utf-8">
                        <script src="../jquery/jquery-1.8.3.min.js" type="text/javascript"></script>
                        <script src="../js/general.js" type="text/javascript"></script>
                        <link href="../css/popup.css" rel="stylesheet" type="text/css" media="all" />
                    </head>
                    <body>
                        <div class="container">
                            <label >House Type</label>
                            <select id="houseTypeselect">
                                <option value='-1' selected="true"> --Choose--</option>
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

                            <div id="housesForLetting" class="container">
                                <td> <input type="hidden" id="letInOrOut" value="<?php echo $letinOrOut; ?> "/>
                                    <table>
                                        <tr>
                                            <td>Applicant Name</td>
                                            <td> house to let in</td>
                                            <td> </td>
                                        </tr>

                                        <?php
                                        $myresultSet = $db->getLetinOrOutIndividuals("vacant");
                                        while ($row = mysql_fetch_array($myresultSet)) {
                                            ?>
                                            <tr> <td> <?php echo $row ['FirstName'] . "  " . $row ['LastName'] ?> </td>
                                                <td> <?php echo $row['name'] . " " . $row['unit_index']; ?></td>

                                                <td>  <input type="button" id="<?php echo $row ['allocation_Id'] . " " . $row ['unit_id'] . " " . $row['house_id']; ?>" value="Let in tenant" class="loadLetForm">
                                                </td>
                                            </tr>
                                        </table>
                                    <?php } ?>

                            </div>
                            <div id = "toPopup">
                                <div class = "close"></div>
                                <span class = "ecs_tooltip">Press Esc to close <span class = "arrow"></span></span>
                                <div id = "popup_content"> <!--your content start-->
                                    <div id = "DisplayettingForm">
                                        put here the content of the pop up
                                    </div>
                                </div> <!--your content end-->
                            </div> <!--toPopup end-->
                            <div class = "loader"></div>
                            <div id = "backgroundPopup"></div>
                        </div>

                        <script type = "text/javascript">

                $(document).ready(function() {
                    $("[type=button]").live('click', General.buttonClicked);
                });

                $(document).ready(function() {
                    $("div select").live('change', General.selectionChanged);
                    $("#houseTypeselect").val(' --Choose--');

                    /* event for close the popup */
                    $("div.close").hover(
                            function() {
                                $('span.ecs_tooltip').show();
                            },
                            function() {
                                $('span.ecs_tooltip').hide();
                            }
                    );

                    $("div.close").click(function() {
                        General.disablePopup();  // function close pop up
                    });

                    $(this).keyup(function(event) {
                        if (event.which == 27) { // 27 is 'Ecs' in the keyboard
                            General.disablePopup();  // function close pop up
                        }
                    });

                    $("div#backgroundPopup").click(function() {
                        General.disablePopup();  // function close pop up
                    });
                });
                        </script>
                    </body>
                </html>
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

            function displayLettingForm($houseType, $array) {

                include_once '../modules/DbModules.php';
                include_once './houseClasses/houseSpecific.php';
                $db = new DbModules();
                $result = $db->getAHouseTypeDetail($houseType);
                $row = mysql_fetch_array($result);
                $form = new Forms();
                $form->header();
                ?>

                <div class="container">        
                    <div class="header"> house type specific details  </div>
                    <?php
                    $hasSQ = trim($row['hasSQ']);

                    $hasCompound = trim($row['hasCompound']);
                    $hs = new houseSpecific($houseType);

                    if ($hasCompound === 'true' and $hasSQ === 'true') {
                        $hs->houseConditionWithCompoundAndSq();
                    } else if ($hasCompound == 'true' and $hasSQ == 'false') {
                        $hs->houseConditionWithCompoundAndNoSq();
                    } else if ($hasCompound == 'false') {
                        $hs->houseConditionNoCompoundNoSq();
                    }
                    ?>
                    <input type="button" class="submitletDetails" id="<?php echo $array ?>" value="Submit details">
                </div>
                <script type="text/javascript">
                    $(document).ready(function() {
                        $("[type=button]").live('click', General.buttonClicked);
                    });
                </script>
                <?php
            }

            function childDetailAddition($child_count) {
                ?>
                <div id="<?php echo "child_number_" . $child_count; ?>">
                    <p>Child number <?php echo $child_count + 1 ?></p>
                    <div class="input">
                        <label>First Name </label> <input id="<?php echo "f_name_" . $child_count; ?>" type="text" /> 
                    </div>
                    <div class="input">
                        <label>Last Name </label> <input id="<?php echo "m_name_" . $child_count; ?>" type="text"/> 
                    </div>
                    <div class="input">
                        <label>Date of Birth</label> <input id="<?php echo "dob_" . $child_count; ?>" type="date" /> 
                    </div>
                    <div class="input">
                        <label>Disabled</label> 
                        <select id="<?php echo "disabled_" . $child_count; ?>">
                            <option value="">--Choose--</option>
                            <option value="Yes">Yes</option>
                            <option value="No"> No </option>
                        </select>
                        <input type="hidden" id="CountParser" value="<?php echo $child_count ?>"/>
                    </div>
                </div>
                <?php
            }

        }
        