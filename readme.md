# Lavarel Note
## Enviroment 
Mac
### Install XAMPP in website not VM version
### Install composer in homebrew
```
    brew install composer
```
### Create Project
```sh
    composer create-project laravel/laravel simpleapp
```
#### webpack bugs in laravel 5.5  
#### Intstall 5.6 dev version
```
    composer create-project --prefer-dist laravel/laravel laravelblog dev-develop
```
### Set up Virtual Host /Applications/XAMPP/etc/extra/httpd-vhosts.conf
```
    nano /Applications/XAMPP/etc/extra/httpd-vhosts.conf
```
```.conf 
   <VirtualHost *:80>
    ServerName localhost
    DocumentRoot "/Applications/XAMPP/xamppfiles/htdocs"
    <Directory "/Applications/XAMPP/xamppfiles/htdocs">
        Options Indexes FollowSymLinks Includes execCGI
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>

<VirtualHost *:80>
    DocumentRoot "/Applications/XAMPP/htdocs/basicwebsite/public"
    ServerName basicwebsite.local
    <Directory "/Applications/XAMPP/htdocs/basicwebsite/public">
        Options Indexes FollowSymLinks Includes ExecCGI
        AllowOverride All
        Require all granted
    </Directory>
    ErrorLog "logs/basicwebsite.local-error_log"
</VirtualHost>

```
### set up hosts file
```
    sudo nano /etc/hosts
```
  add information below
```
    127.0.0.1 basicwebsite.local
```

## Preview affect
![Preview](https://i.imgur.com/0jKH2lT.png)
## Troble shooting
### Solve the privilege bug 
```
    sudo chmod -R 777 /Application/XAMPP/htdocs
```
### 403 error /Applications/XAMPP/xamppfiles/etc/httpd.conf
```
    nano /Applications/XAMPP/xamppfiles/etc/httpd.conf
```
* add contents
```
    # User/Group: The name (or #number) of the user/group to run httpd as.
    # It is usually good practice to create a dedicated user and group for
    # running httpd, as with most system services.
    #
    User daemon
    Group daemon
```
* change contents
```
    User yourname
```
### active virtual hosts in /Applications/XAMPP/xamppfiles/etc/httpd.conf

```
    # Virtual hosts
    #Include /Applications/XAMPP/etc/extra/httpd-vhosts.conf
```
* change contents
```
    # Virtual hosts
    Include /Applications/XAMPP/etc/extra/httpd-vhosts.conf
```
### google chrome setting chrome://flags/#allow-insecure-localhost
type chrome://flags/#allow-insecure-localhost in browser 
![change google chrome setting to enable](https://i.imgur.com/dBUrzLN.png)
### phpmyadmin  Wrong permissions on configuration file, should not be world writable!
```
    sudo chmod -R 755 /Applications/XAMPP/xamppfiles/phpmyadmin
```
### #1045 - Access denied for user 'root'@'localhost' (using password: NO)
1 Open config.inc.php file in the phpmyadmin directory  /Applications/XAMPP/xamppfiles/phpmyadmin/config.inc.php
2 Find line 21: $cfg['Servers'][$i]['password'] = ''
3 Change it to: $cfg['Servers'][$i]['password'] = 'your_password';
4 Restart XAMPP

### QLSTATE[42000]: Syntax error or access violation: 1071 Specifiedkey was too long; max key length is 767 bytes (SQL: alter table `users` add unique `users_email_unique`(`email`))

 edit your AppServiceProvider.php
 ```php
    use Illuminate\Support\Facades\Schema;

public function boot()
{
    Schema::defaultStringLength(191);
}
 ```
[reference](https://laravel-news.com/laravel-5-4-key-too-long-error)
### SQLSTATE[42S01]: Base table or view already exists: 1050 Table 'users' already exists (SQL: create table `users` (`id` int unsigned not null auto_increment primary key, `name` varchar(191) not null, `email` varchar(191) not null, `password` varchar(191) not null, `remember_token` varchar(100) null, `created_at` timestamp null, `updated_at` timestamp null) default character set utf8mb4 collate utf8mb4_unicode_ci)

drop exists tables in database;
# Tech Note
## Commnet Command 
### Restart the apache server
```
    sudo /Applications/XAMPP/xamppfiles/xampp reloadapache
```
### Restart mysql in command line (Second way)
```
    sudo /Applications/XAMPP/xamppfiles/bin/mysql.server start
```
### Start XAMPP
[xampp command doc](https://phptechnologytutorials.wordpress.com/2013/04/27/operate-xampp-in-ubuntu-using-command-line/)
```
    /Applications/XAMPP/xamppfiles/xampp start
```

## Visual Studio Code Environment For Laravel
 install extensions below :
* Auto Close Tag
* Beautify
* Better Merge
* Debugger for chrome
* Eslint
* PHP debug
* NPM
* Laravel Blade Snippets
* PHP Intellisense Crane
* Git History

##CSS
* add link to layout head tag
```html
    <head> 
        <link rel="stylesheet" type="text/css" href="/public/css/app.css">
        <link rel="stylesheet" type="text/css" href="css/app.css">
    </head>
```
## HTTP Request and Response Doc
[laravel http request doc](https://laravel.com/docs/5.5/requests#request-information)