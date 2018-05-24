<?php

/*
MySQL settings for your WHMCS installation.
"host", "username", "password", "database"
*/
$mysqli = new mysqli("localhost", "sandbox", "password", "sandbox");

/*
This is the name of the table, that holds account information.
*/
$clientsTable = "tblclients";

/*
This field sets the current default currency, usually its id 1 in the tblcurrencies table, in whmcs database.
Its the currency currently seen on the dashboard over all transactions in WHMCS.
*/
$defCurrency = 1;

/*
This should be the ID of the new default currency, say you're changing from CAD to USD. 
And in the table you see that USD has an ID of 3, this should be set to 3 instead of 4.
*/
$newDefCurrency = 4;

/*
Failsafe number, this is what the users who are currently using the old default, will be set to, to allow a failsafe.
So if it fails, we can easily change them back.
You do not need to change this.
*/
$failsafe = 105;
