# read me first.
The BDO Hub guide to viewing the website 

---
First steps:
1.   Start PHPStorm
2.   Make sure you are properly logged into the project GIT in PHPStorm
3. 	 Close any open projects
4.   Click "check out from version control" -> GIT
5. 	 Open the "runeterra link", then select an empty file directory
6. 	 Confirm by hitting the "clone" button
7.   Open the terminal
8.   Type "composer install" and hit enter

---
Install using Xxamp:
9.  Copy the contents of the .env.example to a new file, name this file ".env"
10. Fill in the proper DB values

                DB_DATABASE=laravel 
                DB_USERNAME=root
                DB_PASSWORD=

11. Start Xxamp, make sure "apache" and "mysql" are running
12. Go to "localhost/phpmyadmin" in a browser and check if a laravel table exists. if it doesn't, create one 
13. Type "php arisan migrate" and confirm
14. You can now open the website in a browser locally
---
Install using Lando:
9. type "Lando init" in the terminal
10. Copy the contents of the .env.example to a new file, name this file ".env"
12. Go to "localhost/phpmyadmin" in a browser and check if a laravel table exists. if it doesn't, create one 
13. Fill in the proper DB values

                DB_DATABASE=laravel 
                DB_USERNAME=root
                DB_PASSWORD=
14. You can now open the website in a browser locally, if you experience any errors look down below for fixes

when experiencing errors, type "lando artisan key:generate" followed by "Lando artisan config:cache" 
The error should be resolved