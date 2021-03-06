<!DOCTYPE html>
<html>
	<head>
		<link href="nanoPages.css" type="text/css" rel="stylesheet">

<meta charset=utf-8 />

<title>Current Studies</title>
	</head>

	<body>
		<div class='header'>
			<h3 id='title'>GNU nano v2.3.4</h3>
			<h3 id='file'>File: CurrentStudies.txt</h3>
		</div>

		<div class = 'container'>
				<?php
					echo "<div class='fileText'>"; 
					echo "<pre>";
					echo "<img src='Images/CardiffLogo.png' align='right' id='CardiffLogo'>";
					
					$handle = fopen("Files/Current_Studies.txt", "r");
					if ($handle) {
     					while (($line = fgets($handle)) !== false) {
         					echo $line;
     					}
     					echo "<br/>";
     					echo "<center><a href='http://www.cs.cf.ac.uk/currentstudents/bsccompsci'>More detailed information on the modules can be found here</a></center>";
 					} else {
     					echo "Error opening file!";
 					}
 					fclose($handle);
 					echo "</pre>";
 					echo "</div>";
 				?>

		</div>

		<footer>
			<table BORDER=0 CELLSPACING=0 WIDTH="100%" >
			<tr >	
			<!-- INTRO BLOCK -->
			<td align="left" WIDTH="1.5%" BGCOLOR="#FFFFFF" ></td>

			<td align="left" WIDTH="8%"><tt><font color="#440077">&nbsp;<a href="Intro.php">Intro</a></font></tt></td>
			
			<!-- CURRENT STUDIES BLOCK -->

			<td WIDTH="1.5%" BGCOLOR="#02AF02" ></td>

			<td WIDTH="15%" ><tt><font color="#440077">&nbsp;<a href="Current_Studies.php">Current Studies</a></font></tt></td>

			<!-- SKILLS BLOCK -->

			<td WIDTH="1.5%" BGCOLOR="#FFFFFF" ></td>

			<td WIDTH="8%"><tt><font color="#440077">&nbsp;<a href="Skills.php">Skills</a></font></tt></td>

			<!-- QUALIFICATIONS BLOCK -->

			<td WIDTH="1.5%" BGCOLOR="#FFFFFF" ></td>

			<td WIDTH="15%"><tt><font color="#440077">&nbsp;<a href="Qualifications.php">Qualifications</a></font></tt></td>

			<!-- STRENGTHS BLOCK -->

			<td WIDTH="1.5%" BGCOLOR="#FFFFFF" ></td>

			<td WIDTH="10%"><tt><font color="#440077">&nbsp;<a href="Strengths.php">Strengths</a></font></tt></td>

			<!-- HOBBIES BLOCK -->

			<td WIDTH="1.5%" BGCOLOR="#FFFFFF" ></td>

			<td WIDTH="13%"><tt><font color="#440077">&nbsp;<a href="Hobbies.php">Hobbies</a></font></tt></td>

			<!-- SITEMAP BLOCK -->

			<td WIDTH="1.5%" BGCOLOR="2035D6" ></td>

			<td WIDTH="10%"><tt><font color="#440077">&nbsp;<a href="sitemap.html">Sitemap</a></font></tt></td>
			
			<!-- TERMINAL BLOCK -->

			<td align="right" WIDTH="1.5%" BGCOLOR="RED" ><b></td>

			<td align="right" WIDTH="8%" id="backToTerminal"><tt><font color="#440077">&nbsp;<a href="../index.html">Back to Terminal</a></font></tt></td>
			</tr>

			</table>
		</footer>

	</body>
</html>