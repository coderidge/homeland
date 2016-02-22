homeland
===========

A Symfony project created on February 21, 2016, 9:28 am.
=======
# homeland

Doctrine and Sqlite 

* Created a bundle called Registration

* Doctrine Entity called Registrations

* Schema and meta data created and database created with fields of with sqlite.

* However with sqlite, when trying to use the entity in a controller gives an error 'driver not found' the settings in config.yml and parameters.yml seem to correspond correctly with the documention.  I have commented out the Setter methods for updating the database in the controller, but in theory / practice it will work, if the solution to connection to the sqlite driver can be found.


Form builder and other quirks

* Validation only works for assert not blank, not for invalide characters though documentation seems to match the code I've added, so didn't think it was anything obvious and if not working may require another method which can be done with time.

* Form radio button is currently substituted as a drop down as the form builder didn't seem to have an option that worked for radio buttons, or seemed to involve some abstract method that wasn't clear.

* Successful population of the countries drop down, from the json api / url.  There didn't seem to be solution for passing it into the array of the form builder, without showing the array index in drop down as well.  So opted to pass the data in the view and loop through the indexed array, which does the job.

* tests still need to be created but thought time is pressing on.




