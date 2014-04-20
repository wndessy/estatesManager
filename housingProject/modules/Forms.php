<?php
/**
 * Description of Forms
 * this i a class contains all the forms
 * @author root
 */

class Forms {

    /**
     * This form is for general users to sign up
     */
    function generalUsersSignUpForm() {
        ?>
        <html>
            <head>
                <link rel="stylesheet" href="../css/style.css">
                <script src='../js/general.js'></script>
                <script src='../jquery/jquery-1.8.3.min.js'></script>
                <script src="../jquery/organictabs.jquery.js"></script>
            </head>
            <script>
                $(function() {

                    $("#example-two").organicTabs({
                        "speed": 200
                    });
                });
                function goNext(name) {
                    $("#" + name).click();
                }
            </script>
            <style>
                .header{
                    font-size:  20px;
                }
            </style>
            <body>
                <div id="page-wrap">
                    <div id="example-two">
                        <ul class="nav">
                            <li class="nav-one"><a href="#page1" class="current" id="page1_nav">Personal Details</a></li>
                            <li class="nav-two"><a href="#page2" id="page2_nav">Job details</a></li>
                            <li class="nav-three"><a href="#page3" id="page3_nav">Children Details</a></li>
                            <li class="nav-four last"><a href="#page4" id="page4_nav">Account Details</a></li>
                        </ul>
                        <div class="list-wrap">
                            <div id="page1">
                                <div class="container" id="personalDetais">
                                    <div class="header">Personal Details</div>
                                    <div class="input">
                                        <label>First Name</label> <input type="text" id="fname"/>
                                    </div>
                                    <div class="input">
                                        <label>Last Name</label><input type="text" id="lname"/>
                                    </div>
                                    <div class="input">
                                        <label>Gender</label>
                                        <select id="gender">
                                            <option value="">--Choose--</option>
                                            <option value="Male ">Male</option>
                                            <option value="Female">Female</option>
                                        </select>

                                    </div>
                                    <div class="input">
                                        <label>Marital Status</label>
                                        <select id="Mstatus">
                                            <option value="">--Choose--</option>
                                            <option value="Single ">Single </option>
                                            <option value="Married">Married</option>
                                        </select>
                                    </div>
                                    <div class="input">
                                        <label>Disabled</label>  
                                        <select id="disabled">
                                            <option value=""> --Choose--</option>
                                            <option value="Yes"> Yes </option>
                                            <option value="No"> No </option>
                                        </select>
                                    </div><br/>
                                    <div class="input">
                                        <label>ID or Passport</label> <input type="number" id="IdOrPasport"/>
                                    </div>
                                    <div class="input">
                                        <label>Phone number</label> <input type="number" id="phone"/>
                                    </div>
                                    <div class="input">
                                        <input type="button" id="personalNext" class="personalNext" value="Next"/> 
                                    </div>
                                </div>
                                <input type="button" onclick="goNext('page2_nav')" value="Next page" />
                            </div>
                            <div id="page2" class="hide">
                                <!-- for inputing job details -->
                                <div class="container" id="jobDetails">
                                    <div class="header"> Job details</div>
                                    <div class="input">
                                        <label>Payroll number</label> <input type="number" id="PayrolNumber"/>
                                    </div>
                                    <div class="input"> <label>Designation</label> <input type="text" id="Designation"/>
                                    </div>
                                    <div class="input"> <label>Grade</label> <input type="text" id="Grade"/>
                                    </div>
                                    <div class="input"> <label>Commencement of duty </label> <input type="date" id="CommencementOfDuty"/>
                                    </div>
                                    <div class="input"> <label>Department </label> <input type="date" id="Department"/>
                                    </div>
                                    <div class="input"> <label>Head of department </label> <input type="date" id="HeadOfDepartment"/>
                                    </div>
                                    <div class="link button">
                                        <input type="button" id="jobToNext" class="jobToNext" value="Next"/>
                                    </div>
                                </div>

                                <input type="button" onclick="goNext('page1_nav')" value="Previous page" />
                                <input type="button" onclick="goNext('page3_nav')" value="Next page" />
                            </div>
                            <div id="page3" class="hide">
                                <div class="container" >
                                    <?php $child_count = 0; ?>
                                    <div class="header">Children  Details</div>
                                    <div id="children_container">
                                        <?php 
                                                include_once './Forms.php';
                                                $form = new Forms();
                                                $form->childDetailAddition($child_count);
                                        ?>
                                    </div>
                                    <div class="linkbutton">
                                        <input type="button" id="AddAChild" class="AddAChild" value="Add Child"/> 
                                    </div>
                                </div>
                                <input type="button" onclick="goNext('page2_nav')" value="Previous page" />
                                <input type="button" onclick="goNext('page4_nav')" value="Next page" />
                            </div>
                            <div id="page4" class="hide">
                                <!-- for account login details-->
                                <div class="container" id="accountLogin">
                                    <div class="header">account login Details</div>
                                    <div class="input">
                                        <label>Email address</label><input type="text" id="Email"/>
                                    </div>
                                    <div class="input">
                                        <label>Password</label><input type="password" id="password"/>
                                    </div>
                                    <div class="input">
                                        <label>Confirm Password</label><input type="password" id="pasword2"/>
                                    </div>
                                    <div class="linkbutton">
                                        <input  type="button" id="submitDetails" class="submitDetails" value="Submit Details"/> 
                                    </div>
                                </div>
                                <input type="button" onclick="goNext('page3_nav')" value="Previous page" />
                            </div>
                        </div> <!-- END List Wrap -->
                    </div>
                </div>
                <script type="text/javascript">
                    $(document).ready(function() {
                        $("[type=button]").live('click', General.buttonClicked);
                    });
                </script>
            </body>
        </html>
        <?php
    }

