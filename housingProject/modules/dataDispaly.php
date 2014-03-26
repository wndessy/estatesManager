<?php

/**
 * Description of dataDispaly
 * * for desplay formating and the html outlook of the data from the database

 * @author wndessy
 */
class dataDispaly {

    function applicantsList() {
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
        $x = $db->listAllApplicants();
        
        while ($row = mysql_fetch_array($x)){        ?>
                
                
      <tr>
                    <td><?php echo $row['FirstName'];?></td>
                    
                    <td><?php echo $row['LastName'];?></td>
                    <td><?php echo $row['Gender'];?></td>
                    <td><?php echo $row['Designation'];?></td>
                    <td><?php echo $row['Grade'];?></td>
                    <td><?php echo $row['Department'];?></td>
                    <td><?php echo $row['aprovalStatus'];?></td>
                    <td><input type="button" class="exploreUser" id="<?php echo$row['ApplicantId']; ?>" value="Explore"/></td>
                </tr>
       <?php }?>
           </table>

        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                $("[type=button]").live('click', General.buttonClicked);
            });
        </script>
        <?php
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
        
        while ($row = mysql_fetch_array($x)){        ?>
                
                
      <tr>
                    <td><?php echo $row['FirstName'];?></td>
                    
                    <td><?php echo $row['LastName'];?></td>
                    <td><?php echo $row['Gender'];?></td>
                    <td><?php echo $row['Designation'];?></td>
                    <td><?php echo $row['Grade'];?></td>
                    <td><?php echo $row['Department'];?></td>
                    <td><?php echo $row['aprovalStatus'];?></td>
                    <td><input type="button" class="exploreUser" id="<?php echo$row['ApplicantId']; ?>" value="Explore"/></td>
                </tr>
       <?php }?>
           </table>

        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                $("[type=button]").live('click', General.buttonClicked);
            });
        </script>
        <?php
        
    }

    function houseAallocationList() {
        
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
        $x = $db->listAllHouseApplications();
        
        while ($row = mysql_fetch_array($x)){        ?>
                
                
      <tr>
                    <td><?php echo $row['FirstName'];?></td>
                    
                    <td><?php echo $row['LastName'];?></td>
                    <td><?php echo $row['Gender'];?></td>
                    <td><?php echo $row['Designation'];?></td>
                    <td><?php echo $row['Grade'];?></td>
                    <td><?php echo $row['Department'];?></td>
                    <td><?php echo $row['aprovalStatus'];?></td>
                    <td><input type="button" class="exploreUser" id="<?php echo$row['ApplicantId']; ?>" value="Explore"/></td>
                </tr>
       <?php }?>
           </table>

        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                $("[type=button]").live('click', General.buttonClicked);
            });
        </script>
        <?php
        
    }

}
