# CISC 332 Final Group Project Implementation
###### Created by Max Eisen, Andrew Brown, and Henry Mason

This is the implementation/demo part of the final group project for CISC 332 - Database Management Systems W20.

The web page, built using HTML, CSS, and PHP, accesses a MySQL database containing information about animals, and implements the following four functional requirements (as per the outline):

1. Show all the information for all drivers associated with a particular rescue organization
2. For a particular donor, show which organizations they donated to and the total amount donated (over their lifetime)
3. Show the total amount donated for 2018 to a selected organization
4. Show the animals that went from the SPCA directly to a shelter (ie. they did not go through the rescue organization)

The demo will take user inputs through a CSS form for the queries that require user input (1, 2, and 3), and will display either a table containing the requested information, or one line including the requested information. It will display

>No results found.

if the result of any query is empty.

## Instructions

1. Download and install [XAMPP](https://www.apachefriends.org/download.html "Download XAMPP")
2. Navigate to, and clone "cisc332-project" repository into *htdocs* folder
3. Start XAMPP *MySQL Database* and *Apache Web Server*
4. Create a new database called *MAHAnimalServices*
5. Copy text contained in *MAHAnimalServices_DDL.txt* into the SQL query box
6. Navigate to the [MAH Animal Services Website](http://localhost/cisc332-project)
7. Profit.