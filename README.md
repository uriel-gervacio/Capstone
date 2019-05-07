# St Julianas Wedding Planner


[![Build Status](https://travis-ci.com/StJulianaMarriagePlanning/wedding-planner.svg?token=Rs7T85iucDNW9Uy3bTiT&branch=master)](https://travis-ci.com/StJulianaMarriagePlanning/wedding-planner)

## Overview
A wedding planning utility for St Julianas Parish

Built using:

* PHP 7.1
* MySQL 8.0.12
* Laravel 5.7

## Development Environment Setup

### macOS
1. install mysql: `brew install mysql` (or whatever is appropriate for your machine)
2. create mysql database for local environment: 
    1. `mysql -u root -p`
    2. `create database stjulianas;`
    3. `CREATE USER 'wedding-planner'@'localhost' IDENTIFIED BY '<some password>';`
    4. `GRANT ALL PRIVILEGES ON stjulianas.* TO 'wedding-planner'@'localhost';`
    
3. install nodejs: `brew install nodejs`
4. install local tools: 
    1. `brew install composer`
5. from project root
    1. `composer install`
6. from `./wedding-planner`
    1. `npm install`
    2. `composer install`

### windows
1. open powershell admin
2. install chocolatey (copy & paste link)
3. close powershell and reopen
4. install mysql
    1. `choco install mysql -y`
5. create mysql database for local environment
    1.  `mysql -u root -p`
    2. `create database stjulianas;`
    3. `CREATE USER 'wedding-planner'@'localhost' IDENTIFIED WITH mysql_native_password BY '<your password>';`
    4. `GRANT ALL PRIVILEGES ON stjulianas.* TO 'wedding-planner'@'localhost';`
6. copy .env example and paste in same directory
    1. `mv '.\.env.example' '.env'`
    2. (update mysql info as necessary)
7. install nodejs
    1. `choco install nodejs.install -y`
8. install composer
    1.`choco install composer -y`
    2. close and reopen powershell
9. navigate to project root
10. `composer install`
11. navigate to project root/wedding-planner
12. `npm install`
13. update c:/tools/php73/php.ini
    * ;extension=openssl => extension= ./ext/php_openssl.dll
    * ;extension=mbstring => extension= ./ext/php_mbstring.dll
    * ;extension=fileinfo => extension= ./ext/php_fileinfo.dll
    * ;extension=pdo_mysql => extension= ./ext/php_pdo_mysql.dll
14. `composer install`
15. `php artisan key:generate`
### Up and Running (local)
1. Use Laravel Mix to compile and subsequently publish static assets: https://laravel.com/docs/5.7/mix: `npm run watch`
2. Start your MySQL Server
    1. macOS: `brew services start mysql`
    2. Windows:
3. Start your server: `php artisan serve`

### AWS Setup (CLI)
1. Create a key and upload to your AWS Console
2. Install AWS CLI tools: https://docs.aws.amazon.com/cli/latest/userguide/install-macos.html
3. Create cloud formation stack: `aws cloudformation create-stack --stack-name my-wedding-planner --template-body file://./lamp-cloud-formation.json --parameters ParameterKey=KeyName,ParameterValue=st-julianas ParameterKey=DNSName,ParameterValue=test.example.com ParameterKey=DNSContactEmail,ParameterValue=test@example.com ParameterKey=DBName,ParameterValue=stjulianas ParameterKey=DBUser,ParameterValue=weddingplanner ParameterKey=DBPassword,ParameterValue=4YdFQhDjnZ ParameterKey=DBRootPassword,ParameterValue=4YdFQhDjnZ ParameterKey=InstanceType,ParameterValue=t1.micro ParameterKey=SSHLocation,ParameterValue=0.0.0.0/0`
    1. Be sure the `ParamaterValue`s in the command above match your .env file.
4. Grab the DNS portion of the WebsiteURL from Stack creation Outputs for use later (for example): `ec2-54-196-34-126.compute-1.amazonaws.com`

### AWS Setup (UI)
1. Create a key and upload to your AWS Console: 
2. Upload and execute Cloud Formation Template 'lamp-cloud-formation.json':
3. Grab name from Stack creation output for use later (for example): `ec2-54-196-34-126.compute-1.amazonaws.com`

### Deploy to Dev
1. Push updated assets:
    1. update `./deploy.sh.example` with the appropriate key and dns name.
    2. rename `./deploy.sh.example` to `./deploy.sh`
    3. execute, (macOS from project root): `./deploy.sh`

### Connect to Dev
To connect to your dev environment from the CLI: `ssh -i ~/.ssh/<your cert goes here> ec2-user@<your ec2 instance dns name goes here>`

## Shared Development Environment
The shared development environment is located in AWS.  Details on exact location can be found in `deploy.sh.dev`. 

About the shared environment: 
* continuously deployed to any time changes are pushed to the `master` branch on Github.
* only approved pull requests will be merged to `master`
* any failing lint or automated tests will break the build and prevent deployment

### Configure TLS in AWS
1. via ssh: `ssh -i ~/.ssh/<your cert goes here> ec2-user@<your ec2 instance dns name goes here>`  
2. after connecting to EC2 via ssh:
    1. download certbot `wget https://dl.eff.org/certbot-auto`
    2. `chmod a+x certbot-auto`
    3. `sudo ./certbot-auto --debug`
    4. (follow certbot instructions)
    
### Apache HTTP Deployment
#### Prerequisites
1. PHP 7.1 (https://webtatic.com/packages/php71/)
2. MySQL 8+ (https://dev.mysql.com/doc/en/installing.html)
3. php71-pdo (https://www.php.net/manual/en/book.pdo.php)
4. php71-pdo_mysql (https://www.php.net/manual/en/ref.pdo-mysql.php)
5. Composer (https://getcomposer.org)
6. NPM (https://www.npmjs.com)

#### App Installation
1. After cloning this repo to your server, navigate to ./wedding-planner
2. Install PHP dependencies by running `composer install`
3. Install UI dependencies by running `npm install`
4. Additional steps to copy files to the active webserver directory and update permissionscan be found in `deploy.sh.example` (deploy.sh is ignored from git.  you're encouraged to create your own deploy.sh file by using deploy.sh.example as an example)

###Prod Deployment Instructions
 1. In /wedding-planner/resources/mail/notification.blade.php change the aws link in lines 41 and 57 to your domain name. LEAVE THE /{{registrationUrl}}
 2. If you need to change the gmail account that the application sends emails from change lines 29 and 30 in the .env file to match your emails credentials.
    
## Appendix

### Running tests locally
To run unit/feature tests from the CLI (./wedding-planner): `vendor/bin/phpunit tests/` 

### SCSS
Compiling static assets with Laravel Mix: https://laravel.com/docs/5.7/mix

### MySQL
Setting default authenticaton mechanism for MySQL: https://stackoverflow.com/questions/50126503/homebrew-mysql-8-support

### Slack Build Notifications
Configuring Slack build notifications: https://docs.travis-ci.com/user/notifications/
