<?php

namespace App\Services;

include_once ("./config_db.php");
include_once ("ConnectDB.php");

use App\Contact;


class ContactService
{
	public static function findByName($name): Contact
	{
		// queries to the db
        $db = new \mysqli(DB_HOST, DB_USER, DB_PASS, "db_php_challenge");

        if ($db->connect_errno) {
            die("error de conexión: ".mysqli_connect_error());
        }

        $consulta = $db->query("select * from tbl_contacts where cName =  '$name' ");
        //var_dump($consulta);

        if($consulta->num_rows > 0) {
            while ($row = $consulta->fetch_array()) {
                return new Contact($row["cName"], $row["cNumber"] );
            }
        }else {
            return new Contact('', '' );
        }
	}

    public static function validateIfContactExists(string $name): bool
    {
        // queries to the db
        $db = new \mysqli(DB_HOST, DB_USER, DB_PASS, "db_php_challenge");

        if ($db->connect_errno) {
            die("error de conexión: ".mysqli_connect_error());
        }

        $consulta = $db->query("select * from tbl_contacts where cName = '$name' ");

        if($consulta->num_rows > 0) {
            return true;
        }else {
            return false;
        }
    }

	public static function validateNumber(string $number): bool
	{
        //For android mobile, its not necessary have the contact registered
        //This test, suppose only we can send SMS to peruvians numbers with 9 digits

        if ( preg_match('/^[0-9]{9}$/i', $number)  == 1 ) {
            return true;
        }else {
            return false;
        }

	}
}

