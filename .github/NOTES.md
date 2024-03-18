# Notes

## Allow a user to run systemctl commands

```bash
echo `which systemctl`{" start "," restart "," status "," stop "}taky{"-cot","-dps"}.service, | sed 's/.$//'
```