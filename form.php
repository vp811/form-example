<!-- HTML top code goes here -->

<?

// From processing takes place here. message displayed here too
require('form/form.class.php');
$form = new Form();
$form->processForm(

	'eavasquez.com' // Put you mail domain here
	,
	'Web Design Principles 2018' // Put your site name / form name here
	,
	'vp811@ufl.edu' // Where will the form notification be sent?
	,
	'vp811@ufl.edu' // This what the form FROM: address wil be, if the form submissions doesn't contain an email field

);


?>

<!-- HTML bottom code goes here -->
