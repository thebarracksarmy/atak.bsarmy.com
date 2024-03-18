<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/beforeIncludes.php';


$title = "TAK Admin - BS Army";
$url = "https://" . $_SERVER['HTTP_HOST'] . "/";
$type = "website";
$description = 'Admin page for the open TAK server at atak.bsarmy.com. This server is open to all and is not affiliated with the US Government.';

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TAK Admin</title>

	<style>
		body {
			font-family: Arial, sans-serif;
		}

		pre {
			white-space: pre-wrap;
			word-wrap: break-word;
			background-color: lightgray;
			padding: 1em;
			border-radius: .5em;
			border-color: darkslategrey;
		}
	</style>
	<?php require $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/elements/head.php'; ?>
</head>

<body>
	<?php require $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/elements/nav.php'; ?>
	<base target=htmz>

	<div class="container">
		<div class="row mb-3">
			<div class="col">
				<h1 class="text-center">Welcome to the TAK Admin Page</h1>
				<small class="text-center">Perform simple tasks relating to the <a class="fs-italic" href="https://github.com/tkuester/taky/" referrerpolicy="noreferrer" target="_blank">taky</a> server.</small>
			</div>
		</div>
		<div class="row mb-3">
			<div role="tablist">
				<a class="btn btn-success" role="tab" href="/admin/functions/start.php#command_output" onclick="return confirm('Please confirm that you want to START the taky server:')">Start TAK Server</a>
				<a class="btn btn-danger" role="tab" href="/admin/functions/stop.php#command_output" onclick="return confirm('Please confirm that you want to STOP the taky server:')">Stop TAK Server</a>
				<a class="btn btn-warning" role="tab" href="/admin/functions/restart.php#command_output" onclick="return confirm('Please confirm that you want to RESTART the taky server:')">Restart TAK Server</a>
				<a class="btn btn-secondary" role="tab" href="/admin/functions/status.php#command_output">Get the status of TAK Server</a>
			</div>
		<div class="row mb-3 mt-3">
			<!-- This is where the output will be -->
			<p class="text-start ml-2 font-monospace">Command Output:</p>
			<div id="command_output" role="tabpanel"></div>
		</div>
	</div>
	<?php
	// Add footer to page
	require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/elements/footer.php';
	?>
	<iframe hidden name=htmz onload="setTimeout(()=>document.querySelector(contentWindow.location.hash||null)?.replaceWith(...contentDocument.body.childNodes))"></iframe>
</body>

</html>