<?php

$output = passthru("sudo systemctl stop taky.service taky-cot.service taky-dps.service -l --no-pager");

echo '<div id="command_output" role="tabpanel">';

if (empty($output)) {
	$output = "No output from systemctl stop taky.service taky-cot.service taky-dps.service";
}


echo "<pre> $line </pre>";
echo '</div>';