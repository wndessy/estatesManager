<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of customAllertDisplay
 *
 * @author wndessy
 */
class customAllertDisplay {
 function ViewAndEditDetails($userId) {
        //ession_start();
        $db = new DbModules();
        $resultset = $db->viewApplicantDetails($_SESSION['applicantId']);
        ?>
        <script type="text/javascript" src="../jquery/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="../js/general.js"></script>
        <div class="container" id="explorePersonalDetais">
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

            <div class="container" >
           <div class="header">Children  Details</div>
                <?php
                     $row= $db->viewApplicantsCnildren($_SESSION['applicantId']);
                if ($row!= null) {
                    ?><table>
                        <tr>
                            <td>First Name</td><td>Last Name</td><td>Date of birth </td><td>Gender</td><td>Disabled</td>
                        </tr>
                        <<?php
                        while ($row) {
                            ?>
                            <tr>
                                <td><?php echo $row['fname']; ?></td><?php echo $row['FirstName']; ?><td><?php echo $row['dob']; ?></td><td><?php echo $row['gernder']; ?></td>
          
                            </tr><?php }
                     ?></table>
                    <?php }
                    ?>
           <div id="newChild">
               
                </div>
                
                <div class="linkbutton">
                    <input  type="button" class="AddAChild" id="AddAChild" value="Add Child"/> 
                </div>

                  </div> <!-- END List Wrap -->
                  <div class="linkbutton">
                  <input  type="button" id="submitDetails" class="updateProfile" value="Update Details"/> 
                    </div>
        </div>
                  <script type="text/javascript">
                    $(document).ready(function() {
                        $("[type=button]").live('click', General.buttonClicked);
                    });
                </script>
                <?php
            }

            
   }
