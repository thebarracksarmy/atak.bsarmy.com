<!DOCTYPE html>
<html lang="en">
	<base href=htmz>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TAK Admin</title>
</head>
<body>
	<h1>Welcome to the TAK Admin Page</h1>
	<p>Here you can manage the TAK server.</p>

	<div role="tablist">
		<button role="tab" href="/admin/functions/start.php#command_output">Start TAK Server</button>
		<button role="tab" href="/admin/functions/stop.php#command_output">Stop TAK Server</button>
		<button role="tab" href="/admin/functions/restart.php#command_output">Stop TAK Server</button>
		<button role="tab" href="/admin/functions/status.php#command_output">Get the status of TAK Server</button>
	</div>

	<!-- This is where the output will be -->
	<div id="command_output" role="tabpanel"></div>

	<iframe hidden name=htmz onload="setTimeout(()=>document.querySelector(contentWindow.location.hash||null)?.replaceWith(...contentDocument.body.childNodes))"></iframe>
</body>
</html>