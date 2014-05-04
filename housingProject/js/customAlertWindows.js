/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 function cancelDiv() {
            $("#div1").hide();
        }

        function ShowDiv() {
            $("#div1").css("backgroundColor", "white");
            $("#div1").show();
        }

        $(function () { 
           // $("#div1").hide();
            $("#div1").draggable();            
        });

