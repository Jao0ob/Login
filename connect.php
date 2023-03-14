<?php
    function connect()
    {
        global $connect;

        $server = "localhost";
        $username = "root";
        $password = " ";
        $database = "neon";

        $connect=mysqli($server, $username, $password, $database);
        mysqli_set_charset($connect,"utf8");

        if($connect==true)
        {
            return true;
        }
        else return false;

        mysqli_close($connect);
    }
?>