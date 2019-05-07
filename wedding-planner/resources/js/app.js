// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
    'use strict';
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();

(function(){
    window.addEventListener('load', function() {
        document.getElementById('detailsForm').addEventListener('submit',window.validation);
      //  document.getElementById('detailsForm').addEventListener('focusout',window.validation);
        document.getElementById('completeButton').addEventListener('click',window.complete);
    },false);
})();

window.disableFields = function()
{
    var allInputs=document.getElementsByTagName('input');
    for(var p=0; p < allInputs.length-4; p++)
    {
        allInputs[p].setAttribute('readonly','readonly');
    } 
    
    var allSelects=document.getElementsByTagName('select');
    for(var p=0; p < allSelects.length; p++)
    {
        allSelects[p].disabled=true;
    }

    var allRadios = document.getElementsByClassName("form-check-input");
    
    for(var x=0; x < allRadios.length-4; x++)
    {
        //console.log(allRadios[x].id);
        document.getElementById(allRadios[x].id).disabled=true;
    }

    document.getElementById('completeModalButton').style.display='none';
    document.getElementById('saveWedding').style.display = 'none';
};

window.complete = function()
{
    document.getElementById("complete").checked = true;
    document.getElementById("acomplete").checked=true;
    
    document.getElementById('completeModalButton').style.display='none';
    document.getElementById('saveWedding').style.display = 'none';
};

import $ from 'jquery';
window.$ = window.jQuery = $;

//runs nav bar tab styles - I'm not proud of this, and there's probably a more dynamic way to do it.
$(function() {
    if(window.location.href.indexOf("home") >= 0) {
        $("#navbar-home > a.nav-link").addClass("active");
    } else
    if(window.location.href.indexOf("weddings/search") >= 0) {
        $("#navbar-search > a.nav-link").addClass("active");
    } else
    if(window.location.href.indexOf("weddings/create") >= 0) {
        $("#navbar-create > a.nav-link").addClass("active");
    } else
    if(window.location.href.indexOf("music") >= 0) {
        $("#navbar-music > a.nav-link").addClass("active");
    } else
    if(window.location.href.indexOf("readings") >= 0) {
        $("#navbar-readings > a.nav-link").addClass("active");
    } else
    if(window.location.href.indexOf("login") >= 0) {
        $("#navbar-login > a.nav-link").addClass("active");
    } else
    if(window.location.href.indexOf("logout") >= 0) {
        $("#navbar-logout > a.nav-link").addClass("active");
    } else {
        $("#navbar-home > a.nav-link").addClass("active");
    }
});

import 'jquery-ui/ui/widgets/datepicker.js';
import 'datatables/media/js/jquery.dataTables.js';
require('./bootstrap');

//runs necessary styles for wedding detail nav bar
window.readyNavBar = function() {
    $( "div.card-header .nav-link").bind("click",function(){
        let oldTab = $( "div.card-header .nav-link.active" );
        oldTab.removeClass("active");
        let oldTabId = oldTab.attr('id').split("-")[0];
        $(`#${oldTabId}`).addClass("inactive");

        $(this).addClass("active");
        let newTabId = $(this).attr('id').split("-")[0];
        $(`#${newTabId}`).removeClass("active").removeClass("inactive");
    });
};

window.addDeletePart = function()
{
    var counter = $( "input" ).length - 4;
   $(document).on('click', '.btn-add', function(e)
   {
       e.preventDefault();
        counter++;
       //bridal party
       var controlForm = $('.controls .list:last'),
           currentEntry = $(this).parents('.entry:last');
          var newEntry = $(currentEntry.clone()).appendTo(controlForm);
       
          var stringID = 'participant['+ counter +']';

        newEntry.find('input').attr('name', stringID);
        newEntry.find('input').val('');
        
        controlForm.find('.entry:not(:last) .btn-add')
           .removeClass('btn-add').addClass('btn-remove')
           .removeClass('btn-success').addClass('btn-danger')
           .removeClass('glyphicon-plus').addClass('glyphicon-minus');
     })
   
        //remove button
   .on('click', '.btn-remove', function(e)
        {
            $(this).parents('.entry:first').remove();
            e.preventDefault();
            return false;
        });
};

window.addDeleteUsher = function()
{
    

    var counter2 = $( "input" ).length - 4;
   $(document).on('click', '.btn-add', function(e)
   {
       e.preventDefault();
        counter2++;
 
        //ushers
           var controlForm2 = $('.controls2 .list2:last'),
               currentEntry2 = $(this).parents('.entry2:last');
              var newEntry2 = $(currentEntry2.clone()).appendTo(controlForm2);
              var stringID2 = 'usher['+ counter2 +']';

              newEntry2.find('input').attr('name', stringID2);
            newEntry2.find('input').val('');
            
            controlForm2.find('.entry2:not(:last) .btn-add')
               .removeClass('btn-add').addClass('btn-remove')
               .removeClass('btn-success').addClass('btn-danger')
               .removeClass('glyphicon-plus').addClass('glyphicon-minus');
           
        })
   
        //remove button
   .on('click', '.btn-remove', function(e)
        {
            $(this).parents('.entry2:first').remove();
            e.preventDefault();
            return false;
        });
};

