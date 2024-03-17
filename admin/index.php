AuthType Basic
AuthName "tak.bsarmy.com - Restricted Content"
AuthUserFile /etc/apache2/.htpasswd
Require valid-user

<Files ~ "^.*">
  Deny from all
</Files>
<Files ~ "^index\.php|css|js|.*\.png|.*\.xml|.*\.gif">
  Allow from all
</Files>