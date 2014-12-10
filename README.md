Girls_elementary_computer_club
==============================

A basic search + add engine for quotes to demonstrate web infrastructure and importance of scalability created using http://www.findsourcecode.com/php/how-to-create-a-search-engine-in-php-with-mysql/

Want to build your own search engine for storing quotes, songs, lyrics, books or anything else? Read on!

You will need to have the following things installed on your computer to create your own search engine just like this one:

Installation:
---------------

1. Install Apache server - This is the tool that allows you to interact with your application from your web browser. You can install it from http://httpd.apache.org/docs/2.2/install.html. If you are on Linux, you can just do "sudo apt-get install apache2" on the command line and you're done. If you're on mac or windows, see instructions - http://machiine.com/2013/how-to-install-apache-and-php-on-a-mac-with-osx-10-8-mamp-part-1/ and http://httpd.apache.org/docs/2.2/platform/windows.html#inst
2. PHP - it is a server side programming language that allows you to talk to the database and display stuff on the html page that you see on your browser. You can install it on linux with "sudo apt-get install php5 libapache2-mod-php5 php5-mcrypt" on your command line, or on windows or mac by following steps in http://www.sitepoint.com/how-to-install-php-on-windows/ and http://php.net/manual/en/install.macosx.bundled.php
3. MySQL - This is the database that stores all of your search data in tables. To install this, just do a "sudo apt-get install mysql-server" on linux, or look up for windows and mac instructions in http://dev.mysql.com/downloads/mysql/

Configuration:
---------------

1. Apache should start automatically after you install it. You can check if it up by opening url "localhost" on your browser. It should show an apache welcome page.
2. Start up MySQL by clicking on the icon on Windows or Mac after installing, and on linux with "sudo /etc/init.d/mysql start" (Google "how to start mysql" if you get an error and you'll see alternate commands and ways to start it up)
3. Log into MySQL with "mysql -u <username> -p <database_name>" and press ENTER. You will be prompted for the login password that you might have set up during installation. 
4. Once in the MySQL database, create a table to store your data. For example, to create the quotes table, type in something like: CREATE TABLE quotes (id NOT NULL AUTO-INCREMENT PRIMARY KEY, quote TEXT, author TEXT, url TEXT, keywords TEXT);
5. Once table is created, log out of mysql with "quit;"
6. open up file explorer and go into /var/www/html on linux or within the default apache directory on Mac on Windows (installation should tell you where they reside). Then copy all the php files in this repo to that location. Also, copy over the whole "i" directory as it is within the same location. 


That's it! Open your browser and enter url "localhost/index.php" and you should see the familiar search page you saw in the demonstration. Enjoy!

