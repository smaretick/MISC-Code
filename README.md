# MISC-Code
miscellaneous code &amp; scripts

PHP
===
Download and Install PHP on macOS

    Install PHP 7.3 curl -s http://php-osx.liip.ch/install.sh | bash -s 7.3.
    Install PHP 7.2 curl -s http://php-osx.liip.ch/install.sh | bash -s 7.2.
    Install PHP 7.1 curl -s http://php-osx.liip.ch/install.sh | bash -s 7.1.
    Install PHP 5.6 – Running with OSX 10.11 El Capitan or lower versions.
1. UPGRADE HOMEBREW -- brew upgrade curl
2. UPGRADE PHP ---- brew install php or brew upgrade php
   https://getcomposer.org/

Download Composer
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
===========================================================================================
1. curl 7.75.0 already installed
2. brew upgrade php -> ==> Upgrading php 8.0.1_1 -> 8.0.2 
3. setup composer -> /usr/local/bin/composer

4. composer-> /usr/local/bin/composer

Scotts-MacBook-2:PHP scottmaretick$ pwd
/Users/scottmaretick/Desktop/CODE/PHP
-rw-r--r--@  1 scottmaretick  staff  1727 Jun 11  2020 php_install.rtf
-rw-r--r--@  1 scottmaretick  staff   693 Jun 11  2020 BS.php
-rw-r--r--@  1 scottmaretick  staff   718 Jun 11  2020 GOOGLE.php
-rw-r--r--@  1 scottmaretick  staff    99 Jun 11  2020 test1.php
drwxr-xr-x   6 scottmaretick  staff   192 Aug 14  2020 .
drwxr-xr-x  51 scottmaretick  staff  1632 Feb 17 02:34 ..

/Users/scottmaretick/Desktop/MISC-THURS
-rw-r--r--@  1 scottmaretick  staff      5045 Jan 29 11:58 CC.txt
-rwxr-xr-x@  1 scottmaretick  staff       163 Jan 30 00:28 .composer.phar.icloud
-rw-r--r--@  1 scottmaretick  staff      2332 Jan 31 15:27 PTItimer.py
-rw-r--r--@  1 scottmaretick  staff      2238 Feb  3 14:59 XPATH+CSS.txt
-rw-r--r--@  1 scottmaretick  staff       549 Feb  3 21:12 APPIUM.txt
-rw-r--r--@  1 scottmaretick  staff  13361227 Feb  3 21:20 selendroid-standalone-0.17.0-with-dependencies.jar
-rw-r--r--@  1 scottmaretick  staff    144575 Feb  4 21:14 bitbar-ios-sample.ipa
-rw-r--r--@  1 scottmaretick  staff       979 Feb  4 22:49 APP AUTOMATE.txt
drwxr-xr-x@  4 scottmaretick  staff       128 Feb  4 23:22 my-app
drwxr-xr-x   6 scottmaretick  staff       192 Feb  4 23:23 vendor
drwxr-xr-x  14 scottmaretick  staff       448 Feb  4 23:24 MyApplication
drwxr-xr-x   9 scottmaretick  staff       288 Feb  4 23:24 PHP
drwxr-xr-x  12 scottmaretick  staff       384 Feb  4 23:24 MAIL
drwxr-xr-x   6 scottmaretick  staff       192 Feb  8 19:27 automate
drwxr-xr-x   4 scottmaretick  staff       128 Feb  9 02:13 BS-THURS
drwxr-xr-x  18 scottmaretick  staff       576 Feb 18 11:21 .
-rw-r--r--@  1 scottmaretick  staff     10244 Feb 19 21:21 .DS_Store

5. php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
6. php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
Installer verified
7. php composer-setup.php
All settings correct for using Composer
Downloading...

Composer (version 2.0.9) successfully installed to: /Users/scottmaretick/Desktop/MISC-THURS/composer.phar
Use it: php composer.phar
8. php -r "unlink('composer-setup.php');"

9. php composer.phar require php-webdriver/webdriver
Using version ^1.9 for php-webdriver/webdriver
./composer.json has been created
Running composer update php-webdriver/webdriver
Loading composer repositories with package information
Updating dependencies
Lock file operations: 3 installs, 0 updates, 0 removals
  - Locking php-webdriver/webdriver (1.9.0)
  - Locking symfony/polyfill-mbstring (v1.22.1)
  - Locking symfony/process (v4.4.19)
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 0 installs, 2 updates, 1 removal
  - Downloading symfony/process (v4.4.19)
  - Downloading symfony/polyfill-mbstring (v1.22.1)
  - Removing symfony/polyfill-php80 (v1.22.0)
  - Downgrading symfony/process (v5.2.2 => v4.4.19): Extracting archive
  - Upgrading symfony/polyfill-mbstring (v1.22.0 => v1.22.1): Extracting archive
1 package suggestions were added by new dependencies, use `composer suggest` to see details.
Generating autoload files
2 packages you are using are looking for funding.
Use the `composer fund` command to find out more!

10. 


====================================================================================================
PHP
===
Download and Install PHP on macOS

    Install PHP 7.3 curl -s http://php-osx.liip.ch/install.sh | bash -s 7.3.
    Install PHP 7.2 curl -s http://php-osx.liip.ch/install.sh | bash -s 7.2.
    Install PHP 7.1 curl -s http://php-osx.liip.ch/install.sh | bash -s 7.1.
    Install PHP 5.6 – Running with OSX 10.11 El Capitan or lower versions.
UPGRADE HOMEBREW -- brew upgrade curl
UPGRADE PHP ---- brew install php or brew upgrade php
https://getcomposer.org/

Download Composer
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"










