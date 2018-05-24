This script will update users so the currency they choose on signup will continue to be the currency they have, even after updating your WHMCS to a new default currency.

You will need to update the prices for each product you have in your store, as they will now be set in a new currency.

This script will not update transactions.
This script should be ran at the end of the year, just after the stats are reset.

How to use this script:
Take a backup of your WHMCS database, and store it in a safe place. Clear logs to make it smaller.
Connect the WHMCS database in settings.php
Edit settings.php to the id of the currency to become the new default.
Run step1 in your brower, and follow the wizard.

IMPORTANT AFTER RUNNING IT: CHANGE THE NEW CURRENCY AND OLD CURRENCY ACCORDINGLY.
After running thids script, you must update the tblcurrencies table in your whmcs database.
This means, that if your current default currency is CAD and the new default currency is USD.
You must set the prefix of currency id 1, which is currently CAD, to now be USD, and the other way around for USD to now CAD. Otherwise the stats for next year, will still be in CAD.
What this does, is change all stats of your panel in the following years, to be USD.

Remember to tell your accountant, that transactions made before this script, will be switched. So again, if you switched from CAD to USD, all payments in previous years that show USD will infact be CAD. And CAD will be USD.

Its a bit confusing, however this script will ensure that clients wont change currency, and prices will therefore still be correct for their profile.
