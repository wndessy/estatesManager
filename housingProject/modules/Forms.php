<?php

/**
 * Description of Forms
 * this i a class contains all the forms
 * @author root
 */
class Forms {

    function Forms() {
        
    }

    /**
     * This form is for general users to sign up
     */
    function generalUsersSignUpForm() {
      
                    include_once './DbModules.php';
                    $db = new DbModules();
                    $resultset = $db->viewApplicantDetails($applicantId);
                    $row = mysql_fetch_array($resultset);
                    $this->header();
                    ?>
                <script type="text/javascript">
            $(function() {
                $("#example-two").organicTabs({
                    "speed": 200
                });
            });
            function goNext(name) {
                $("#" + name).click();
            }

            //set up the datepickers
            $(document).ready(function() {
                $('input[type=date]').datepicker({
                    dateFormat: 'yy-mm-dd'
                });
            })
        </script>

        <style>
            .header{
                font-size:  20px;
            }
        </style>
        <div class="main_container">
            <div id="header"> 
                <div id="header">
                    <div class="logo">
                        <img border="0" title="" alt="" src="../images/logo.gif">
                    </div>
                </div>
            </div>
            <div class="menu"></div>
            <div class="center_content">
                <div id="page-wrap">
                    <div id="example-two">
                        <ul class="nav">
                            <li class="nav-one"><a href="#page1" class="current" id="page1_nav">Personal Details</a></li>
                            <li class="nav-two"><a href="#page2" id="page2_nav">Job details</a></li>
                            <li class="nav-three"><a href="#page3" id="page3_nav">Children Details</a></li>
                            <li class="nav-four last"><a href="#page4" id="page4_nav">Account Details</a></li>
                        </ul>
                        <div id="allInputsWrap">
                            <div class="list-wrap" id="applicantDetails">
                                <div id="page1">

                                    <div class="container" id="personalDetais">
                                        <div class="header">Personal Details</div>
                                        <div class="input">
                                            <label>First Name</label> <input type="text" id="fname" required="required"/>
                                        </div>
                                        <div class="input">
                                            <label>Last Name</label><input type="text" id="lname" required="required"/>
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
                                    </div>
                                    <input type="button" onclick="goNext('page2_nav')" value="Next page" />
                                </div>
                                <div id="page2" class="hide">
                                    <!-- for inputing job details -->
                                    <div class="container" id="jobDetails">
                                        <div class="header"> Job details</div>
                                        <div class="input">
                                            <label>Payroll number</label> <input id="PayrolNumber"/>
                                        </div>
                                        <div class="input"> <label>Designation</label> <input type="text" id="Designation"/>
                                        </div>
                                        <div class="input"> <label>Grade</label> <input type="text" id="Grade"/>
                                        </div>
                                        <div class="input"> <label>Commencement of duty </label> <input type="date" id="CommencementOfDuty"/>
                                        </div>
                                        <div class="input"> <label>Department </label> 
                                            <select id="Department">
                                                <option value="">--choose---</option>
                                                <?php
                                                  $resultset = $db->showDepartments();
                                                while ($row = mysql_fetch_array($resultset)) {
                                                    ?><option value="<?php echo $row['name']; ?>"> <?php echo $row['name']; ?></option>
                                        <?php } ?>
                                                </select>
                                            </div>
                                            <div class="input"> <label>Head of department </label> <input type="text" id="HeadOfDepartment"/>
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
                                                $this->childDetailAddition($child_count);
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
                                                <label>Email address</label><input type="email" id="Email"/>
                                            </div>
                                            <div class="input">
                                                <label>file upload</label><input type="file" id="file"/>
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
                    </div>
                </div>


                <?php
                $this->footer();
                ?>
            </div>
            <?php
        }

        /*
         * user detail view
         */

