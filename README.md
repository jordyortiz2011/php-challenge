Chicho challenge - Solution by Jordy
================

#### Use
1. Fork this repository
1. Run `composer install`
1. Set the configurations of the database in the file  `config_db.php` (this is in the root)
1. Add contacts for the test, filling the array $contacts in the file  `config_db.php` (this is in the root)
1. For the send real of a SMS, enter to the file `app/tests/MobileTests.php` and replace the number and body of SMS 
  what you wish in the function `it_returns_true_if_sendSMS_is_successful`. (My accouns in Twilio is trial, so i should verify your number to send a sms)
1. Run `php ./vendor/phpunit/phpunit/phpunit` (requires php >= 7.3 if you use other version please update composer.json file first)


