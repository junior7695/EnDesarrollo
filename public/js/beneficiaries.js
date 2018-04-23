$(document).ready(function(){

                 $('#patria-check').on('click', function(){
                   var c = document.getElementById('patria-check').checked;
                   if (c) {

                    $("#codigo").show();
                    $("#serial").show();
                    $("#correo").show();

                   }

                   else {
                     $("#codigo").hide();
                     $("#serial").hide();
                     $("#correo").hide();

                   }


                 });

                 });