        /**
         * This form is for general users to sign up
         */
        function ViewAndEditDetails($applicantId) {

            $this->login("user");
            ?>
            <div class="main_container">
                <div class="center_content">
                    <?php
                    include_once './DbModules.php';
                    $db = new DbModules();
                    $resultset = $db->viewApplicantDetails($applicantId);
                    $row = mysql_fetch_array($resultset);
                    $this->header();
                    ?>
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

                    <div id="page-wrap">
                        <div id="example-two">
                            <ul class="nav">
                                <li class="nav-one"><a href="#page1" class="current" id="page1_nav">Personal Details</a></li>
                                <li class="nav-two"><a href="#page2" id="page2_nav">Job details</a></li>
                                <li class="nav-three"><a href="#page3" id="page3_nav">Children Details</a></li>
                                <li class="nav-four last"><a href="#page4" id="page4_nav">Account Details</a></li>
                            </ul>
                            <div id="allInputsWrap">
                                <div class="list-wrap">
                                    <div id="page1">

                                        <div class="container" id="personalDetais">
                                            <div class="header">Personal Details</div>
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
                                                    <option value="" >--<?php echo $row['Gender']; ?>--</option>
                                                    <option value="Male" >Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                            <div class="input">
                                                <label>Marital Status</label>
                                                <select id="Mstatus">
                                                    <option value="">--<?php echo $row['maritalStatus']; ?>--</option>
                                                    <option value="Single ">Single </option>
                                                    <option value="Married">Married</option>
                                                </select>
                                            </div>
                                            <div class="input">
                                                <label>Disabled</label>  
                                                <select id="disabled">
                                                    <option value=""> --<?php echo $row['disabled']; ?>--</option>
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
                                            <div class="input"> <label>Department </label> 
                                                <select id="Department">
                                                <option value="" ><?php echo $row['Department']; ?></option>
                                                <?php
                                                  $resultset = $db->showDepartments();
                                                while ($row1 = mysql_fetch_array($resultset)) {
                                                    ?><option value="<?php echo $row1['name']; ?>"> <?php echo $row1['name']; ?></option>
                                        <?php } ?>
                                                </select>
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
                                            <div id="children_container">
                                                <?php
                                                $resultset = $db->viewApplicantsChildren($applicantId);
                                                if ($resultset != null) {
                                                    ?>
                                                    <table>
                                                        <tr>
                                                            <td>First Name</td><td>Last Name</td><td>Date of birth </td>
                                                        </tr>
                                                        <?php
                                                        while ($row1 = mysql_fetch_array($resultset)) {
                                                            ?>
                                                            <tr>
                                                                <td><?php echo $row1['fname']; ?></td><td><?php echo $row1['sname']; ?></td><td><?php echo $row1['dob']; ?></td>
                                                            </tr>
                                                            <?php
                                                        }
                                                        ?>
                                                    </table>
            <?php } ?>

                                                <div class="container" >
                                                        <?php $child_count = 0; ?>
                                                    <div id="children_container">
                                                        <?php
                                                        $this->childDetailAddition($child_count);
                                                        ?>
                                                    </div>
                                                    <div class="linkbutton">
                                                        <input type="button" id="AddAChild" class="AddAChild" value="Add Child"/> 
                                                    </div>
                                                </div>
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
                                                <label>Email address</label><input type="text" disabled="" value="<?php echo $row['EmailAddress']; ?>"id="Email"/>
                                            </div>
                                            <div class="linkbutton">
                                                <input  type="button" class="updateProfile" value="Submit Details"/> 
                                            </div>
                                        </div>
                                        <input type="button" onclick="goNext('page3_nav')" value="Previous page" />
                                    </div>
                                </div> <!-- END List Wrap -->
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                $this->footer();
                ?>
            </div>
            </div>
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
                <input type="hidden" id="CountParser" value="<?php echo $child_count ?>"/>
            </div>
            <?php
        }

