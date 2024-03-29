<?php

$output = passthru("sudo systemctl restart taky.service taky-cot.service taky-dps.service -l --no-pager");

echo '<div id="command_output" role="tabpanel">';

if (empty($output)) {
	$output = "No output from systemctl restart taky.service taky-cot.service taky-dps.service";
}


echo "<pre> $line </pre>";
echo '</div>';