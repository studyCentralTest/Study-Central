<!DOCTYPE html>
<html>
<head>
  <title>Study Central | Home PageTest</title>
  <link href=
  'http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel=
  'stylesheet' type='text/css'>
  <script src=
  "https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
  </script>
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <script src='https://www.google.com/recaptcha/api.js'>
  </script><!--For Capthca-->
  <?php include 'inc/faviconInclude.html'; ?>
</head>
<body>
  <?php include 'inc/header.php';?>
  <div id="adLeft">
    <script async src=
    "//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js">
    </script> <!-- sCentralSideBar -->
    <ins class="adsbygoogle" data-ad-client="ca-pub-4411973262865760"
    data-ad-slot="3721328100" style=
    "display:inline-block;width:150px;height:700px"></ins> 
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
  </div>
  
  <div class="homepageTop">
	<h1 class="homepageHeaderText">Welcome</h1>
	<h3 class="homepageSubheaderText">please select your...</h3>
  </div>
  <div class="homepageGroup">
	<div class="nonmobileselect">
	  <div class= "homepageSelectMenuGroup">
	  <h2 class= "hvr-skew-forward , homepageSelectors , hpSelectorMenu">Class</h2>
	  <h2 class= "hvr-skew-forward , homepageSelectors , hpSelectorMenu">Level</h2>
	  <h2 class= "hvr-skew-forward , homepageSelectors , hpSelectorMenu">Teacher</h2>
	</div>
	<br>
	<div class="homepageSelectMenuGroup">
	  <select class = "nonmobileselect , homepageSelectors , hpSelectorMenu" id = "classSelector" name="classSelector" >
		<?php include 'inc/dropOneOptions.php'; ?>
	  </select>
	  <select class = "nonmobileselect , homepageSelectors , hpSelectorMenu" id = "levelSelector" name="levelSelector">
      </select>
	  <select class = "nonmobileselect , homepageSelectors , hpSelectorMenu" id = "teacherSelector" name="teacherSelector">
      </select>
	</div>
	<center><a href="#" class="nonmobileselect , hvr-radial-out , hvr-pulse , submitButtonText , submitButton , hvr-bounce-to-right" id= "submitButton">Go To Page</a></center>
  </div>
  
  <div class="mobileselect">
	<div class="homepageSelectMenuGroup">
	  <h2 class= "hvr-skew-forward , homepageSelectors , hpSelectorMenu">Class</h2>
	  <select class = "mobileselect , homepageSelectMenuGroup , homepageSelectors , hpSelectorMenu" id = "classSelector" name="classSelector" >
		<?php include 'inc/dropOneOptions.php'; ?>
	  </select>
	  <h2 class= "hvr-skew-forward , homepageSelectors , hpSelectorMenu">Level</h2>
	  <select class = "mobileselect , homepageSelectMenuGroup , homepageSelectors , hpSelectorMenu" id = "levelSelector" name="levelSelector">
	  </select>
      <h2 class= "hvr-skew-forward , homepageSelectors , hpSelectorMenu">Teacher</h2>
	  <select class = "mobileselect , homepageSelectMenuGroup , homepageSelectors , hpSelectorMenu" id = "teacherSelector" name="teacherSelector">
	  </select>
	</div>
	<center><a href="#" class="mobileselect , hvr-radial-out , hvr-pulse , submitButtonText , submitButton , hvr-bounce-to-right" id= "submitButton">Go To Page</a></center>
  </div>
  
  
  <center><p id="or" class="recentStudyGuides">OR</p></center>
  <center><a id = "requestClassPage" class="hvr-radial-out , hvr-pulse , submitButtonText , submitButton , hvr-bounce-to-right" id= "submitButton">Request a NEW Class Page</a></center>
  <script>
                  $('#requestClassPage').click(function() {
                    $('#classPageRequestForm').toggle('slow', function() {
                    // Animation complete.
                    });
                  });
  </script>
  <div id="classPageRequestForm">
    <center>
      <h2 id="formHeader">Request a NEW Class</h2>
      <form action="request.php" method="post">
        <div class="formRow"></div>
        <div class="formRow"></div>
        <div class="formRow"></div>
        <div class="formRow"></div>
        <div class="formRow"></div>
        <div class="formRow"></div>
        <div class="formRow"></div>
        <table class="submitForm">
          <tr class="submitForm, submitRow">
            <th class="submitForm"><label class="submitForm" for=
            "name">Name</label></th>
            <td class="submitForm"><input class="submitForm" id="name" name=
            "name" type="text"></td>
          </tr>
          <tr class="submitForm, submitRow">
            <th class="submitForm"><label class="submitForm" for=
            "email">Email</label></th>
            <td class="submitForm"><input class="submitForm" id="email" name=
            "email" type="text"></td>
          </tr>
          <tr class="submitForm, submitRow">
            <th class="submitForm"><label class="submitForm" for=
            "studyGuideName">Class Name</label></th>
            <td class="submitForm"><input class="submitForm" id="className"
            name="className" placeholder=
            "Do not include level or teacher"></td>
          </tr>
          <tr class="submitForm, submitRow">
            <th class="submitForm"><label class="submitForm" for=
            "studyGuideLink">Class Level</label></th>
            <td class="submitForm"><input class="submitForm" id="classLevel"
            name="classLevel" placeholder="Honors, Advanced, etc."></td>
          </tr>
          <tr class="submitForm, submitRow">
            <th class="submitForm"><label class="submitForm" for=
            "message">Teacher Name</label></th>
            <td class="submitForm"><input class="submitForm" id="teacherName"
            name="teacherName" placeholder="Please confirm spelling"></td>
          </tr>
          <tr class="submitForm, submitRow" style="display: none;">
            <th class="submitForm"><label class="submitForm" for=
            "address">Address</label></th>
            <td class="submitForm">
              <textarea class="submitForm" id="address" name="address">