        /**
         * This form is for adding staff
         */
        function addStaffForm() {
            ?>
            <?php
            $this->login("user");
            ?>
            <div class="main_container">
                <div class="center_content">


                    <div class="container" id="personalDetais">
                        <h2>New Staff Details</h2>
                        <div class="input">
                            <label>Name</label><input type="text" id="name"/><br />
                            <label>category</label>
                            <select id="userLevel">
                                <option value="1">Choose</option>
                                <option value="2">housing manager</option>
                                <option value="3">plumbing</option>
                                <option value="4">carpentry</option>
                            </select>
                            <div style="clear: both"></div>
                            <label>Email</label><input type="text" id="email"/><br />
                            <label>Password</label><input type="password" id="password"/><br />
                            <input type="button" id="addStaff" class="addStaff" value="Add"/>
                        </div>
                    </div>
                    </form>
                </div>
                <?php
                $this->footer();
                ?>
            </div>
            <?php
        }

/////////////////////////////////
        function addHouseForm() {
            ?>
            <?php
            $this->login("user");
            ?>
            <div class="main_container">
                <div class="center_content">


                    <div class="container" id="personalDetais">
                        <h2>New Staff Details</h2>
                        <div class="input">
                            <label>Name</label><input type="text" id="name"/><br />
                            <label>category</label>
                            <select id="userLevel">
                                <option value="1">Choose</option>
                                <option value="2">housing manager</option>
                                <option value="3">plumbing</option>
                                <option value="4">carpentry</option>
                            </select>
                            <div style="clear: both"></div>
                            <label>Email</label><input type="text" id="email"/><br />
                            <label>Password</label><input type="password" id="password"/><br />
                            <input type="button" id="addStaff" class="addStaff" value="Add"/>
                        </div>
                    </div>
                    </form>
                </div>
                <?php
                $this->footer();
                ?>
            </div>
            <?php
        }

        /*
         * can be staff or normal users
         */

        function login($user) {

            $this->header();
            ///  session_start();
            //       if (!isset($_SESSION['userLevel']) || (trim($_SESSION['userLevel']) == '' and $_SESSION['email']) || (trim($_SESSION['email']) == '' )) {   
            ?>
            <div class="main_container">
                <div id="header"> 
                    <div id="header">
                        <div class="logo">
                            <img border="0" title="" alt="" src="../images/logo.gif">
                        </div>
                    </div>
                </div>
            <?php
            session_start();
            if (!isset($_SESSION['userLevel']) || (trim($_SESSION['userLevel']) == '' and $_SESSION['email']) || (trim($_SESSION['email']) == '' )) {
                //if requesting page not default or user or staff login
                ?>
                    <div class="menu"></div>
                    <div class="center_content">
                        <form action="" method="POST">
                            <div class=" welcome_box">
                                <div class="welcome">
                                    <div class="container" id="personalDetais">
                                        <span class="orange">
                <?php
                include_once '../Config.php';
                $Config = new Config();
                if (trim($user) == "user") {
                    echo "<h2>" . $Config->STRING->user_login_page_header . "</h2>";
                } else if (trim($user) == "staff") {
                    echo "<h2>" . $Config->STRING->staff_login_page_header . "</h2>";
                }
                ?>
                                        </span>
                                        <div class="input">
                                            <label>Email</label>   <input type="text"     id="email"/> <br/>
                                            <label>Password</label><input type="password" id="pass"/> <br/>

                                            <input type="button" id="<?php echo $user ?>" class="<?php echo $user ?>Login" value="<?php echo $user ?> login"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                <?php
                $this->footer();
                ?>
                    </div>
                        <?php
                    } else {
                        //elseif (isset($_SESSION['userLevel'])) {
                        if ($_SESSION['userLevel'] == 11) {
                            $this->applicantHomepage();
                        } else if ($_SESSION['userLevel'] == 12) {
                            $this->tenantHomepage();
                        } else if ($_SESSION['userLevel'] == 1) {
                            $this->superUserHomepage();
                        } else if ($_SESSION['userLevel'] == 2) {
                            $this->managerHomePage();
                        } else if ($_SESSION['userLevel'] == 3) {
                            $this->housingOfficerHomePage();
                        }
                    }
                    ?>
            </div>
                <?php
            }

