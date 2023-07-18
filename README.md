# sd21-p6-ReviewYourExperience
# Put this in your v-host
````
<VirtualHost *:80>
DocumentRoot "C:/xampp/htdocs"
ServerName localhost
</VirtualHost>

Listen 4001    
NameVirtualHost *:4001
<VirtualHost *:80 *:4001>
DocumentRoot "C:/xampp/apps/sd21-p6-reviewyourexperience-nova/public"
ServerName snelweg.localhost
<Directory "C:/xampp/apps/sd21-p6-reviewyourexperience-nova/public">
Options Indexes FollowSymLinks ExecCGI Includes

	RewriteEngine on
	RewriteCond %{REQUEST_FILENAME} !-f
	RewriteRule ^(.*)$ index.php [NC,L,QSA]

        # AllowOverride controls what directives may be placed in .htaccess files.
        # It can be "All", "None", or any combination of the keywords:
        #   Options FileInfo AuthConfig Limit
        #
        #AllowOverride None
        # since XAMPP 1.4:
        AllowOverride All

        # Controls who can get stuff from this server.
        Require all granted
    </Directory>
</VirtualHost>
