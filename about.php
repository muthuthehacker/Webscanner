<?php

session_start();
$currentDir = './';
require_once($currentDir . 'scanner/functions/databaseFunctions.php');
?>
<!DOCTYPE html>
<head>
<title>WebVulScan</title>
<meta charset="windows-1252">
<link rel="shortcut icon" href="images/favicon.gif" />
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="jquery-1.6.4.js"></script>
</head>
<body>
<!--Header Begin-->
<div id="header">
  <div class="center">
    <div id="logo"><a href="#"></a></div>
    <!--Menu Begin-->
	<div id="menu">
	<?php require_once($currentDir . 'session_control.php'); ?>
	</div>
    <div id="menu">
      <ul>
        <li><a href="index.php"><span>Home</span></a></li>
        <li><a class="active" href="about.php"><span>About</span></a></li>
		<li><a href="crawler.php"><span>Crawler</span></a></li>
		<li><a href="scanner.php"><span>Scanner</span></a></li>
		<li><a href="history.php"><span>Scan History</span></a></li>
      </ul>
    </div>
    <!--Menu END-->
  </div>
</div>
<!--Header END-->
<!--SubPage Toprow Begin-->
<div id="toprowsub">
  <div class="center">
    <h2>About</h2>
  </div>
</div>
<!--Toprow END-->
<!--SubPage MiddleRow Begin-->
<div id="midrow">
  <div class="center">
    <div class="textbox2">
      <p>This software was developed by muthu_the_hacker. The project was undertaken as an undergraduate final year project and was supervised by the team. The course studied by  B.Voc in Software Development in Alagappa University, Tamil nadu .<br>  </p>
	  <p>This software is licensed under the GNU General Public License. This software was developed, and should only be used, entirely for ethical purposes. Running security testing tools such as this on a website (web application) could damage it. In order to stay ethical, you must ensure you have permission of the owners before testing a website (web application). Testing the security of a website (web application) without authorisation is unethical and against the law in many countries.</p>
    </div>
  </div>
</div>
<!--MiddleRow END-->

<!--Footer Begin-->
<div id="footer">
  <div class="foot"></a> </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="foot"> <span>muthu_the_hacker | © 2021 , All Rights Reserved</span> 
<!--Footer END-->
</body>
</html>