            function defaultPage() {
                $this->header();
                ?>
            <div class="main_container">
                <div id="header"> 
                    <div id="header">
                        <div class="logo">
                            <img border="0" title="" alt="" src="../images/logo.gif">
                        </div>
                    </div>
                </div>
                <div class="menu"></div>
                <div class="center_content">
            <?php
            include_once '../Config.php';
            $Config = new Config();
            echo "<h2>" . $Config->STRING->header_home_page . "</h2>";
            ?>
                    <a href="./mod_general.php?page=userLogin">User login</a><br/>
                    <a href="./mod_general.php?page=staffLogin">Staff login</a><br/>
                    <a href="./mod_general.php?page=register">Register</a><br/>
                </div>
            <?php
            $this->footer();
            ?>
            </div>
                <?php
            }

            function header() {
                ?>
            <link rel="stylesheet" href="../css/specific_style.css">
            <link rel="stylesheet" href="../css/general_style.css"/>
            <link rel="stylesheet" href="../css/jquery-ui.css">

            <script src="../jquery/jquery-1.8.3.min.js" type="text/javascript"></script>
            <script src="../js/general.js" type="text/javascript"></script>
            <link href="../css/popup.css" rel="stylesheet" type="text/css" media="all" />

            <script src='../js/general.js'></script>
            <script src='../jquery/jquery-1.8.3.min.js'></script>
            <script src="../jquery/organictabs.jquery.js"></script>
            <script src="../jquery/jquery-ui.js"></script>
            <?php
        }

        function footer() {
            ?>
            <div id="footer">
                <div class="left_footer">
                    <a href="#">home</a>
                    <a href="#">about</a>
                    <a href="#">privacy policy</a>
                    <a href="#">contact</a>
                </div>
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
            <div class="container" id="personalDetais">
                <div class="header">Apply for a house </div>

                <h2 >Select a house</h2><br/>
            <?php
            include_once './DbModules.php';
            $db = new DbModules();
            $result = $db->houseToAplyFor();
            ?><table class="hiden_layout_tables">
                <?php
                while ($row = mysql_fetch_array($result)) {
                    ?><tr>
                            <td>
                                <label><?php echo $row['name']; ?></label>
                            </td>
                            <td>
                                <input type="checkbox" value=" <?php echo $row['house_id'] ?>" /><br/>
                            </td>
                        </tr>
            <?php } ?>
                </table>
                <div class="input">
                    <input type="button"  class="selectedHouse" value="Button">
                </div>
            </div>
            </div>
            <?php
            $this->footer();
        }

        /**
         * This is where a tenant can apply for renewing the term of staying in the house.
         */
        function contractRenewal($UserId) {
            include_once './evaluation.php';
            $eval = new evaluation();
            ?>
            <?php
            $this->login("user");
            ?>
            <div class="main_container">
                <div class="center_content">

                    <div class=" welcome_box">
                        <div class="welcome">
                            <div class="container" id="personalDetais">
                                <span class="orange">

                                    <div class="header"> Tenancy Contract Details </div>

                                    <label>Current House</label> <p>the house you are in<p><br/>

                                        <label>contract start date</label>   <p><?php echo $eval->houseRenewDetails("start_date") ?></p><br/>

                                    <label>Contract end date</label>    <p><?php echo $eval->houseRenewDetails("end_date"); ?></p><br/>

                                    <label>renewable</label>     <p><?php echo $eval->houseRenewDetails(renewable); ?></p><br/>
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
            $this->footer();
        }

