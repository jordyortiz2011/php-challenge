<?php


define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
//define('DB_NAME', ''); //NOT NECESSARY, It'll be generate automatic to avoid import it from a file

//FOR THE TEST, FILL THE ARRAY WITH THE NAMES AND NUMBER THAT YOU WISH FOR INSERT IN THE DATABASE
$contacts = array ();

//CONTACT N°1
$contacts['name'][] = 'Jordy';
$contacts['number'][] = '943178688';
//CONTACT N°2
$contacts['name'][] = 'Allen';
$contacts['number'][] = '943178689';
//CONTACT N°3
$contacts['name'][] = 'Ricardo';
$contacts['number'][] = '943178690';


define('CONTACTS', $contacts);

