To test this code:
1. Make sure that you have XAMPP installed
2. Make sure that XAMPP is running with admin privileges
3. Make sure that both the Apache module and the MySQL module are running
4. Make sure that the RAI directory (the directory that contains this file) is inside the htdocs directory.
    (Windows) By default, the default htdocs directory can be found in:
    C:\xampp\htdocs
5. After that, open any browser an go to:
    localhost/rai/index.php

NOTE:
You need a database, username, and password that matches the corresponding variables in the file 'connection.php'
	- By default, XAMPP uses the username 'root' and an empty string as a password
In the database, you will need the following:
	- A table called 'users' with the columns 'username' and 'password' (in our testing, all were set as VARCHAR)
    - A table called 'siteinformation' with the columns 'siteName', 'networkName', and 'prefixName' (in our testing, all were set as VARCHAR)
    - A table called 'creditaccount' with the columns 'username', 'authorized', 'notAuthorized', 'notPaeidAuthorized', and 'totalSold' (in our testing, 'username' was a VARCHAR and the rest were INT)

**For instructions on how to set it up, read the file 'Creating a local database for testing using XAMPP'**