        function applyForHouseRepair() {
            ?>
                        <?php
                        $this->login("user");
                        ?>
                        <div class="main_container">
                            <div class="center_content">

                                <div class=" welcome_box">
                                    <div class="welcome">
                                        <div class="container" id="personalDetais">
                                            <span class="orange">

                                                <div class="header"> House application Details </div>
                                                <label>Category</label>
                                                <select id="repair_category">
                                                    <option value=""> --Choose--</option>
                                                    <option value="plumbing"> plumbing</option>
                                                    <option value="Electical">Electrical</option>
                                                    <option value="Other">Other </option> 
                                                </select>

                                                <label>Description</label> <textarea  id="repair_desciption"cols="50"rows="10" ></textarea>
                                                <div class="input">
                                                    <input type="button"  class="submit_repair_application" value="Button">
                                                </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>


            <?php
            $this->footer();
        }

        function viewRepair() {
            ?>                <?php
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
            <?php
            }
        }

        function recordRepair() {
            ?>                <label>Description</label> <textarea  id="repair_desciption"cols="50"rows="10" ></textarea>
                            <label>Estimated cost</label> <input  id="repair_cost"/>
                            <input type="button"  class="submit_repair_application" value="Button">
                        </div>
                        <div class="center_content">
            <?php
        }

        /* ----------------------------header------------------------------- */

        function superUserHomepage() {
            ?>
                            <div class="menu">
                                <ul>
                                    <li> <a href="./mod_general.php?page=manageStaff">Manage Staff</a> </li>
                                    <li> <a href="./mod_general.php?page=manageHouses"> Manage Houses</a></li>
                                    <li class="logout"><a href="./mod_general.php?page=logout">Logout</a></li>

                                </ul>
            <?php
        }

        function managerHomePage() {
            ?>
                                <div class="menu">
                                    <ul>
                                        <li> <a href="./mod_general.php?page=manageApplicants">Applicants</a></li>
                                        <li> <a href="./mod_general.php?page=manageHouseApplication">House Applications</a></li>
                                        <li> <a href="./mod_general.php?page=manageHouseAllocation">House Allocations</a></li>
                                        <li> <a href="./mod_general.php?page=manageTenants">Tenants</a></li>
                                        <li> <a href="./mod_general.php?page=manageRepairs">Repairs</a></li>
                                        <li> <a href="./mod_general.php?page=manageReports">reports</a></li>
                                        <li class="logout"><a href="./mod_general.php?page=logout">Logout</a></li>
                                    </ul>
                                </div>
            <?php
        }

        function housingOfficerHomePage() {
            ?>

                                <div class="menu">
                                    <ul>
                                        <li> <a href="./mod_general.php?page=houseSignIns">Manage houses let_in</a></li>
                                        <li> <a href="./mod_general.php?page=houseSignOuts">Manage houses let_out</a></li>
                                        <li> <a href="./mod_general.php?page=houseRepairs">Manage Repair</a></li>
                                        <li class="logout"><a href="./mod_general.php?page=logout">Logout</a></li>
                                    </ul>
                                </div>
            <?php
            $this->footer();
            ?>
                                <?php
                            }

                            function tenantHomepage() {
                                ?>
                                <div class="menu">
                                    <ul>
                                        <li>  <a href="./mod_general.php?page=manageProfile">Manage profile</a></li>
                                        <li> <a href="./mod_general.php?page=applyForRepair">apply for repair</a></li>
                                        <li><a href="./mod_general.php?page=contractDetails">view contract details</a></li>
                                        <li class="logout"><a href="./mod_general.php?page=logout">Logout</a></li>
                                    </ul>
                                </div>

            <?php
        }

        function applicantHomepage() {
            ?>
                                <div class="menu">
                                    <ul>
                                        <li>  <a href="./mod_general.php?page=manageProfile">Manage profile</a></li>
                                        <li>  <a href="./mod_general.php?page=applyForAhouse">apply for a house</a></li>
                                        <li class="logout"><a href="./mod_general.php?page=logout">Logout</a></li>
                                    </ul>
                                </div>
                                <h>i am an applicant</h>
            <?php
        }

        /* -------------------------foooter-------------------------------- */

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
    