    /*
     * user detail view
     */

    /**
     * This form is for general users to sign up
     */
    function ViewAndEditDetails($applicantId) {
        include_once './DbModules.php';
        $db = new DbModules();
        $resultset = $db->viewApplicantDetails($applicantId);
        $row = mysql_fetch_array($resultset);
        ?>
        <html>
            <head>
                <link rel="stylesheet" href="../css/style.css">
                <script src='../js/general.js'></script>
                <script src='../jquery/jquery-1.8.3.min.js'></script>
                <script src="../jquery/organictabs.jquery.js"></script>
               <!-- <script src="../js/customAlertWindows.js"></script>-->
            </head>
            <script type="text/javascript">
                    $(function() {
                        $("#example-two").organicTabs({
                            "speed": 200
                        });
                    });
                    function goNext(name) {
                        $("#" + name).click();
                    }
            </script>
            <style>
                .header{
                    font-size:  20px;
                }
            </style>

            <body><div id="div1">                    
                    <div id="page-wrap">
                        <div id="example-two">
                            <ul class="nav">
                                <li class="nav-one"><a href="#page1" class="current" id="page1_nav">Personal Details</a></li>
                                <li class="nav-two"><a href="#page2" id="page2_nav">Job details</a></li>
                                <li class="nav-three"><a href="#page3" id="page3_nav">Children Details</a></li>
                                <li class="nav-four last"><a href="#page4" id="page4_nav">Account Details</a></li>
                            </ul>
                            <div class="list-wrap">
                                <div id="page1">
                                    <div class="container" id="personalDetais">
                                        --<div class="header">Personal Details</div>
                                        <div class="input">
                                            <label>First Name</label> <input type="text"   id="fname" value="<?php echo $row['FirstName']; ?>"/>
                                        </div>
                                        <div class="input">
                                            <label>Last Name</label><input type="text"  id="lname" value="<?php echo $row['LastName']; ?>"/>
                                        </div>
                                        <div class="input">
                                            <script type="text/javascript">
                                                $(document).ready(function() {
                                                    $("#gender")[0].value = "<?php echo trim($resultset['Gender']); ?>";
                                                    $("#Mstatus")[0].value = "<?php echo trim($resultset['maritalStatus']); ?>";
                                                    $("#disabled")[0].value = "<?php echo trim($resultset['disabled']); ?>";
                                                })
                                            </script>
                                            <label id="gender">Gender</label>
                                            <select>
                                                <option value="choose" >Choose</option>
                                                <option value="Male" >Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                        <div class="input">
                                            <label>Marital Status</label>
                                            <select id="Mstatus">
                                                <option value="">--Choose--</option>
                                                <option value="Single ">Single </option>
                                                <option value="Married">Married</option>
                                            </select>
                                        </div>
                                        <div class="input">
                                            <label>Disabled</label>  
                                            <select id="disabled">
                                                <option value=""> --Choose--</option>
                                                <option value="Yes"> Yes </option>
                                                <option value="No"> No </option>
                                            </select>
                                        </div><br/>
                                        <div class="input">
                                            <label>ID or Passport</label> <input type="number" id="IdOrPasport" value="<?php echo $row['IdOrPassport']; ?>"/>
                                        </div>
                                        <div class="input">
                                            <label>Phone number</label> <input type="number" id="phone" value="<?php echo $row['FirstName']; ?>"/>
                                        </div>
                                    </div>
                                    <input type="button" onclick="goNext('page2_nav')" value="Next page" />
                                </div>
                                <div id="page2" class="hide">
                                    <!-- for inputing job details -->
                                    <div class="container" id="jobDetails">
                                        <div class="header"> Job details</div>
                                        <div class="input">
                                            <label>Payroll number</label> <input type="number" id="PayrolNumber"disabled="isabled" value="<?php echo $row['PayrollNumber']; ?>"/>
                                        </div>
                                        <div class="input"> <label>Designation</label> <input type="text" id="Designation" value="<?php echo $row['Designation']; ?>"/>
                                        </div>
                                        <div class="input"> <label>Grade</label> <input type="text" id="Grade" value="<?php echo $row['Grade']; ?>"/>
                                        </div>
                                        <div class="input"> <label>Commencement of duty </label> <input type="date" id="CommencementOfDuty" value="<?php echo $row['CommencementOfDuty']; ?>"/>
                                        </div>
                                        <div class="input"> <label>Department </label> <input type="date" id="Department" value="<?php echo $row['Department']; ?>"/>
                                        </div>
                                        <div class="input"> <label>Head of department </label> <input type="date" id="HeadOfDepartment" value="<?php echo $row['HeadOfDepartment']; ?>"/>
                                        </div>
                                    </div>
                                    <input type="button" onclick="goNext('page1_nav')" value="Previous page" />
                                    <input type="button" onclick="goNext('page3_nav')" value="Next page" />
                                </div>
                                <div id="page3" class="hide">
                                    <div class="container" >
                                        <div class="header">Children  Details</div>
                                        <?php
                                        $resultset = $db->viewApplicantsChildren($applicantId);
                                        if ($resultset != null) {
                                            ?>
                                            <table>
                                                <tr>
                                                    <td>First Name</td><td>Last Name</td><td>Date of birth </td><td>Gender</td> <td>Disabled</td>
                                                </tr>
                                                <?php
                                                while ($row1 = mysql_fetch_array($resultset)) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $row1['fname']; ?></td><td><?php echo $row1['sname']; ?></td><td><?php echo $row['dob']; ?></td><td><?php echo $row['gender']; ?></td><td><?php echo $row['disabled']; ?></td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                            </table>
                                            <?php
                                        }
                                        if ($_SESSION['userLevel'] == '2') {
                                            
                                        } else {
                                            ?>
                                            <div id="newChild"></div>
                                            <div class="linkbutton">
                                                <input  type="button" class="AddAChild" id="AddAChild" value="Add Child"/> 
                                                <input  type="button" class="cancelAddAChild" id="cancelAddAChild" value="Cancel"/> 
                                            </div>
                                            <?php }
                                        ?>
                                    </div>
                                    <input type="button" onclick="goNext('page2_nav')" value="Previous page" />
                                    <input type="button" onclick="goNext('page4_nav')" value="Next page" />
                                </div>
                                <div id="page4" class="hide">
                                    <!-- for account login details-->
                                    <div class="container" id="accountLogin">
                                        <div class="header">account login Details</div>
                                        <div class="input">
                                            <label>Email address</label><input type="text" disabled="" id="Email"/>
                                        </div>
                                        <div class="linkbutton">
                                            <input  type="button" id="submitDetails" class="submitDetails" value="Submit Details"/> 
                                        </div>
                                    </div>
                                    <input type="button" onclick="goNext('page3_nav')" value="Previous page" />
                                </div>
                            </div> <!-- END List Wrap -->
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    $(document).ready(function() {
                        $("[type=button]").live('click', General.buttonClicked);
                    });
                </script>
            </body>
        </html>
        <?php
    }

