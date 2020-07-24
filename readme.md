# Club Project

This is the club project developed with Laravel 6.2, on Ubuntu 18.04
using PHP 7.2.24 and MySQL database version 5.7

The first thing you should do is to login to MySQL using the command line. You should
login as a non-root user, if you don't have non-root user created login as a root
and then create the non-root user and its password. After that create the 
database ex. "club" and make sure to set up your db credentials inside the .env file.

Now you can execute the migrations in order to create the db tables 
and to seed the needed data for this project. I've created a couple of
seed classes which should be executed when the migrations are executed.

After that make sure to install the dependencies inside the composer.json file.
For this project I've used the package tymon/jwt-auth.
Jwt-auth provides a simple means of authentication within Laravel 
using JSON Web Tokens.

At the end navigate to the public directory of the laravel project and start up
the PHP built in server - php -S 127.0.0.1:8080 index.php or you can simply type
php artisan serve.

Now you should be able to communicate with the endpoints of the api.
When you'll be sending request using POSTMAN for example to set the Content-Type
and the Accept headers with the value "application/json". 

 



