<?php
class DB{
    static $host = "localhost";
    static $user = "root";
    static $password = "12345678";
    static  $db = "usuario";

    public static function query($sql){

        $con = new mysqli(self::$host, self::$user, self::$password, self::$db);
        $result = $con->query($sql);
        $con->close();
        return $result;
    }
}

?>