    function childDetailAddition($child_count) {
        ?>
        <div id="<?php echo "child_number_" . $child_count ?>">
            <p>Child number <?php echo $child_count ?></p>
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
                <select id="<?php echo "child_number_" . $child_count."_disabled" ?>">
                    <option value="">--Choose--</option>
                    <option value="Yes">Yes</option>
                    <option value="No"> No </option>
                </select>
            </div>
        </div>
        <?php
    }
    /**
     * This form is for adding staff
     */
    function addStaffForm() {
        ?>
        <script type="text/javascript" src="../jquery/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="../js/general.js"></script>
        </head>
        <form action="" method="POST">
            <div class="container" id="personalDetais">
                <div class="header">New Staff Details</div>
                <div class="input">

                    <label>Name</label><input type="text" id="name"/>
                    <label>category</label>
                    <select id="userLevel">
                        <option value="">Choose</option>
                        <option value="2">housing manager</option>
                        <option value="3">plumbing</option>
                        <option value="4">carpentry</option>
                    </select>
                    <label>Email</label><input type="text" id="email"/>
                    <label>Password</label><input type="password" id="password"/>
                    <input type="button" id="addStaff" class="addStaff" value="Add"/>
                </div>
            </div>
        </form>
        <script type="text/javascript">
                    $(document).ready(function() {
                        $("[type=button]").live('click', General.buttonClicked);
                    });
        </script>
        </html>
        <?php
    }

