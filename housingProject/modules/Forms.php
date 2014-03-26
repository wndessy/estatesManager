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
                                    <div class="header">Children  Details</div>
                                    <p>this is a child detail</p>
                                    <div class="input">
                                        <label>First Name </label> <input type="text" name="Fname"/> 
                                    </div>
                                    <div class="input">
                                        <label>Last Name </label> <input type="text" name="Mname"/> 
                                    </div>
                                    <div class="input">
                                        <label>Date of Birth</label> <input type="date" name="Dob"/> 
                                    </div>
                                    <div class="input">
                                        <label>Disabled</label> 
                                        <select id="Disabled">
                                            <option value="">--Choose--</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No"> No </option>
                                        </select>
                                    </div>
                                    <div class="linkbutton">
                                        <input  type="button" id="AddAChild" value="Add Child"/> 
                                        <input type="button" id="childToNext" value="Next"/>
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
    function ViewAndEditDetails($userId) {
        include_once './DbModules.php';
        $db = new DbModules();
        $resultset = $db->viewApplicantDetails($_SESSION['applicantId']);
        ?>
        <html>
            <head>
                <link rel="stylesheet" href="../css/style.css">
                <script src='../js/general.js'></script>
                <script src='../jquery/jquery-1.8.3.min.js'></script>
                <script src="../jquery/organictabs.jquery.js"></script>
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
                                        <label>First Name</label> <input type="text"  disabled="" id="fname" value="<?php echo $resultset['FirstName']; ?>"/>
                                    </div>
                                    <div class="input">
                                        <label>Last Name</label><input type="text" disabled="" id="lname" value="<?php echo $resultset['LastName']; ?>"/>
                                    </div>
                                    <div class="input">
                                        <script type="text/javascript">
                                            $(document).ready(function() {
                                                $("#gender")[0].value = "<?php echo trim($resultset['Gender']); ?>";
                                                $("#Mstatus")[0].value = "<?php echo trim($resultset['maritalStatus']); ?>";
                                                $("#disabled")[0].value = "<?php echo trim($resultset['disabled']); ?>";
                                            })
                                        </script>
                                        <label>Gender</label>
                                        <select id="gender" disabled="isabled">                                                
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
                                    <div class="input" contenteditable="false">
                                        <label>ID or Passport</label> <input type="number" id="IdOrPasport" value="<?php echo $resultset['IdOrPassport']; ?>"/>
                                    </div>
                                    <div class="input">
                                        <label>Phone number</label> <input type="number" id="phone" value="<?php echo $resultset['FirstName']; ?>"/>
                                    </div>
                                </div>
                                <input type="button" onclick="goNext('page2_nav')" value="Next page" />
                            </div>
                            <div id="page2" class="hide">
                                <!-- for inputing job details -->
                                <div class="container" id="jobDetails">
                                    <div class="header"> Job details</div>
                                    <div class="input">
                                        <label>Payroll number</label> <input type="number" id="PayrolNumber"disabled="isabled" value="<?php echo $resultset['PayrollNumber']; ?>"/>
                                    </div>
                                    <div class="input"> <label>Designation</label> <input type="text" id="Designation" value="<?php echo $resultset['Designation']; ?>"/>
                                    </div>
                                    <div class="input"> <label>Grade</label> <input type="text" id="Grade" value="<?php echo $resultset['Grade']; ?>"/>
                                    </div>
                                    <div class="input"> <label>Commencement of duty </label> <input type="date" disabled="isabled" id="CommencementOfDuty" value="<?php echo $resultset['CommencementOfDuty']; ?>"/>
                                    </div>
                                    <div class="input"> <label>Department </label> <input type="date" id="Department" value="<?php echo $resultset['Department']; ?>"/>
                                    </div>
                                    <div class="input"> <label>Head of department </label> <input type="date" id="HeadOfDepartment" value="<?php echo $resultset['HeadOfDepartment']; ?>"/>
                                    </div>
                                </div>
                                <input type="button" onclick="goNext('page1_nav')" value="Previous page" />
                                <input type="button" onclick="goNext('page3_nav')" value="Next page" />
                            </div>
                            <div id="page3" class="hide">
                                <div class="container" >
                                    <div class="header">Children  Details</div>
                                    <?php
                                    $row = $db->viewApplicantsCnildren($_SESSION['applicantId']);
                                    if ($row != null) {
                                        ?>
                                        <table>
                                            <tr>
                                                <td>First Name</td><td>Last Name</td><td>Date of birth </td><td>Gender</td><td>Disabled</td>
                                            </tr>
                                            <?php
                                            while ($row) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['fname']; ?></td><?php echo $row['FirstName']; ?><td><?php echo $row['dob']; ?></td><td><?php echo $row['gernder']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                        </table>
                                        <?php
                                    }
                                    ?>
                                    <div id="newChild"></div>
                                    <div class="linkbutton">
                                        <input  type="button" class="AddAChild" id="AddAChild" value="Add Child"/> 
                                        <input  type="button" class="cancelAddAChild" id="cancelAddAChild" value="Cancel"/> 
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

    function childDetailAddition($childNumber) {
        ?>
        <!--script type="text/javascript" src="../jquery/jquery-1.8.3.min.js"></script-->
        <div class="input">
            <label>First Name </label> <input type="text" Id="<?php
            echo"Fname";
            echo $childNumber;
            ?>"/> 
        </div>
        <div class="input">
            <label>Last Name </label> <input type="text" Id="<?php
            echo"Mname";
            echo $childNumber;
            ?>"/> 
        </div>
        <div class="input">
            <label>Date of Birth</label> <input type="date" Id="<?php
            echo"Dob";
            echo $childNumber;
            ?>"/> 
        </div>
        <div class="input">
            <label>Disabled</label> 
            <select id="<?php
            echo"Disabled";
            echo $childNumber;
            ?>" >
                <option value="">--Choose--</option>
                <option value="Yes">Yes</option>
                <option value="No"> No </option>
            </select>
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
         <a href="./mod_general.php?page=manageHouseAllocation">House Allocations</a>
        <a href="./mod_general.php?page=manageTenants">Tenants</a>
        <a href="./mod_general.php?page=manageRepairs">Repairs</a>
        <a href="./mod_general.php?page=manageReports">reports</a>
        <?php
    }

    function staffHomePage() {
        ?>

        <a href="">applicants</a>
        <a href="">tenants</a>
        <a href="">reports</a>

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
    