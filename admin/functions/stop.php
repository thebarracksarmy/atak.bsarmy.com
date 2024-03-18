<?php

exec("sudo systemctl stop taky.service taky-cot.service taky-dps.service", $output);

echo '<div id="command_output" role="tabpanel">';

if (empty($output)) {
	$output = array("No output from systemctl stop taky.service taky-cot.service taky-dps.service");
}

$lineNum = 0;
foreach ($output as $line) {
	$lineNum++;
	echo "<pre>$lineNum $line </pre>";
}

echo '</div>';