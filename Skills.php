<!DOCTYPE html>
<html>
	<head>
		<link href="nanoPages.css" type="text/css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="cssConsole.min.js"></script>

<meta charset=utf-8 />
<title>Skills</title>

</head>
	<body>

		<div class='header'>
			<h3 id='title' >GNU nano v2.3.4</h3>
			<h3 id='file' >File: Skills.txt</h3>
		</div>

		<div class = 'container'>
			
			<?php
				echo "<div class='fileTextSmaller'>";
				echo "<pre>";

				$handle = fopen("Skills.txt", "r");
				if ($handle) {
 					while (($line = fgets($handle)) !== false) {
     					echo $line;
 					}
				} else {
 					echo "Error opening file!";
				}
				fclose($handle);
				echo "</pre>";
				echo "</div>";
 			?>
 			
 			<a href = "http://github.com/iainrj/">(1)Logic game &nbsp;&nbsp;&nbsp; </a>
 			<a href = "http://github.com/iainrj/BasesSchedule">(2)Baseball Scheduler&nbsp;&nbsp;&nbsp; </a>
 			<a href = "http://github.com/iainrj/Pass">(3)Password Generator&nbsp;&nbsp;&nbsp;</a>
 			<a href = "http://github.com/iainrj/MidnightMusic">(4)Music Store&nbsp;&nbsp;</a>
<!--  			<a href = "http://github.com/iainrj/">(5) can be found here</a> -->
 				
			</div>
		</div>

			<footer>
				<table BORDER=0 CELLSPACING=0 WIDTH="100%" >
				<tr >
				<!-- INTRO BLOCK -->
				<td align="left" WIDTH="1.5%" BGCOLOR="#FFFFFF" ></td>

				<td align="left" WIDTH="8%" ><tt><font color="#440077">&nbsp;<a href="Intro.php">Intro</a></font></tt></td>

				<!-- CURRENT STUDIES BLOCK -->

				<td WIDTH="1.5%" BGCOLOR="#FFFFFF" ></td>

				<td WIDTH="15%" ><tt><font color="#440077">&nbsp;<a href="Current_Studies.php">Current Studies</a></font></tt></td>
				
				<!-- SKILLS BLOCK -->

				<td WIDTH="1.5%" BGCOLOR="#02AF02" ></td>

				<td WIDTH="8%" ><tt><font color="#440077">&nbsp;<a href="Skills.php">Skills</a></font></tt></td>
				
				<!-- QUALIFICATIONS BLOCK -->

				<td WIDTH="1.5%" BGCOLOR="#FFFFFF" ></td>

				<td WIDTH="15%" ><tt><font color="#440077">&nbsp;<a href="Qualifications.php">Qualifications</a></font></tt></td>

				<!-- STRENGTHS BLOCK -->

				<td WIDTH="1.5%" BGCOLOR="#FFFFFF" ></td>

				<td WIDTH="10%" ><tt><font color="#440077">&nbsp;<a href="Strengths.php">Strengths</a></font></tt></td>

				<!-- HOBBIES BLOCK -->

				<td WIDTH="1.5%" BGCOLOR="#FFFFFF" ><b><tt><font color="#0D0D0D"></font></tt></b></td>

				<td WIDTH="13%"><tt><font color="#440077">&nbsp;<a href="Hobbies.php">Hobbies</a></font></tt></td>

				<!-- SITEMAP BLOCK -->

				<td WIDTH="1.5%" BGCOLOR="2035D6" ></td>

				<td WIDTH="10%"><tt><font color="#440077">&nbsp;<a href="sitemap.html">Sitemap</a></font></tt></td>

				<!-- TERMINAL BLOCK -->
				
				<td align="right" WIDTH="1.5%" BGCOLOR="RED" ><b><tt><font color="#0D0D0D"></font></tt></b></td>

				<td align="right" WIDTH="8%" id="backToTerminal"><tt><font color="#440077">&nbsp;<a href="../index.html">Back to Terminal</a></font></tt></td>
				</tr>

				</table>
			</footer>

	</body>
</html>