To test this code:
1. Make sure that you have XAMPP installed
2. Make sure that XAMPP is running with admin privileges
3. Make sure that the Apache module is running
4. Make sure that the RAI directory (the directory that contains this file) is inside the htdocs directory.
    (Windows) By default, the default htdocs directory can be found in:
    C:\xampp\htdocs
5. Make sure that you have PostgreSQL installed:
    - Your server, username, password, database, and port must be specified in the "connection.php" file
    - Your database will need the tables found under "docs/database_tables.txt"
6. After that, open any browser an go to:
    localhost/rai/index.php

NOTE:
Double check your server, username, password, database, and port in "connection.php"
	- By default, PostgreSQL will use the username 'postgres'
XAMPP comes with MySQL by default, but this will NOT work with these files. If for some reason you want to test it with MySQL, you will have to follow these steps:
    - manually convert all the postgresql commands into mysql (you can easily Google for equivalent commands)
    - create a database in XAMPP (for instructions on how to set it up, read the file 'Creating a local database for testing using XAMPP' under the docs/)