//------------------------------------
$(document).ready(function() {
    //makes each row clickable and takes staff to edit page
        $(".clickable-row").click(function() {
            window.location = $(this).data("href");
        });
    
        $('#results').DataTable( {
            "order": [[ 0, "asc" ]]
        } );
    } );

//------------------------------------
window.tabValidation=function(form, link){
   var recordValid=document.getElementById(form).getElementsByTagName('input');
   var validForm = true;
   var gTabText;
   var gtab;
   gTabText=link;
   gtab=document.querySelector(gTabText);
   //console.log(recordValid);
   for(var i=0; i < recordValid.length; i++)
   {
        if(recordValid[i].validity.valid == false)
        {
            validForm = false;
            break;
        }
   }
   if(validForm == true)
   {
     gtab.style.color="#5cb85c";
   }
   else{
    gtab.style.color="#d9534f";
   }
};

window.validation=function(){
    tabValidation("recordForm", "#record-link");
    tabValidation("partyForm", "#party-link");
    tabValidation("ceremonyForm", "#ceremony-link");
    tabValidation("participantsForm", "#participants-link");
    tabValidation("readingsForm", "#readings-link");
    tabValidation("musicForm", "#music-link");
    tabValidation("vendorsForm", "#vendors-link");
};

window.songTypeChanged = function () {

    // PRELUDE
     $("#prelude").change( function () { 
        
        var value = this.value; 
       
        $(".preludeURL").each(function (index) { 

        if (value == $(this).attr("data-url")) { 
   
            $(this).show();
      
        } else {

            $(this).hide(); 
        }

         });
   
     } );

     // lighting of Candle

     $("#lightingOfCandle").change( function () { 
        
        var value = this.value; 
       
        $(".lightingURL").each(function (index) { 

            if (value == $(this).attr("data-url")) { 
   
            $(this).show();
      
        } else {

            $(this).hide(); 
        }

         });
   
     } );

     // Bridesmaid 

     $("#bridesmaidsEntrance").change( function () { 
        
        var value = this.value; 
       
        $(".bridesmaidURL").each(function (index) { 

            if (value == $(this).attr("data-url")) { 
   
            $(this).show();
      
        } else {

            $(this).hide(); 
        }

         });
   
     } );

     // preparation

     $("#preparation").change( function () { 
        
        var value = this.value; 
       
        $(".preparationURL").each(function (index) {

            if (value == $(this).attr("data-url")) { 
   
            $(this).show();
      
        } else {

            $(this).hide(); 
        }

         });
   
     } );

     // bridal enternace

     $("#bridalEntrance").change( function () { 
        
        var value = this.value; 
       
        $(".bridalURL").each(function (index) { 

            if (value == $(this).attr("data-url")) { 
   
            $(this).show();
      
        } else {

            $(this).hide(); 
        }

         });
   
     } );

     // Eucharistic Acclamations

     $("#eucharisticAcclamations").change( function () { 
        
        var value = this.value; 
       
        $(".eucharisticURL").each(function (index) { 

            if (value == $(this).attr("data-url")) { 
   
            $(this).show();
      
        } else {

            $(this).hide(); 
        }

         });
   
     } );

     // gloria

     $("#gloria").change( function () { 
        
        var value = this.value; 
       
        $(".gloriaURL").each(function (index) { 

            if (value == $(this).attr("data-url")){ 
   
            $(this).show();
      
        } else {

            $(this).hide(); 
        }

         });
   
     } );

     // communion

     $("#communion").change( function () { 
        
        var value = this.value; 
       
        $(".communionURL").each(function (index) { 

            if (value == $(this).attr("data-url")) { 
   
            $(this).show();
      
        } else {

            $(this).hide(); 
        }

         });
   
     } );

     // Responsorial Psalm

     $("#responsorialPsalm").change( function () { 
        
        var value = this.value; 
       
        $(".responsorialURL").each(function (index) { 

            if (value == $(this).attr("data-url")) { 
   
            $(this).show();
      
        } else {

            $(this).hide(); 
        }

         });
   
     } );

     // visitation

     $("#visitationToMary").change( function () { 
        
        var value = this.value; 
       
        $(".visitationURL").each(function (index) { 

            if (value == $(this).attr("data-url")) { 
   
            $(this).show();
      
        } else {

            $(this).hide(); 
        }

         });
   
     } );

     // Gospel Acclamation

     $("#gospelAcclamation").change( function () { 
        
        var value = this.value; 
       
        $(".gospelURL").each(function (index) {

            if (value == $(this).attr("data-url")) { 
   
            $(this).show();
      
        } else {

            $(this).hide(); 
        }

         });
   
     } );

     // Recessional

     $("#recessional").change( function () { 
        
        var value = this.value; 
       
        $(".recessionalURL").each(function (index) { 

            if (value == $(this).attr("data-url")){ 
   
            $(this).show();
      
        } else {

            $(this).hide(); 
        }

         });
   
     } );
    }

    window.matrimonyType = function()
{
/** Show/Hide options based on Matrimony Type */
$(document).on('click', '.mass', function (e)
{
    document.getElementById("mass").style.display = "block";
});

$(document).on('click', '.noMass', function (e)
{
    document.getElementById("mass").style.display = "none";
});

$(document).on('click', '.other', function (e)
{
    document.getElementById("mass").style.display = "none";
});
/** */
}


