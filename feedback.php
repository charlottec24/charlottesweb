<?
$pagetitle ="Charlotte's Web Space - Feedback" ;
$pagedescription = "Junior Web Developer" ;
$pagekeywords= "Junior Web Developer, Junior, Web Developer, Digital, Website, e-commerce, HTML, PHP, MySQL, " ;

include 'includes/header.php' ;
?>

<?

if (empty($_POST['Name']) && empty($_POST['Email']) && empty($_POST['Company']) && empty($_POST['Feedback'])) $newerror = "display:none;";

else $newerror = "";

$Name = $_POST['Name'] ;
$Email = $_POST['Email'] ;
$Company = $_POST['Company'] ;
$Feedback = $_POST['Feedback'] ;

$error ="" ;

if ($Feedback == "") {$error = "<img src='images/Gaps.gif' alt='Please fill in the gaps!' style='border:0;' />" ;}
if ($Company == "") {$error = "<img src='images/Gaps.gif' alt='Please fill in the gaps!' style='border:0;' />" ;}
if ($Email == "") {$error = "<img src='images/Gaps.gif' alt='Please fill in the gaps!' style='border:0;' />" ;}
if ($Name == "") {$error = "<img src='images/Gaps.gif' alt='Please fill in the gaps!' style='border:0;' />" ;}

if($error != "")

{

?>


	<div id="header_feedback">

		<h2 class="north">
			<img src="images/North.gif" alt="The North" style="border:0;" />
		</h2>

		<form action="feedback.php" method="post">
	
			<p class="error"><span style="<? echo $newerror; ?>"><? echo $error; ?></span></p>

			<p class="name"><img src="images/Name.gif" alt="Name" style="border:0;" /></p>
			<input class="namebox" type="text" name="Name" size="40" value="<? echo $Name; ?>"></input>

			<p class="email"><img src="images/Email.gif" alt="Email" style="border:0;" /></p>
			<input class="emailbox" type="text" name="Email" size="40" value="<? echo $Email; ?>"></input>

			<p class="company"><img src="images/Company.gif" alt="Company" style="border:0;" /></p>
			<input class="companybox" type="text" name="Company" size="40" value="<? echo $Company; ?>"></input>
		
			<p class="feedback"><img src="images/Feedback.gif" alt="Feedback" style="border:0;" /></p>
			<textarea class="feedbackbox" name="Feedback" rows="8" cols="50"><? echo $Feedback; ?></textarea>

			<input class="button" type="submit" value="Submit" />

			</div>


<?
}

else
{

$Name = $_POST['Name'] ;
$Email = $_POST['Email'] ;
$Company = $_POST['Company'] ;
$Feedback = $_POST['Feedback'] ;

$pfw_header = 'From: ' . $Email ;

$pfw_subject = 'Charlottes Web Space Feedback';

$pfw_email_to = 'info@charlotteswebspace.co.uk';

$pfw_message = "Name: $Name\n" . "\n" . "Email: $Email\n" . "\n" . "Company: $Company\n" . "\n" . "Feedback: $Feedback\n";

mail($pfw_email_to, $pfw_subject ,$pfw_message ,$pfw_header ) ;
?>

<div id="header_feedback">

				<h2 class="north">
					<img src="images/North.gif" alt="The North" style="border:0;" />
				</h2>

	<form action="feedback.php" method="post">

			<p class="name"><img src="images/Name.gif" alt="Name" style="border:0;" /></p>
			<input class="namebox" type="text" name="Name" size="40" border-width="10"></input>

			<p class="email"><img src="images/Email.gif" alt="Email" style="border:0;" /></p>
			<input class="emailbox" type="text" name="Email" size="40"></input>

			<p class="company"><img src="images/Company.gif" alt="Company" style="border:0;" /></p>
			<input class="companybox" type="text" name="Company" size="40"></input>
		
			<p class="feedback"><img src="images/Feedback.gif" alt="Feedback" style="border:0;" /></p>
			<textarea class="feedbackbox" name="Feedback" rows="8" cols="50"></textarea>

			<input class="button" type="submit" value="Submit" />

	</div>

<?

}

?>	

</form>

<?
include 'includes/footer.php' ;
?>