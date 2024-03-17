<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/beforeIncludes.php';



$title = "TAK - BS Army";
$url = "https://".$_SERVER['HTTP_HOST']."/";
$type = "website";
$description = 'Information page for the open TAK server at atak.bsarmy.com. This server is open to all and is not affiliated with the US Government.';

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php require $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/elements/head.php'; ?>

	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>
</head>

<body>
	<?php require $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/elements/nav.php'; ?>
	<main>
		<section class="py-5 text-center container">
			<div class="row py-lg-5">
				<div class="col-lg-6 col-md-8 col-sm-10 mx-auto">
					<h1 class="fw-light">SERVER INFORMATION</h1>
					<table class="table text-start">
						<tr>
							<td>Address:</td><td><kbd>ATAK.BSARMY.COM</kbd></td>
						</tr>
						<tr>
							<td>Port:</td><td><kbd>8088</kbd></td>
						</tr>
						<tr>
							<td>Streaming Protocol:</td><td><kbd>TCP</kbd></td>
						</tr>
					</table>
					<small class="text-muted">This server is privately run and not affiliated with the US Government. 
						By using this server, you agree to <b>no liability</b> on the part of anyone involved in the operation of this server.
						This server is <b>provided as-is</b>, with <b>no warranty or guarantee of availability</b>.
						If you do not agree, please discontinue use of any and all services provided by this site. 
					</small>
					<p>
						<a href="https://tak.gov/" target="_blank" rel="noopener noreferrer"
							class="btn btn-light-tan my-2">Goto TAK.gov</a>
						<a href="#footer" class="btn btn-dark-green my-2">Download a TAK client</a>
					</p>
				</div>
			</div>
		</section>
	</main>
	<?php
	// Add footer to page
	require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/elements/footer.php';
	?>

</body>

</html>