</textarea>
              <p>***HUMAN TEST**** Leave the address form BLANK!</p>
            </td>
          </tr>
          <tr>
            <th class="submitForm" id="capthca"><label class="submitForm" for=
            "dropThree">Capthca Test</label></th>
            <td class="submitForm">
              <div class="g-recaptcha" data-sitekey=
              "6LeKXBQTAAAAAGTszV0NLlGNrQiP6Ff5rVx0HAYS"></div>
              <!--Different Capthca than Study Guide Submit Form-->
            </td>
          </tr>
        </table><input class="submitForm , hvr-grow-shadow" type="submit"
        value="Submit">
      </form>
    </center>
  </div>
</div>
  <div id="recentStudyGuides">
    <h2 class="recentStudyGuides">Newest Study
    Guides</h2><?php include 'inc/database.php';
                  try {
                    $results = $db->query("SELECT * FROM studyGuides ORDER BY submitTime DESC LIMIT 3;");
                  } catch(Exception $e) {
                    exit;
                  }
                  $recentThree = $results->fetchALL(PDO::FETCH_ASSOC);
                  ?>
    <table class="classStudyTable">
      <!--THE LOOP-->
      <?php foreach($recentThree as $recent) { ?>
      <tr class="studyGuideRow">
        <td class="studyGuideInfoCol">
          <!--Study Guide Link and Name-->
          <a class="studyGuideName , hvr-wobble-bottom" href=
          "<?php echo $recent['submitLink']; ?>" target="_blank"><?php echo $recent['studyGuideName'];?></a>
          <p class="submitName">Submitted by
          <?php echo $recent["submitName"]; ?></p>
          <p class="submitTime"><?php echo $recent["submitTime"]; ?></p>
        </td>
        <td class="studyGuideFlagCol" id="studyGuideFlagCol"><?php 
                            if($recent['flag'] == "YES") {
                              echo "<a href='#studyGuideFlagCol' title='This study guide has been flagged and is under review' style='background-color:#FFFFFF;color:#000000;text-decoration:none'><img class='hvr-buzz-out' title= 'This Study Guide has been flagged and is under review' src='inc/exclamation.png'>";
                            } else {
                              echo "<a title= 'Click to flag this study guide as innapropriate or irrelevant' class='hvr-float-shadow' href = '/studycentral/flagStudy.php?studyGuide=".$recent['submitTime']."'><img src='inc/flag.png'></a>";
                            }
                          ?></td>
      </tr><?php } ?>
    </table>
  </div>
  <script src="scripts/app.js">
  </script>
  <div id="adRight">
    <script async src=
    "//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js">
    </script> <!-- sCentralSideBar -->
    <ins class="adsbygoogle" data-ad-client="ca-pub-4411973262865760"
    data-ad-slot="3721328100" style=
    "display:inline-block;width:150px;height:700px"></ins> 
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
  </div>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-71917658-1', 'auto');
  ga('send', 'pageview');

  </script>
</body>
</html>