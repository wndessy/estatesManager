var index = 0;
var popupStatus = 0; // set value
var General = {
    buttonClicked: function() {

        if (this.className === "userLogin") {

            var email = $("#email").val(), password = $("#pass").val();
            if ((email !== "") && (password !== "")) {
                $.ajax({
                    type: "GET", url: '../modules/mod_general.php?page=validateUser&email=' + email + "&password=" + password,
                    async: false,
                    error: function(data) {
                        console.log(data);
                        alert(data);
                    },
                    success: function(data) {
                        if ($.trim(data) === 'Welcome') {
                            alert(data);
                            window.location = "../modules/mod_general.php?page=successUserLogin";
                        }
                        else {
                            alert("Sorry. Please check your email or password");
                            alert(data);
                        }
                    }
                });
            }
            else {
                alert("Please fill all the fields");
            }
        }

        if (this.className === "staffLogin") {

            var email = $("#email").val(), password = $("#pass").val();
            if ((email !== "") && (password !== "")) {
                $.ajax({
                    type: "GET",
                    url: '../modules/mod_general.php?page=validateStaff&email=' + email + "&password=" + password, async: false,
                    error: function(data) {
                        alert(data);
                    },
                    success: function(data) {
                        alert(data);
                        if ($.trim(data) !== '') {
                            if ($.trim(data) === '1') {
                                window.location = "../modules/mod_general.php?page=successAdminLogin";
                            } else if ($.trim(data) === '2') {
                                window.location = "../modules/mod_general.php?page=successManagerLogin";
                            } else if ($.trim(data) === '3') {
                                window.location = "../modules/mod_general.php?page=successHousingOfficerLogin";
                            } else {
                                window.location = "../modules/mod_general.php?page=successStaffLogin";
                            }

                        }
                        else {
                            alert("Sorry. Please check your email or password");
                        }
                    }
                });
            }
            else {
                alert("Please fill all the fields");
            }

        }

        /**
         * for managing the user registration form
         */


        if (this.className === "personalNext") {
            if ($("#fname").val() === "") {
                $("#fname").focus();
            }
            if ($("#lname").val() === "") {
                $("#lname").focus();
            }
            if ($("#gender").val() === "") {
                $("#gender").focus();
            }
            if ($("#Mstatus").val() === "") {
                $("#Mstatus").focus();
            }

            if ($("#disabled").val() === "") {
                $("#disabled").focus();
            }
            $("#personalDetais").fadeOut()
            $("#jobDetails").fadeIn();
        }

        if (this.className === "submitDetails") {


            var children = {};    // Create empty javascript object
            $("#children_container :input").each(function() {           // Iterate over inputs
                children[$(this).attr('id')] = $(this).val();  // Add each to features object
            });


            var applicantDetail = {
                "fname": $("#fname").val(),
                "lname": $("#lname").val(),
                "gender": $("#gender").val(),
                "Mstatus": $("#Mstatus").val(),
                "disabled": $("#disabled").val(),
                "IdOrPasport": $("#IdOrPasport").val(),
                "phone": $("#phone").val(),
                "PayrolNumber": $("#PayrolNumber").val(),
                "Designation": $("#Designation").val(),
                "Grade": $("#Grade").val(),
                "CommencementOfDuty": $("#CommencementOfDuty").val(),
                "Department": $("#Department").val(),
                "HeadOfDepartment": $("#HeadOfDepartment").val(),
                "Email": $("#Email").val(),
                "password": $("#password").val(),
            };
            $.ajax({
                type: "POST",
                url: "../modules/mod_general.php?page=addUser&applicantDetail=" + JSON.stringify(applicantDetail) + "$children=" + JSON.stringify(children),
                async: false,
                success: function(result) {
                    alert(result);
                    console.log(result);
                    window.location = "../modules/mod_general.php?page=adminLogin"
                },
                error: function(result) {
                    alert(result);
                }});
        }

        if (this.className === "updateProfile") {
            $("input").prop(':disabled', true);
            /* if ($("Email").val==""){
             $("Email").focus();
             }*/
            var updateApplicantDetails = {
                "Mstatus": $("#Mstatus").val(),
                "disabled": $("#disabled").val(),
                "phone": $("#phone").val(),
                "Designation": $("#Designation").val(),
                "Grade": $("#Grade").val(),
                "Department": $("#Department").val(),
                "HeadOfDepartment": $("#HeadOfDepartment").val(),
            };
            $.ajax({
                type: "POST",
                url: "../modules/mod_general.php?page=updateUser&updateDetail=" + JSON.stringify(applicantDetail),
                async: false,
                success: function(result) {
                    alert(result);
                    console.log(result);
                    //  window.location = "../modules/mod_general.php?page=tenantHomepage"
                },
                error: function(result) {
                    alert(result);
                }});
        }

        if (this.className === "AddAChild") {
            var myindex = index;
            myindex++;
            index = myindex;
            $.ajax({
                type: "POST",
                url: "../modules/mod_general.php?page=addAChild&childNumber=" + index,
                async: false,
                success: function(result) {
                    $("#children_container").append(result);
                },
                error: function(result) {
                    alert(result);
                }});

        }

        if (this.className === "selectedHouse") {
            var x = $("input:checked");
            var values = "";
            for (i = 0; i < x.length; i++) {
                if (i < x.length - 1) {
                    values += (x[i].value) + ",";
                }
                else {
                    values += (x[i].value);
                }
            }
            $.ajax({
                type: "GET",
                url: "../modules/mod_general.php?page=houseChosenforApplication&selectedHouses=" + values,
                async: false,
                success: function(result) {
                    alert(result);
                    window.location = "../modules/mod_general.php?page=tenantHomepage";
                    //window.location = "../modules/mod_general.php?page=adminLogin"

                },
                error: function(result) {
                    alert("error adding an application detail");
                }});

        }



        if (this.className === "addStaff") {

            // if (($("#name").val() === "") ||($("#email").val() === "")||( $("#password").val())|| ($("#userLevel").val())){
            //   alert("please fill in all fields");
            //}
            // else {
            var staffDetail = {
                "name": $("#name").val(),
                "email": $("#email").val(),
                "password": $("#password").val(),
                "userLevel": $("#userLevel").val(),
            };
            $.ajax({
                type: "POST",
                url: "../modules/mod_general.php?page=addStaff&staffDetail=" + JSON.stringify(staffDetail),
                async: false,
                success: function(result) {
                    alert(result);
                    console.log(result);
                    //window.location = "../modules/mod_general.php?page=staffLogin"
                },
                error: function(result) {
                    alert(result);
                }});
        }

        if (this.className === "triggerHouseAllocation") {
            $.ajax({
                type: "POST",
                url: "../modules/mod_general.php?page=alocateHouses",
                async: false,
                success: function(result) {
                    alert(result);
                },
                error: function(result) {
                    alert(result);
                }});
        }


        if (this.className === "submitletDetails") {
            var features = {};    // Create empty javascript object
            $("textarea").each(function() {           // Iterate over inputs
                features[$(this).attr('id')] = $(this).val();  // Add each to features object
            });
            $.ajax({
                type: "POST",
                url: "../modules/mod_general.php?page=submitLetDetails&features=" + JSON.stringify(features),
                async: false,
                success: function(result) {
                    alert(result);
                    console.log(result);
                    //  window.location = "../modules/mod_general.php?page=tenantHomepage"
                },
                error: function(result) {
                    alert(result);
                }});

        }
    },
    /*
     * select boxes function
     * 
     */
    selectionChanged: function() {
        if (this.id === "houseTypeselect") {
            $.ajax({
                type: "POST",
                url: "../modules/mod_general.php?page=getHouseNumbers&houseType=" + this.value,
                async: false,
                success: function(result) {
                    $('#houseNumberDiv').html(result);
                },
                error: function(result) {
                    alert(result);
                }});

        }
        if (this.id === "houseNumberSelect") {
            $.ajax({
                type: "POST",
                url: "../modules/mod_general.php?page=displayLettingForm&houseNo=" + this.value + "&houseType=" + $('#houseTypeselect').val(),
                async: false,
                success: function(result) {
                    //console.log(result);
                    //alert(result);
                    $('#DisplayettingForm').html(result);

                    General.loading(); // loading
                    setTimeout(function() { // then show popup, deley in .5 second
                        General.loadPopup(); // function show popup 
                    }, 500); // .5 second

                },
                error: function(result) {
                    alert(result);
                }});

        }

    },
    /************** start: functions. **************/
    loading: function() {
        $("div.loader").show();
    },
    closeloading: function() {
        $("div.loader").fadeOut('normal');
    },
    loadPopup: function() {
        if (popupStatus == 0) { // if value is 0, show popup
            General.closeloading(); // fadeout loading
            $("#toPopup").fadeIn(0500); // fadein popup div
            $("#backgroundPopup").css("opacity", "0.7"); // css opacity, supports IE7, IE8
            $("#backgroundPopup").fadeIn(0001);
            popupStatus = 1; // and set value to 1
        }
    },
    disablePopup: function() {
        if (popupStatus == 1) { // if value is 1, close popup
            $("#toPopup").fadeOut("normal");
            $("#backgroundPopup").fadeOut("normal");
            popupStatus = 0;  // and set value to 0
        }
    }
};
