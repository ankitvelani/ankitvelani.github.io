<?php

/* Including Sumbolic Name for Value  */
include_once 'constant.php';
/* End Symbolic Name for Value */

class Connection {

    private $db, $stmt;

    public function __construct() {

        $servername = HOST;
        $username = USERNAME;
        $password = PASSWORD;
        $dbname = DBNAME;
        try {
            $this->db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function showData($table, $data = " * ", $filter = " 1 ") {

        $qry = "SELECT $data from $table where $filter ";
        $stmt = $this->db->query($qry);
        $stmt->execute();
        return($stmt->fetchAll());
    }

    public function putData($table, $value) {
        $qry = "INSERT INTO $table values ( $value )";
        try {

            $stmt = $this->db->prepare($qry);
            $stmt->execute();
            return $this->db->lastInsertId() != 0 ? $this->db->lastInsertId() : TRUE;
        } catch (PDOException $e) {
            return FALSE;
            //$this->conObj->rollback();
            print "Error at PutData !: " . $e->getMessage() . "</br>";
        }
    }

    public function removeData($table, $filter) {

        $qry = "DELETE FROM $table WHERE $filter ";

        try {
            $stmt = $this->db->prepare($qry);
            $stmt->execute();
        } catch (PDOException $e) {
            $this->conObj->rollback();
            print "Error at PutData !: " . $e->getMessage() . "</br>";
        }
    }

    public function updateData($table, $value, $filter) {

    echo    $qry = " UPDATE $table SET   $value   where $filter";

        try {
            $stmt = $this->db->prepare($qry);
            $stmt->execute();
            return TRUE;
        } catch (PDOException $e) {
            $this->conObj->rollback();
            print "Error at PutData !: " . $e->getMessage() . "</br>";
        }
    }

    public function __destruct() {
        $this->db = NULL;
    }

  

}
