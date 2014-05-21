<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?><html>
    <head>
        <meta charset="UTF-8">
        <link rel='stylesheet' href="../stylesheet/styles.css" type='text/css'/>
        <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="js/mine.js"></script>
        <title>Egerton Housing</title>
    </head>
    <body>



        <!-- for inputing personal details-->
        <form action=" newUser_back.php" method="POST">
            <div class="container" id="personalDetais">
                <div class="header">Personal Details</div>
                <div class="input">
                    <label>First Name</label><input type="text" name="fname"/>
                </div>
                <div class="input">
                    <label>Last Name</label><input type="text" name="lname"/>
                </div>
                <div class="input">
                    <label>Gender</label>
                    <label>Male</label><input type="radio" name="gender" value="Male"/>
                    <label>Female</label><input type="radio" name="gender" value="Female"/>
                </div>
                <div class="input">
                    <label>Marital Status</label>
                    Single<input type="radio" name="Mstatus" value="Single"  />
                    Married<input type="radio" name="Mstatus" value="Married"/>
                </div>
                <div class="input">
                    <label>Disabled  Yes<input type="radio" name="disabled" value="1"/> 
                        No<input type="radio" name="disabled" value="0"/> </label>  
                </div><br/>
                <div class="input">
                    <label>ID or Passport</label> <input type="number" name="Id"/>
                </div>
                <div class="input">
                    <label>Phone number</label> <input type="number" name="phone"/>
                </div>

            </div>

            <!-- for inputing job details -->
            <div class="container">
                <div class="header"> Job details</div>
                <div class="input">
                    <label>Payroll number</label> <input type="number" name="PayrolNumber"/>
                </div>
                <div class="input"> <label>Designation</label> <input type="text" name="Designation"/>
                </div>
                <div class="input"> <label>Grade</label> <input type="text" name="Grade"/>
                </div>
                <div class="input"> <label>Commencement of duty </label> <input type="date" name="CommencementOfDuty"/>
                </div>
                <div class="input"> <label>Department </label> <input type="date" name="Department"/>
                </div>
                <div class="input"> <label>Head of department </label> <input type="date" name="HeadOfDepartment"/>
                </div>
                <div class="link button">
                </div>
            </div>

            <!-- for family details-->
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
                    <label>Disabled</label> Yes<input type="radio" name="cdisabled" value="1"/> 
                    No<input type="radio" name="cdisabled" value="0"/> 
                </div>
                <div class="linkbutton">
                    <button type="button" name="AddAChild"> Add a Child</button>
                </div>
            </div>

            <!-- for account login details-->
            <div class="container" >
                <div class="header">account login Details</div>
                <div class="input">
                    <label>Email address</label><input type="text" name="Email"/>
                </div>
                <div class="input">
                    <label>Password</label><input type="password" name="Email"/>
                </div>
                <div class="input">
                    <label>Confirm Password</label><input type="password" name="Email"/>
                </div>
                <div class="linkbutton">
                    <button type="submit" name="submit">Submit details</button>
                </div>

            </div>
        </form>   
    </body>
</html>



<?php
?>