    /*
     * can be staff or normal users
     */

    function login($user) {
        ?>
        <html>
            <head>
                <script src="../js/general.js" type="text/javascript"></script>
                <script src="../jquery/jquery-1.8.3.min.js" type="text/javascript"></script>
            </head>
            <form action="" method="POST">
                <div class="container" id="personalDetais">
                    <div class="header"><?php echo $user; ?> Login Details</div>
                    <div class="input">
                        <label>Email</label><input type="text" id="email"/>
                        <label>Password</label><input type="password" id="pass"/>
                        <input type="button" id="<?php echo $user ?>" class="<?php echo $user ?>Login" value="<?php echo $user ?> login"/>
                    </div>
                </div>
            </form>
            <script type="text/javascript">
                    $(document).ready(function() {
                        $("[type=button]").live('click', General.buttonClicked);
                    });
            </script>
        </html>
        <?php
    }

    /**
     * Apply for a house after creating account and loggin in
     * 
     * @param type $userJobCategory
     */
    function applyForHouse($userJobCategory) {
        ?>
        <script src="../js/general.js" type="text/javascript"></script>
        <script src="../jquery/jquery-1.8.3.min.js" type="text/javascript"></script>

        <div class="container" id="personalDetais">
            <div class="header">Apply for a house </div>
            <div class="input">
                <label>Select a house</label>
        <?php if ($userJobCategory > 10 and $userJobCategory < 13) { ?>
                    BF <input type="checkbox" name="choose" value="BF">
                    BH<input type="checkbox" name="choose" value="BH">
                    AH<input type="checkbox" name="choose" value="AH">
                </div>

            <?php
        } elseif ($userJobCategory == 13) {
            ?>
                AH<input type="checkbox" name="choose" value="AH" checked="cheked">
            </div>

            <?php
        } elseif ($userJobCategory < 7) {
            ?>
            AH<input type="checkbox" name="choose" value="AH" checked="cheked">
            </div>

        <?php } else {
            ?>
            AH<input type="checkbox" name="choose" value="AH" checked="cheked">
            </div>
        <?php } ?>
        <div class="input">
            <input type="button"  class="selectedHouse" value="Button">
        </div>
        <script type="text/javascript">
                    $(document).ready(function() {
                        $("[type=button]").live('click', General.buttonClicked);
                    });
        </script>
        <?php
    }

    function houseToApplyFor() {
        ?>
        <script src="../js/general.js" type="text/javascript"></script>
        <script src="../jquery/jquery-1.8.3.min.js" type="text/javascript"></script>
        <div class="container" id="personalDetais">
            <div class="header">Apply for a house </div>
            <div class="input">
                <label>Select a house</label>
        <?php
        $db = new DbModules();
        $result = $db->houseToAplyFor();
        while ($row = mysql_fetch_array($result)){
            echo $row['name'];
            ?><input type="checkbox" name="choose" value="<?php echo $row['name']; ?>">
                    <?php
                    } ?>    
                </div>
                <div class="input">
                    <input type="button"  class="selectedHouse" value="Button">
                </div>
                <script type="text/javascript">
                        $(document).ready(function() {
                            $("[type=button]").live('click', General.buttonClicked);
                        });
                </script>
                <?php
            }

