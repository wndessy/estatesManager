/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 function cancelDiv() {
            $("#explorePersonalDetais").hide();
        }

        function ShowDiv() {
            $("#explorePersonalDetais").css("backgroundColor", "white");
            $("#explorePersonalDetais").show();
        }

        $(function () { 
            $("#explorePersonalDetais").hide();
            $("#explorePersonalDetais").draggable();            
        });

