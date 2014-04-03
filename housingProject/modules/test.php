<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

/**
 * forselecting the approapriate login form
 */
include'./Forms.php';
include'./Users.php';
include './dataDispaly.php';
include './DbModules.php';
include './evaluation.php';
include './houseClasses/houseSpecific.php';
//include './houseClasses/housesCommon.php';
    $form = new Forms;
    $user = new Users();
    $db = new DbModules();
   $display = new dataDispaly();


if (isset($_GET['page']) && $_GET['page'] == 'userLogin') {
   // include_once './Forms.php';
    //$form = new Forms();
    $form->login("user");
} else if (isset($_GET['page']) && $_GET['page'] == 'staffLogin') {
    //include_once './Forms.php';
   // $form = new Forms();
    $form->login("staff");
} else if (isset($_GET['page']) && $_GET['page'] == 'register') {
    //include_once './Forms.php';
   // $form = new Forms();
    $form->generalUsersSignUpForm();
}
/**
 * for validating users
 */ else if (isset($_GET['page']) && $_GET['page'] == 'validateUser') {
   // include_once './Users.php';
   // $user = new Users();

    if (isset($_GET['email']) && isset($_GET['password'])) {
        $email = $_GET['email'];
        $password = $_GET['password'];
        if ($user->validateUser($email, $password)) {
            echo 'Welcome';
        } else {
            echo 'not welcome!';
        }
    }
}
/*
 * for staff validation 
 */ else if (isset($_GET['page']) && $_GET['page'] == 'validateStaff') {
   // include_once './Users.php';
    $form = new Users();

    if (isset($_GET['email']) && isset($_GET['password'])) {
        $email = $_GET['email'];
        $password = $_GET['password'];

        if ($form->validateStaff($email, $password)) {
            $userLevel = $_SESSION['userLevel'];
            echo$userLevel;
        } else {
            
        }
    }
}
/**
 * after fuccessfull logins then what happens
 */ else if (isset($_GET['page']) && $_GET['page'] == 'successAdminLogin') {
   // include_once './Forms.php';
   // $form = new Forms;
    $form->superUserHomepage();
} else if (isset($_GET['page']) && $_GET['page'] == 'successManagerLogin') {
    //include_once './Forms.php';
   // $form = new Forms;
    $form->managerHomePage();
} else if (isset($_GET['page']) && $_GET['page'] == 'successHousingOfficerLogin') {
   // include_once './Forms.php';
   // $form = new Forms;
    $form->housingOfficerHomePage();
} else if (isset($_GET['page']) && $_GET['page'] == 'successStaffLogin') {
   // include_once './Forms.php';
   // $form = new Forms;
    $form->staffHomePage();
} else if (isset($_GET['page']) && $_GET['page'] == 'successUserLogin') {
   // include_once './Forms.php';
   // $form = new Forms;
    $form->applicantHomepage();
}

/**
 * for adding new ussers 
 * 
 */ else if (isset($_GET['page']) && $_GET['page'] == 'addUser') {
   // include_once './Users.php';
    //$form = new Users();
    if (isset($_GET['applicantDetail'])) {
        $json = $_GET['applicantDetail'];
        $form->addUsser($_GET['applicantDetail']);
    } else {
        echo "Erorr addding new user";
    }
}




/*
 * for user house application
 * 
 */


//link tab to apply for a house page
else if (isset($_GET['page']) && $_GET['page'] == 'applyForAhouse') {

    //include_once './Users.php';
    //include_once './Forms.php';
    //$applicationform = new Forms();
    session_start();
    echo $_SESSION['Grade'];
    $form->housesAppliedForList($applicantId);
    $form->applyForHouse($_SESSION['Grade']);
} else if (isset($_GET['page']) && $_GET['page'] == 'houseChosenforApplication') {
    //include_once './DbModules.php';
   // include_once './Forms.php';
    $db = new DbModules();
    $houses = $_GET['selectedHouses'];

    $data = explode(",", $houses);
    foreach ($data as $d) {
        $db->addHouseApplication($d);
        echo "success";
    }
} else if (isset($_GET['page']) && $_GET['page'] == 'tenantHomepage') {
    //include_once './DbModules.php';
  //  include_once './Forms.php';
   // $form = new Forms();
    $form->tenantHomepage();
}

/*
 * 
 * profile management
 */
