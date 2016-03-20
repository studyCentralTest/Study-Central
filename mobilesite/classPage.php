<!DOCTYPE html>
  <html>
    <head>
        <title>Study Central | Home PageTest</title>
        <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src='https://www.google.com/recaptcha/api.js'></script> <!--For Form Capthca -->
        <?php include 'inc/faviconInclude.html'; ?>
    </head>
    <body>
      <div id="adLeft"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- sCentralSideBar -->
<ins class="adsbygoogle"
     style="display:inline-block;width:150px;height:700px"
     data-ad-client="ca-pub-4411973262865760"
     data-ad-slot="3721328100"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
      <?php include 'inc/header.php';?>
        <?php 
              //Classes database file
              include 'classes.php';
              
              
              //If the variable is defined in URL
              if(isset($_GET["class"])) {
                //Gets class name variable from URL
                $pageClassVar = $_GET["class"];
                //Sets $classes to the classes database array
                $classes = get_classes_all($pageClassVar);
                //Checks to see if there is a class that exists with that name
                if(isset($classes[0]["classVar"])) {
                    //Establishes Variables for EACH piece of class info
                    $className = $classes[0]["className"];
                    $levelName = $classes[0]["levelName"];
                    $teacherName = $classes[0]["teacherName"];
                    
                    //Makes Full Page Title Variable
                    $fullPageTitle = $levelName . " " . $className . " " . $teacherName;;
                    
                  } else {
                    echo "<h3 class='submissionReturnHome'>Sorry, no class with than name currently exists</h3>";
                    echo "<a href='http://papili.us/studycentral'><h4 class='submissionReturnHome'>Click Here to return HOME</h4></a>";
                    exit;
                  }
              } else {
                echo "SERVER ERROR TWO";
              }
            ?>
        <h1 class= "homepageHeaderText">
            <?php echo $fullPageTitle;
            ?>
        </h1>
        
                  <!--MAKING THE TABLE-->
                  
                  <?php
            include 'studyGuides.php';
            $studyGuidesForClass = get_studyGuides_class($pageClassVar);
          ?>
          
        <table class = "classStudyTable">
              <!--THE LOOP-->
              <?php
                //If there is no $studyGuidesForClass set (no study guides available)
                if(!(isset($studyGuidesForClass[0]))) {
                  echo "<h3 class='submissionReturnHome'>Sorry, no study guides are currently available for this class</h3>";
                  echo "<h4 class='submissionReturnHome'>Use the form below to post a NEW Study Guide</h4>";
                }
              ?>
              <?php foreach($studyGuidesForClass as $studyGuide) { ?>
              <tr class="studyGuideRow">
                <td class="studyGuideInfoCol">
                  <!--Study Guide Link and Name-->
                  <a href= "<?php echo $studyGuide['submitLink']; ?>" class="studyGuideName , hvr-wobble-bottom"><?php echo $studyGuide['studyGuideName'];?></a>
                  <p class= "submitName">Submitted by <?php echo $studyGuide["submitName"]; ?></p>
                  <p class= "submitTime"><?php echo $studyGuide["submitTime"]; ?></p>
                </td>
                <td class="studyGuideFlagCol">
                <?php 
                    if($studyGuide['flag'] == "YES") {
                      echo "<a href='#studyGuideFlagCol'  title='This study guid has been flagged and is under review' style='background-color:#FFFFFF;color:#000000;text-decoration:none'><img class='hvr-buzz-out' title= 'This Study Guide has been flagged and is under review' src='inc/exclamation.png'>";
                    } else {
                      echo "<a title= 'Click to flag this study guide as innapropriate or irrelevant' class='hvr-float-shadow' href = 'flagStudy.php?studyGuide=".$studyGuide['submitTime']."'><img src='inc/flag.png'></a>";
                    }
                  ?>
                </td>
              </tr>
               <?php } ?>
        </table>
        
        <center><input class = "hvr-bubble-float-bottom , hvr-bubble-bottom" value="Submit a NEW Study Guide" id="myButton" type="button" name="answer"/></center>
        <script>
          $('#myButton').click(function() {
            $('#myDiv').toggle('slow', function() {
            // Animation complete.
            });
          });
        </script>
        
        
        <!-- TIME FOR A FORM!!! -->
        <div class= "submitForm" id="myDiv">
        <center>
        <h2 id="formHeader">Submit a Study Guide</h2>
        <form method="post" action="submit.php">
                    <table class= "submitForm">
                        <tr class= "submitForm, submitRow">
                          <div class="formRow">
                            <th class= "submitForm">
                                <label class= "submitForm"for="name">Name</label>
                            </th>
                            <td class= "submitForm">
                                <input class= "submitForm"type="text" name="name" id="name">
                            </td>
                          </div>
                        </tr>
                        <tr class= "submitForm, submitRow">
                          <div class="formRow">
                            <th class= "submitForm">
                                <label class= "submitForm" for="email">Email</label>
                            </th>
                            <td class= "submitForm">
                                <input class= "submitForm" type="text" name="email" id="email">
                            </td>
                          </div>
                        </tr>
                        <tr class= "submitForm, submitRow">
                          <div class="formRow">
                            <th class= "submitForm">
                                <label class= "submitForm" for="studyGuideName">Study Guide Name</label>
                            </th>
                            <td class= "submitForm">
                                <input class= "submitForm" name="studyGuideName" id="studyGuideName"></input>
                            </td>
                          </div>
                        </tr>
                        <tr class= "submitForm, submitRow">
                          <div class="formRow">
                            <th class= "submitForm">
                                <label class= "submitForm" for="studyGuideLink">Study Guide Link</label>
                            </th>
                            <td class= "submitForm">
                                <input class= "submitForm" name="studyGuideLink" id="studyGuideLink"></input>
                            </td>
                          </div>
                        </tr>
                        <tr class= "submitForm, submitRow">
                          <div class="formRow">
                            <th class= "submitForm">
                                <label class= "submitForm" for="message">Message</label>
                            </th>
                            <td class= "submitForm">
                                <input class= "submitForm" name="message" id="message"></input>
                            </td>
                          </div>
                        </tr>
                        <tr class= "submitForm, submitRow">
                          <div class="formRow">
                            <th class= "submitForm">
                              <label class= "submitForm" for="dropOne">Subject</label>
                            </th>
                            <td class= "submitForm">
                              <select name = "dropOne" class = "submitForm, homepageSelectors , hpSelectorMenu, formSelector" id = "classSelector" name="classSelector" >
                                <?php include 'inc/dropOneOptions.php';?>
                              </select>
                            </td>
                          </div>
                        </tr>
                        <tr class= "submitForm, submitRow">
                          <div class="formRow">
                          <th class= "submitForm">
                            <label  class= "submitForm" for="dropTwo">Level</label>
                          </th>
                          <td class= "submitForm">
                            <select name = "dropTwo" class = "submitForm, homepageSelectors , hpSelectorMenu, formSelector" id = "levelSelector" name="levelSelector">
                            </select>
                          </td>
                          </div>
                        </tr>
                        
                        <tr class= "submitForm, submitRow">
                          <div class="formRow">
                          <th class= "submitForm">
                            <label  class= "submitForm" for="dropThree">Teacher</label>
                          </th>
                          <td class= "submitForm">
                            <select name = "dropThree" class = "submitForm, homepageSelectors , hpSelectorMenu, formSelector" id = "teacherSelector" name="teacherSelector">
                            </select>
                          </td>
                          </div>
                        </tr>
                        <tr style="display: none;" class= "submitForm, submitRow">
                          <div class="formRow">
                            <th class= "submitForm">
                                <label class= "submitForm"for="address">Address</label>
                            </th>
                            <td class= "submitForm">
                                <textarea class= "submitForm" name="address" id="address"></textarea>
                                <p>***HUMAN TEST**** Leave the address form BLANK!</p>
                            </td>
                          </div>
                        </tr>
                        <tr>
                          <div class="formRow">
                          <th class= "submitForm">
                            <label  class= "submitForm" for="dropThree">Capthca Test</label>
                          </th>
                          <td class= "submitForm">
                            <div class="g-recaptcha" data-sitekey="6LfYThQTAAAAACy-hnnQPfT1R_RJG7Aax-2FLMRF"></div>
                          </td>
                          </div>
                        </tr>
                    </table>
                    <input class= "submitForm , hvr-grow-shadow" type="submit" value="Submit">
                </form>
        </center>
        </div>
        <script src="scripts/app.js"></script>
        <div id="adRight"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- sCentralSideBar -->
<ins class="adsbygoogle"
     style="display:inline-block;width:150px;height:700px"
     data-ad-client="ca-pub-4411973262865760"
     data-ad-slot="3721328100"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-71917658-1', 'auto');
  ga('send', 'pageview');

</script>
        <?php include 'inc/footer.php' ?>
    </body>       
    </html>
  
  