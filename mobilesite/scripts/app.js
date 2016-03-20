//Problem: The Drop Down Menu's are NOT populated and Are NOT responsive based on prior responses
//Solution: Implement solution....


//1. Every Time the class selector has been changed {
    $("#classSelector.mobileselect").change( function () {
        console.log("Class Selector mobile Function Confirmation");
        //1.2: Take the selected item's value
        var $classvalue = $(this).val();
        console.log("$classvalue is equal to " + $classvalue);
        //1.3: Target the text document corresponding to the selected element's value
         //1.4: Paste the text from that document underneath the select tag
        
                                    $.ajax({ url: 'inc/dropTwoOptions.php?classvalue=' + $classvalue,
                                        data: {action: 'always'},
                                        type: 'post',
                                        success: function(output) {
                                                        $("#levelSelector.mobileselect").html(output);
                                        }
                                    })
         
         //$("#levelSelector").load("textData/" + $classvalue + ".txt");
        console.log( "Class value is equal to " + $classvalue );
        console.log("textData/" + $classvalue + ".txt");
        console.log("__________________________________");
        console.log("__________________________________");
        });


//2. Every Time the Level Selector has been changed {
    $("#levelSelector.mobileselect").change( function () {
        console.log("Level Selector Function Confirmation");
        //2.2: Take the selected item's value
        var $levelvalue = $(this).val();
        var $classvalue = $("#classSelector.mobileselect").val();
        //2.3: Target the text document corresponding to the selected element's value
        //2.3.2: Make a variable with the $classvalue and the $levelvalue added up
        var $teachervalue = $classvalue + $levelvalue;
        console.log("inc/dropThreeOptions.php?levelvalue=" + $levelvalue + "&classvalue=" + $classvalue);
        $.ajax({ url: 'inc/dropThreeOptions.php?levelvalue=' + $levelvalue + '&classvalue=' + $classvalue,
                                        data: {action: 'always'},
                                        type: 'post',
                                        success: function(output) {
                                                        $("#teacherSelector.mobileselect").html(output);
                                        }
                                    })
        console.log( "Level value is equal to " + $levelvalue );
        console.log( "Class value is equal to " + $classvalue );
        console.log("Teacher value (class and level) is equal to " + $teachervalue);
        console.log("__________________________________");
        console.log("__________________________________");
        });


    
    
    
//3. Teacher Value Changed

    $("#teacherSelector.mobileselect").change( function () {
       console.log("Teacher Selector Function Confirmation");
       //3.1 Establish current conditions of selector values
        var $classvalue = $("#classSelector.mobileselect").find('option:selected').attr("name");
        var $levelvalue = $("#levelSelector.mobileselect").find('option:selected').attr("name");
        //var $teachervalue = $("#teacherSelector").val();
        var $teachervalue = $(this).find('option:selected').attr("name");
       //3.2 Take the values of the $classvalue, $teachervalue, $levelvalue and make a variable called... whatever
       var $pageDirect = $classvalue + $levelvalue + $teachervalue;
       console.log("Page direct is equal to " + $pageDirect);
       console.log("__________________________________");
       console.log("__________________________________");
        //3.4: Go to a url with corresponding values and php variables.. and stuff.. and uhh. gotta come back to this one (9/19/2015 @1:29 AM)
            //Now that we have the $pageDirect variable established, all that is necessary to do now is to just master mySQL, make a database and form for each of the class pages, and setup self-populating tables for each page. This is gonna be tough... (9/30/2015 @ 11:54 PM)
    });
    
//4. When the "GO TO PAGE" Button is ACRTUALLY Clicked

    $("#submitButton.mobileselect").click( function () {
        console.log("Okay, this is working!!!!!!");
        //Establish current conditions of selector values
        var $classvalue = $("#classSelector.mobileselect").val();
        var $levelvalue = $("#levelSelector.mobileselect").val();
        var $teachervalue = $("#teacherSelector.mobileselect").find('option:selected').attr("name");
       //Take the values of the $classvalue, $teachervalue, $levelvalue and make a variable called... whatever
       var $pageDirect = $classvalue + $levelvalue + $teachervalue;
       
       console.log("____________________BLAHBLAHBLAH");
       console.log($classvalue);
       console.log($levelvalue);
       console.log($teachervalue);
       console.log($pageDirect);

        
        window.location="http://papili.us/studycentral/classPage.php?class=" + $pageDirect;
        console.log("http://papili.us/studycentral/classPage.php?class=" + $pageDirect);
    });
    
    
    