// link tab to manage profile page
else if (isset($_GET['page']) && $_GET['page'] == 'manageProfile') {
   // include_once './DbModules.php';
   // include_once './Forms.php';
    session_start();
   // $form = new Forms();
    echo $_SESSION['applicantId'];
    $form->ViewAndEditDetails($_SESSION['applicantId']);
} else if (isset($_GET['page']) && $_GET['page'] == 'updateUser') {
   // include_once './Users.php';
   // $form = new Users();
    if (isset($_GET['updateDetail'])) {
        $json = $_GET['updateDetail'];
        $user->updateUser($_GET['updateDetail']);
    } else {
        echo "An eerror was encountered while updating the details";
    }
}

/*
 * for managing staff pages
 */ else if (isset($_GET['page']) && $_GET['page'] == 'manageStaff') {
  //  include_once './Forms.php';
   // $form = new Forms();
    $form->addStaffForm();
} else if (isset($_GET['page']) && $_GET['page'] == 'addStaff') {
   // include_once './Users.php';
    //$form = new Users();
    if (isset($_GET['staffDetail'])) {
        $json = $_GET['staffDetail'];
        $user->addStaff($_GET['staffDetail']);
    } else {
        echo "there was an error loging in.please try again";
    }
}



/*
 * child section manipulation
 */ else if (isset($_GET['page']) && $_GET['page'] == 'addAChild') {
    //include_once './DbModules.php';
    //include_once './Forms.php';
   // $form = new Forms();
    $form->childDetailAddition($_GET['childNumber']);
}


/*
 * managing the manager pages and their menu
 */ else if (isset($_GET['page']) && $_GET['page'] == 'manageApplicants') {
    //include_once './DbModules.php';
    //include_once './Forms.php';
   // include_once './dataDispaly.php';
   // $display = new dataDispaly();
    $display->applicantsList();
} else if (isset($_GET['page']) && $_GET['page'] == 'manageHouseAllocation') {
    //include_once './DbModules.php';
   // include_once './Forms.php';
   // include_once './dataDispaly.php';
 // $output = new dataDispaly();
    $display->houseAallocationList();
} else if (isset($_GET['page']) && $_GET['page'] == 'manageTenants') {
    //include_once './DbModules.php';
    //include_once './Forms.php';
   // include_once './dataDispaly.php';
    //$output = new dataDispaly();
    $display->tenantsList();
} else if (isset($_GET['page']) && $_GET['page'] == 'manageRepairs') {
   // include_once './DbModules.php';
    //include_once './Forms.php';
    //include_once './dataDispaly.php';
   // $output = new dataDispaly();
    $display->applicantsList();
} else if (isset($_GET['page']) && $_GET['page'] == 'manageReports') {
   // include_once './DbModules.php';
    //include_once './Forms.php';
   // include_once './dataDispaly.php';
   // $output = new dataDispaly();
    $display->applicantsList();
}

/*
 * managing the housing officer  pages and their menu
 */ else if (isset($_GET['page']) && $_GET['page'] == 'houseSignIns') {
    //include_once './Forms.php';
    //include_once './dataDispaly.php';
    //include_once './houseClasses/housesCommon.php';
   // include_once './houseClasses/houseSpecific.php';
   // $display = new dataDispaly();
    $display->pageForHouseCondition();
} else if (isset($_GET['page']) && $_GET['page'] == 'getHouseNumbers') {
    //include_once './dataDispaly.php';
    //$output = new dataDispaly();
    //$houseType = trim($_GET["houseType"]);
    $display->getHouseNumberSelectBox($houseType);
}
 else if (isset($_GET['page']) && $_GET['page'] == 'displayLettingForm') {
    //include_once './dataDispaly.php';
   // $output = new dataDispaly();
    $houseType = trim($_GET["houseType"]);
    $houseNo=trim($_GET["houseNo"]);
  $display->displayLettingForm($houseType,$houseNo);
                

}
/*
 * to display o the default startpage
 */

class General {

    public function defaultPage() {
        ?>
        <h2>This is the default page </h2>

        <a href="modules/mod_general.php?page=userLogin">User login</a><br/>
        <a href="modules/mod_general.php?page=staffLogin">Staff login</a><br/>
        <a href="modules/mod_general.php?page=register">Register</a><br/>

        <?php
    }

}
?>



