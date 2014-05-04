<?php
//ini_set('display_errors', 1);
//error_reporting(E_ALL);

/**
 * forselecting the approapriate login form
 */
if (isset($_GET['page']) && $_GET['page'] == 'userLogin') {
    include_once './Forms.php';
    $form = new Forms();
    $form->header();
    $form->login("user");
    $form->footer();
} else if (isset($_GET['page']) && $_GET['page'] == 'staffLogin') {
    include_once './Forms.php';
    $form = new Forms();
    $form->header();
    $form->login("staff");
    $form->footer();
} else if (isset($_GET['page']) && $_GET['page'] == 'register') {
    include_once './Forms.php';
    $form = new Forms();
      $form->header();
    $form->generalUsersSignUpForm();
    $form->footer();
}
/**
 * for validating users
 */ else if (isset($_GET['page']) && $_GET['page'] == 'validateUser') {
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
/*
 * for staff validation 
 */ else if (isset($_GET['page']) && $_GET['page'] == 'validateStaff') {
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
 */ else if (isset($_GET['page']) && $_GET['page'] == 'successAdminLogin') {
    include_once './Forms.php';
    $form = new Forms;
      $form->header();
  //  $form->superUserHomepage();
} else if (isset($_GET['page']) && $_GET['page'] == 'successManagerLogin') {
    include_once './Forms.php';
    $form = new Forms;
     $form->header();
   // $form->managerHomePage();
} else if (isset($_GET['page']) && $_GET['page'] == 'successHousingOfficerLogin') {
    include_once './Forms.php';
    $form = new Forms;
      $form->header();
   // $form->housingOfficerHomePage();
} else if (isset($_GET['page']) && $_GET['page'] == 'successStaffLogin') {
    include_once './Forms.php';
    $form = new Forms;
      $form->header();
  //  $form->staffHomePage();
} else if (isset($_GET['page']) && $_GET['page'] == 'successUserLogin') {
    include_once './Forms.php';
    $form = new Forms;
      $form->header();
    //$form->applicantHomepage();
}

/**
 * for adding new ussers 
 * 
 */ else if (isset($_GET['page']) && $_GET['page'] == 'addUser') {
    include_once './Users.php';
    $form = new Users();
    if (isset($_GET['applicantDetail'])) {
        $pesonal = $_GET['applicantDetail'];
       $form->addUsser($pesonal);
     
            } else {
        echo "Erorr addding new user";
    }
}
 else if (isset($_GET['page']) && $_GET['page'] == 'updateUser') {
    include_once './Users.php';
    $users = new Users();
    if (isset($_GET['applicantDetail'])) {
        $pesonal = $_GET['applicantDetail'];
          $users->updateUser($pesonal);
     
            } else {
        echo "Erorr updating your details please try later";
    }
}

/*
 * for user house application
 * 
 */
//link tab to apply for a house page

else if (isset($_GET['page']) && $_GET['page'] == 'applyForAhouse') {
    session_start();
    include_once './Forms.php';
    include_once './dataDispaly.php';
    $form = new Forms();
     $form->header();
    $display= new dataDispaly();
    $display->housesAppliedForList($_SESSION['applicantId']);
    $form->houseToApplyFor();
    $form->footer();
} else if (isset($_GET['page']) && $_GET['page'] == 'houseChosenforApplication') {
    include_once './DbModules.php';
    include_once './Forms.php';
    $dbinsert = new DbModules();
    $houses = $_GET['selectedHouses'];

    $data = explode(",", $houses);
    foreach ($data as $d) {
        $dbinsert->addHouseApplication($d);
        echo "success fully applied for the selected houses";
    }
} else if (isset($_GET['page']) && $_GET['page'] == 'tenantHomepage') {
    include_once './DbModules.php';
    include_once './Forms.php';
      $form->header();
    $form = new Forms();
    $form->tenantHomepage();
    $form->footer();
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
    $form->header();
    //echo $_SESSION['applicantId'];
    $form->ViewAndEditDetails($_SESSION['applicantId']);
    $form->footer();
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
    $form->header();
    $form->addStaffForm();
    $form->footer();
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
 */ else if (isset($_GET['page']) && $_GET['page'] == 'manageApplicants') {
    include_once './Forms.php';
    include_once './dataDispaly.php';
    $output = new dataDispaly();
    $form=new Forms();
    $form->header();
    $output->applicantsList();
    $form->footer();
    
}else if (isset($_GET['page']) && $_GET['page'] == 'manageHouseApplication') {
      include_once './dataDispaly.php';
          include_once './dataDispaly.php';
       $form=new Forms();
    $form->header();
     $output = new dataDispaly(); 
     $output->houseApplicationList();
     $form->footer();
}

else if (isset($_GET['page']) && $_GET['page'] == 'alocateHouses') {
    
     include_once './dataDispaly.php';
      include_once './evaluation.php';
     $eval=new evaluation(); 
     $output = new dataDispaly(); 
     $eval->allocateHouse();
  //  $output->houseAallocationList();
}

else if (isset($_GET['page']) && $_GET['page'] == 'manageHouseAllocation') {
    include_once './Forms.php';
    include_once './dataDispaly.php';
     $form=new Forms();
    $form->header();
    $output = new dataDispaly();
    $output->houseAallocationList();
    $form->footer();
} else if (isset($_GET['page']) && $_GET['page'] == 'manageTenants') {
    include_once './Forms.php';
    include_once './dataDispaly.php';
     $form=new Forms();
    $form->header();
    $output = new dataDispaly();
    $output->tenantsList();
    $form->footer();
} else if (isset($_GET['page']) && $_GET['page'] == 'manageRepairs') {
    include_once './Forms.php';
    include_once './dataDispaly.php';
     $form=new Forms();
    $form->header();
    $output = new dataDispaly();
    $output->applicantsList();
    $form->footer();
} else if (isset($_GET['page']) && $_GET['page'] == 'manageReports') {
      include_once './Forms.php';
    include_once './dataDispaly.php';
     $form=new Forms();
    $form->header();
    $output = new dataDispaly();
    $output->applicantsList();
    $form->footer();
}

/*
 * managing the housing officer  pages and their menu
 */ else if (isset($_GET['page']) && $_GET['page'] == 'houseSignIns') {
    include_once './dataDispaly.php';
    $output = new dataDispaly();
    $output->pageForHouseCondition();
} else if (isset($_GET['page']) && $_GET['page'] == 'getHouseNumbers') {
    include_once './dataDispaly.php';
    $output = new dataDispaly();
    $houseType = trim($_GET["houseType"]);
    $output->getHouseNumberSelectBox($houseType);
}
 else if (isset($_GET['page']) && $_GET['page'] == 'displayLettingForm') {
    include_once './dataDispaly.php';
    $output = new dataDispaly();
    $array = $_GET["values"];
    $houseType =$array[2];
    //echo $houseType;
   // $houseNo=trim($_GET["houseNo"]);
      $output->displayLettingForm($houseType,$array);       
}
else if (isset($_GET['page']) && $_GET['page'] == 'submitLetDetails') {
    include_once './DbModules.php';
    $db = new DbModules();
    $details=$_GET["features"];
  $db->addLetintDetails($details);       
}
/*
 * -------------------------------logout-----------------------
 */

else if (isset($_GET['page']) && $_GET['page'] == 'logout') {
    include_once './Users.php';
   $users=new Users();
    $users->logout();  
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