            /**
             * This is where a tenant can apply for renewing the term of staying in the house.
             */
            function contractRenewal($UserId) {
                include_once './evaluation.php';
                $eval = new evaluation();
                ?>
                <script src="/js/general.js" type="text/javascript"></script>
                <div class="container" id="personalDetais">
                    <div class="header"> Contract Details </div>
                    <div class="input">
                        <label>Current House</label> <p>the house you are in<p><br/>
                            <label>contract start date</label><p><?php echo $eval->houseRenewDetails($applicantId, StartDate) ?></p><br/>
                        <label>Contract end date</label><p><?php echo $eval->houseRenewDetails($applicantId, EndDate); ?></p><br/>
                        <label>renewable</label><p><?php echo $eval->houseRenewDetails($applicantId, renewable); ?></p><br/>
            <?php if ($eval->houseRenewDetails($applicantId, renewable) == 'yes') { ?>
                            <button id="renew" value="Renew"/> 
                        <?php } else if ($eval->houseRenewDetails($applicantId, renewable) == 'Aplied') {
                            ?>
                            <p>Applied for renewal</p>
                        <?php } else if ($eval->houseRenewDetails($applicantId, renewable) == 'Aproved') {
                            ?>
                            <p>Renewal Approved</p>
                        <?php } else {
                            ?>
                            <p>No</p>
                        <?php } ?>
                    </div>
                </div>
            <?php
        }

        function applyForHouseRepair() {
            ?>
                <script src="/js/general.js" type="text/javascript"></script>
                <div class="container" id="personalDetais">
                    <div class="header"> House application Details </div>
                    <div class="input">
                        <div class="header"> House application Details </div>
                        <label>category</label>
                        <select>
                            <option>plumbing</option>
                            <option>Electrical</option>
                            <option>Other </option> 
                        </select>
                        <label>Description</label>
                        <textarea cols="50"rows="10"/>
                    </div> 
                </div>
                <div class="input">
                    <button > submit</button>s
                </div>
            <?php
        }

        function superUserHomepage() {
            ?>

                <a href="./mod_general.php?page=manageStaff"</a> Manage Staff<br/>

            <?php
        }

        function managerHomePage() {
            ?>
                <a href="" > </a>
                <a href="./mod_general.php?page=manageApplicants">Applicants</a>
                <a href="./mod_general.php?page=manageHouseApplication">House Applications</a>
                <a href="./mod_general.php?page=manageHouseAllocation">House Allocations</a>
                <a href="./mod_general.php?page=manageTenants">Tenants</a>
                <a href="./mod_general.php?page=manageRepairs">Repairs</a>
                <a href="./mod_general.php?page=manageReports">reports</a>
            <?php
        }

        function housingOfficerHomePage() {
            ?>

                <a href="./mod_general.php?page=houseSignIns">sign in</a>
                <a href="./mod_general.php?page=houseSignups">sign out</a>
                <a href="./mod_general.php?page=houseRepairs">Repair</a>

            <?php
        }

        function tenantHomepage() {
            ?>
                <a href="modules/mod_general.php?page=manageProfile">Manage profile</a><br/>
                <a href="">manage profile</a>
                <a href="">apply for repair</a>
                <a href="">view contract details</a>
                <a 

            <?php
        }

        function applicantHomepage() {
            ?>
                    <a href="./mod_general.php?page=manageProfile">Manage profile</a><br/>
                    <a href="./mod_general.php?page=applyForAhouse">apply for a house</a>
                    <h>i am an applicant</h>
            <?php
        }

        /**
         * Department applying for a room for their guest
         */
        function departMentApplication() {
            ?>
                    <label>Name of applicant</label><input type="text" name="email"/>
                    <label>Name of hod  </label><input type="text" name="email"/>
                    <label>Hod email</label><input type="text" name="email"/>
                    <label>Guest name</label><input type="text" name="email"/>

            <?php
        }

        function houseConditionForm() {
            
        }

    }
    