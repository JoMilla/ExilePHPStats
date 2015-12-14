<?php
$PageTitle = "Exile Server Stats:";
$path = dirname($_SERVER['PHP_SELF']);
include 'includes/header.php';
include 'includes/config.php';
include 'includes/functions.php';
foreach ($ServerList as $Server)
{
	$ServerDetails = explode("|",$Server);
	$dbhost = $ServerDetails[0];
	$dbname = $ServerDetails[1];
	$dbuser = $ServerDetails[2];
	$dbpass = $ServerDetails[3];
	$servername = ucwords($ServerDetails[4]);
	$dbport = $ServerDetails[5];
	displayServerDetails($dbhost,$dbname,$dbuser,$dbpass,$servername,$dbport);
	
}
?>

<script type="text/javascript">
	$(function () {
		$('.expander').simpleexpand();
	});
	$('tr').click( function() {
		window.location = $(this).find('a').attr('href');
	}).hover( function() {
		$(this).toggleClass('hover');
	});
</script>

<?php
include 'includes/footer.php';
?>