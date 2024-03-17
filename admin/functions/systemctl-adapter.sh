!#/bin/bash

# Define the target services
$target = "taky.service taky-cot.service taky-dps.service"

# Check if the command is valid and allowed
if $1 == "start" || $1 == "stop" || $1 == "restart" || $1 == "status"; then
	if [ $1 == "status" ]; then
		systemctl status $target
	else
		/bin/systemctl $1 $target
		systemctl status $target
	fi
else
	echo "Invalid command."
fi
