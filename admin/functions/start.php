<?php


// Start the TAK server with our systemctl adapter
$command = "start";

exec("bash systemctl-adapter.sh $command", $output);


echo <<<EOT
<div id="command_output" role="tabpanel"></div>
<pre>$output</pre>";
EOT;