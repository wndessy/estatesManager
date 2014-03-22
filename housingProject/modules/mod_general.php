<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

/**
 * forselecting the approapriate login form
 */
if (isset($_GET['page']) && $_GET['page'] == 'userLogin') {
    include_once './Forms.php';
    $form = new Forms();
    $form->login("user");
} else if (isset($_GET['page']) && $_GET['page'] == 'staffLogin') {
    include_once './Forms.php';
    $form = new Forms();
    $form->login("staff");
} else if (isset($_GET['page']) && $_GET['page'] == 'register') {
    include_once './Forms.php';
    $form = new Forms();
    $form->generalUsersSignUpForm();
}
/**
 * for validating users
 */
// for general user validation 
else if (isset($_GET['page']) && $_GET['page'] == 'validateUser') {
    include_once './Users.php';
    $form = new Users();

    if (isset($_GET['email']) && isset($_GET['password'])) {
        $email = $_GET['email'];
        $password = $_GET['password'];
        if ($form->validateUser($email, $password)) {
            echo 'Welcome';
        } else {
            echo 'not welcome!';
        }
    }
}
/* for staff validation */ else if (isset($_GET['page']) && $_GET['page'] == 'validateStaff') {
    include_once './Users.php';
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
 */ 
else if (isset($_GET['page']) && $_GET['page'] == 'successAdminLogin') {
    include_once './Forms.php';
    $form = new Forms;
    $form->superUserHomepage();
}else if (isset($_GET['page']) && $_GET['page'] == 'successManagerLogin') {
    include_once './Forms.php';
    $form = new Forms;
    $form->managerHomePage();
}else if (isset($_GET['page']) && $_GET['page'] == 'successStaffLogin') {
    include_once './Forms.php';
    $form = new Forms;
    $form->staffHomePage();
} else if (isset($_GET['page']) && $_GET['page'] == 'successUserLogin') {
    include_once './Forms.php';
    $form = new Forms;
    $form->applicantHomepage();
}

/**
 * for adding new ussers 
 * 
 */ else if (isset($_GET['page']) && $_GET['page'] == 'addUser') {
    include_once './Users.php';
    $form = new Users();
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

    include_once './Users.php';
    include_once './Forms.php';
    $applicationform = new Forms();
    session_start();
    echo $_SESSION['Grade'];
    $applicationform->applyForHouse($_SESSION['Grade']);
} else if (isset($_GET['page']) && $_GET['page'] == 'houseChosenforApplication') {
    include_once './DbModules.php';
    include_once './Forms.php';
    $dbinsert = new DbModules();
    $houses = $_GET['selectedHouses'];

    $data = explode(",", $houses);
    foreach ($data as $d) {
        $dbinsert->addHouseApplication($d);
        echo "success";
    }
} else if (isset($_GET['page']) && $_GET['page'] == 'tenantHomepage') {
    include_once './DbModules.php';
    include_once './Forms.php';
    $form = new Forms();
    $form->tenantHomepage();
}

/*
 * 
 * profile management
 */
// link tab to manage profile page
else if (isset($_GET['page']) && $_GET['page'] == 'manageProfile') {
    include_once './DbModules.php';
    include_once './Forms.php';
    session_start();
    $form = new Forms();
    $form->ViewAndEditDetails($_SESSION['applicantId']);
} else if (isset($_GET['page']) && $_GET['page'] == 'updateUser') {
    include_once './Users.php';
    $form = new Users();
    if (isset($_GET['updateDetail'])) {
        $json = $_GET['updateDetail'];
        $form->updateUser($_GET['updateDetail']);
    } else {
        echo "An eerror was encountered while updating the details";
    }
}

/*
 * for managing staff pages
 */ else if (isset($_GET['page']) && $_GET['page'] == 'manageStaff') {
    include_once './Forms.php';
    $form = new Forms();
    $form->addStaffForm();
} else if (isset($_GET['page']) && $_GET['page'] == 'addStaff') {
    include_once './Users.php';
    $form = new Users();
    if (isset($_GET['staffDetail'])) {
        $json = $_GET['staffDetail'];
        $form->addStaff($_GET['staffDetail']);
    } else {
        echo "there was an error loging in.please try again";
    }
}



/*
 * child section manipulation
 */ else if (isset($_GET['page']) && $_GET['page'] == 'addAChild') {
    include_once './DbModules.php';
    include_once './Forms.php';
    $form = new Forms();
    $form->childDetailAddition($_GET['childNumber']);
}


/*
 * managing the manager pages and their menu
 */
else if (isset($_GET['page']) && $_GET['page'] == 'manageApplicants') {
    include_once './DbModules.php';
    include_once './Forms.php';
    include_once './dataDispaly.php';
  $output = new dataDispaly();
  $output->applicantsList();

 }
 
else if (isset($_GET['page']) && $_GET['page'] == 'manageTenants') {
    include_once './DbModules.php';
    include_once './Forms.php';
include_once './dataDispaly.php';
  $output = new dataDispaly();
  $output->tenantsList();
 }
 else if (isset($_GET['page']) && $_GET['page'] == 'manageAllocations') {
    include_once './DbModules.php';
    include_once './Forms.php';
include_once './dataDispaly.php';
  $output = new dataDispaly();
  $output->houseAallocationList();
 }
 else if (isset($_GET['page']) && $_GET['page'] == 'manageRepairs') {
    include_once './DbModules.php';
    include_once './Forms.php';
include_once './dataDispaly.php';
  $output = new dataDispaly();
  $output->houseRepairsList();
 }
 else if (isset($_GET['page']) && $_GET['page'] == 'manageReports') {
    include_once './DbModules.php';
    include_once './Forms.php';
    include_once './dataDispaly.php';
  $output = new dataDispaly();
  $output->reportsList();

 }
 
 /*
  * exploring further the details of a user
  */
 
 else if (isset($_GET['page']) && $_GET['page'] == 'exploreuser') {
    include_once './DbModules.php';
    include_once './Forms.php';
    include_once './dataDispaly.php';
    $userId=$_GET['userId'];
  $output = new Forms();
  $output->ViewAndEditDetails($userId);

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