//Problem: The Drop Down Menu's are NOT populated and Are NOT responsive based on prior responses
//Solution: Implement solution....


//1. Every Time the class selector has been changed {
    $("#classSelector").change( function () {
        console.log("Class Selector Function Confirmation");
        //1.2: Take the selected item's value
        var $classvalue = $(this).val();
        console.log("$classvalue is equal to " + $classvalue);
        //1.3: Target the text document corresponding to the selected element's value
         //1.4: Paste the text from that document underneath the select tag
        
                                    $.ajax({ url: 'inc/dropTwoOptions.php?classvalue=' + $classvalue,
                                        data: {action: 'always'},
                                        type: 'post',
                                        success: function(output) {
                                                        $("#levelSelector").html(output);
                                        }
                                    })
         
         //$("#levelSelector").load("textData/" + $classvalue + ".txt");
        console.log( "Class value is equal to " + $classvalue );
        console.log("textData/" + $classvalue + ".txt");
        console.log("__________________________________");
        console.log("__________________________________");
        });


//2. Every Time the Level Selector has been changed {
    $("#levelSelector").change( function () {
        console.log("Level Selector Function Confirmation");
        //2.2: Take the selected item's value
        var $levelvalue = $(this).val();
        var $classvalue = $("#classSelector").val();
        //2.3: Target the text document corresponding to the selected element's value
        //2.3.2: Make a variable with the $classvalue and the $levelvalue added up
        var $teachervalue = $classvalue + $levelvalue;
        console.log("inc/dropThreeOptions.php?levelvalue=" + $levelvalue + "&classvalue=" + $classvalue);
        $.ajax({ url: 'inc/dropThreeOptions.php?levelvalue=' + $levelvalue + '&classvalue=' + $classvalue,
                                        data: {action: 'always'},
                                        type: 'post',
                                        success: function(output) {
                                                        $("#teacherSelector").html(output);
                                        }
                                    })
        console.log( "Level value is equal to " + $levelvalue );
        console.log( "Class value is equal to " + $classvalue );
        console.log("Teacher value (class and level) is equal to " + $teachervalue);
        console.log("__________________________________");
        console.log("__________________________________");
        });


    
    
    
//3. Teacher Value Changed

    $("#teacherSelector").change( function () {
       console.log("Teacher Selector Function Confirmation");
       //3.1 Establish current conditions of selector values
        var $classvalue = $("#classSelector").find('option:selected').attr("name");
        var $levelvalue = $("#levelSelector").find('option:selected').attr("name");
        //var $teachervalue = $("#teacherSelector").val();
        var $teachervalue = $(this).find('option:selected').attr("name");
       //3.2 Take the values of the $classvalue, $teachervalue, $levelvalue and make a variable called... whatever
       var $pageDirect = $classvalue + $levelvalue + $teachervalue;
       console.log("Page direct is equal to " + $pageDirect);
       console.log("__________________________________");
       console.log("__________________________________");
        //3.4: Go to a url with corresponding values and php variables.. and stuff.. and uhh. gotta come back to this one (9/19/2015 @1:29 AM)
            //Now that we have the $pageDirect variable established, all that is necessary to do now is to just master mySQL, make a database and form for each of the class pages, and setup self-populating tables for each page. This is gonna be tough... (9/30/2015 @ 11:54 PM)
    });
    
//4. When the "GO TO PAGE" Button is ACRTUALLY Clicked

    $("#submitButton").click( function () {
        console.log("Okay, this is working!!!!!!");
        //Establish current conditions of selector values
        var $classvalue = $("#classSelector").val();
        var $levelvalue = $("#levelSelector").val();
        var $teachervalue = $("#teacherSelector").find('option:selected').attr("name");
       //Take the values of the $classvalue, $teachervalue, $levelvalue and make a variable called... whatever
       var $pageDirect = $classvalue + $levelvalue + $teachervalue;

        
        window.location="http://papili.us/studycentral/classPage.php?class=" + $pageDirect;
        console.log("http://papili.us/studycentral/classPage.php?class=" + $pageDirect);
    });
    
    
    